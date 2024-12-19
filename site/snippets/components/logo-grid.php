<?php
	$logos = $page->logos()->toFiles();
	foreach ($logos as $logo): ?>
		<img class="lazy logo-image grayscale <?= $logo->orientation() ?>"
		alt="<?= $logo->alt() ?>"
		src="<?= $logo->resize(200)->url() ?>"
		srcset="<?= $logo->srcset([200, 300, 400,]) ?>"
		width="<?= $logo->width() ?>"
		height="<?= $logo->height() ?>"
		loading="lazy"
		>
<?php endforeach ?>