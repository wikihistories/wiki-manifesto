/*Show hide*/
document.addEventListener('DOMContentLoaded', () => {
  const adjustOpenExpandableSections = () => {
    document.querySelectorAll('.expandable-section').forEach(section => {
      if (section.style.maxHeight && parseInt(section.style.maxHeight, 10) > 0) {
        section.style.maxHeight = 'auto'; 
        const newHeight = section.scrollHeight;
        section.style.maxHeight = newHeight + 'px'; 
      }
    });
  };

  // Collapsible logic
  document.querySelectorAll('.collapsible').forEach(item => {
    const openButton = item.querySelector('.open-button');
    const sectionContent = item.querySelector('.expandable-section');
    const expandContractButton = item.querySelector('.expand-contract');

    let isOpen = false;

    openButton.addEventListener('click', function (e) {
      e.preventDefault();

      const parentSection = item.closest('.expandable-section'); 
      const isBackground = item.id === 'background'; 

      if (isOpen) {
        sectionContent.style.maxHeight = '0';
        expandContractButton.textContent = isBackground ? '[more]' : '[show]';

        if (parentSection) {
          const currentHeight = parseInt(parentSection.style.maxHeight, 10) || parentSection.scrollHeight;
          parentSection.style.maxHeight = (currentHeight - sectionContent.scrollHeight) + 'px';
        }
      } else {
        sectionContent.style.maxHeight = sectionContent.scrollHeight + 'px';
        expandContractButton.textContent = isBackground ? '[less]' : '[hide]';

        if (parentSection) {
          const currentHeight = parseInt(parentSection.style.maxHeight, 10) || parentSection.scrollHeight;
          parentSection.style.maxHeight = (currentHeight + sectionContent.scrollHeight) + 'px';
        }
      }

      isOpen = !isOpen;
    });
  });

  // Listen for text size changes
  document.querySelectorAll('input[name="text-size"]').forEach(radio => {
    radio.addEventListener('change', () => {
      document.body.classList.remove('text-small', 'text-standard', 'text-large');
      if (radio.checked) {
        document.body.classList.add(`text-${radio.value}`);
        setTimeout(adjustOpenExpandableSections, 50); 
      }
    });
  });

  adjustOpenExpandableSections();



	// Controls
	// Text size
	const radioButtons = document.querySelectorAll('input[name="text-size"]');
	radioButtons.forEach(radio => {
		radio.addEventListener('change', () => {
			document.body.classList.remove('text-small', 'text-standard', 'text-large');
			if (radio.checked) {
				document.body.classList.add(`text-${radio.value}`);
			}
		});
	});

	// Color
	const colorButtons = document.querySelectorAll('input[name="color"]');
	colorButtons.forEach(color => {
		color.addEventListener('change', () => {
			document.body.classList.remove('theme-light', 'theme-dark');
			if (color.checked) {
				document.body.classList.add(`theme-${color.value}`);
			}
		});
	});

	// Expand/Collapse all
	const displayButtons = document.querySelectorAll('input[name="display"]');

	displayButtons.forEach(button => {
		button.addEventListener('change', () => {
			const collapsibleItems = document.querySelectorAll('.collapsible');

			if (button.value === 'expand') {
				collapsibleItems.forEach(item => {
					const sectionContent = item.querySelector('.expandable-section');
					const expandContractButton = item.querySelector('.expand-contract');
					const isBackground = item.id === 'background';

					// Expand the section
					sectionContent.style.maxHeight = sectionContent.scrollHeight + 'px';
					expandContractButton.textContent = isBackground ? '[less]' : '[hide]';

					// Set isOpen attribute
					sectionContent.setAttribute('data-is-open', 'true');
				});
			} else if (button.value === 'collapse') {
				collapsibleItems.forEach(item => {
					const sectionContent = item.querySelector('.expandable-section');
					const expandContractButton = item.querySelector('.expand-contract');
					const isBackground = item.id === 'background';

					// Collapse the section
					sectionContent.style.maxHeight = '0';
					expandContractButton.textContent = isBackground ? '[more]' : '[show]';

					// Set isOpen attribute
					sectionContent.setAttribute('data-is-open', 'false');
				});
			}
		});
	});

	// Individual Toggle Logic (keeps "is-open" synced)
	document.querySelectorAll('.collapsible').forEach(item => {
		const openButton = item.querySelector('.open-button');
		const sectionContent = item.querySelector('.expandable-section');
		const expandContractButton = item.querySelector('.expand-contract');
		const isBackground = item.id === 'background';

		openButton.addEventListener('click', (e) => {
			e.preventDefault();

			// Check the current state
			const isOpen = sectionContent.getAttribute('data-is-open') === 'true';

			if (isOpen) {
				// Collapse the section
				sectionContent.style.maxHeight = '0';
				expandContractButton.textContent = isBackground ? '[more]' : '[show]';
				sectionContent.setAttribute('data-is-open', 'false');
			} else {
				// Expand the section
				sectionContent.style.maxHeight = sectionContent.scrollHeight + 'px';
				expandContractButton.textContent = isBackground ? '[less]' : '[hide]';
				sectionContent.setAttribute('data-is-open', 'true');
			}
		});
	});




	// Select all 'show-hide' buttons
	const showHideButtons = document.querySelectorAll('.show-hide');
	showHideButtons.forEach(button => {
		const showHideButtonText = button.querySelector('.text');
		button.addEventListener('click', () => {
			// Find the associated 'collapsed-controls' for the button
			const collapsedControls = button.closest('div').nextElementSibling;

			if (collapsedControls.style.maxHeight === '0px' || !collapsedControls.style.maxHeight) {
				// Expand the section
				collapsedControls.style.maxHeight = collapsedControls.scrollHeight + 'px';
				showHideButtonText.textContent = 'hide'; 
			} else {
				// Collapse the section
				collapsedControls.style.maxHeight = '0px';
				showHideButtonText.textContent = 'show'; 
			}
		});
	});

	// Add Intersection Observer for #controls
	const controls = document.querySelector('#controls-container');
	const marker = document.querySelector('#controls');
	const collapsedSections = document.querySelectorAll('.collapsed-controls');

	if (marker && controls && window.innerWidth > 1023) {
		const observer = new IntersectionObserver(
			([entry]) => {
				if (entry.isIntersecting) {
					// Marker is visible in the viewport
					controls.classList.remove('scroll-with-page');
				} else {
					// Marker is outside the viewport
					controls.classList.add('scroll-with-page');
	
					// Collapse all sections and reset buttons
					collapsedSections.forEach(collapsedSection => {
						collapsedSection.style.maxHeight = '0px'; // Collapse the section
	
						// Reset the associated show-hide button text
						const showHideButton = collapsedSection
							.closest('#contents, #appearance') // Find the closest parent section
							.querySelector('.show-hide'); // Locate the show-hide button
	
						if (showHideButton) {
							const showHideButtonText = showHideButton.querySelector('.text');
							if (showHideButtonText) {
								showHideButtonText.textContent = 'show'; // Set text content to "show"
						}
						}
					});
				}
			},
			{ threshold: 0 }
		);
	
		observer.observe(marker);
	}
});
