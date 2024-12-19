<?php snippet('header') ?>
	<main class="wrapper page-grid">

		<section id="pre-intro" class="page-grid relative vertical-wrapper items-end content-end col-span-12">
			<div class="paragraph col-span-12 md:col-span-8 lg:col-span-9 border-b vertical-wrapper">
				<div id="sub-heading" class="md:w-3/4 lg:w-1/2 xl:w-[40%] 3xl:w-[35%] text-pretty">
					<?= $page->subheading() ?>
				</div>
			</div>
			<div id="publish-date" class="hidden md:block col-span-4 lg:col-span-3 border-b vertical-wrapper small-text align-bottom">
				Published <?= $page->publishDate()->toDate('j M, Y') ?>
			</div>
		</section>

		<div class="col-span-12 items-start page-grid">

			<section id="introduction" class="vertical-wrapper col-span-12 md:col-span-8 lg:col-span-9 order-2 md:order-1 items-start">
				<div class="paragraph">
					<?= $page->introduction() ?>
				</div>
			</section>

			<section id="controls" class="col-span-12 md:col-span-4 lg:col-span-3 order-1 items-start">
				<div id="controls-container" class="grid grid-gap grid-cols-2">
					<?php snippet('components/controls') ?>
				</div>
			</section>
		
		</div>

		<section id="principles" class="col-span-12 vertical-wrapper page-grid small-gap-t order-3">
			<?php
				$principles = $page->principles()->toStructure();
				foreach ($principles as $principle): ?>
					<div class="principle border col-span-12 md:col-span-9 mb-5 md:mb-7 xl:mb-10 wrapper vertical-wrapper collapsible">
						<div class="flex justify-between">
							<div class="size-fit text-pretty">
								<span class="inline heading-2">
									<?= $principle->heading() ?>
								</span>
								<div class="open-button small-text cursor-pointer inline-block tracking-[-0.01em] leading-[120%] -translate-y-[2px] mt-2 md:mt-3" aria-label="Open section" role="button">
									<span class="expand-contract">[show]</span>
								</div>
							</div>
							<div class="principle-number !font-bold w-[34px] h-[34px] md:w-[45px] md:h-[45px] xl:w-[56px] xl:h-[56px] 2xl:w-[64px] 2xl:h-[64px] pt-1 xl:pt-2 2xl:pt-[7px] 3xl:pt-[6px] text-center -mt-[15px] -mr-[15px] md:-mt-[18px] md:-mr-[18px] ml-2">
								<?= $principle->indexOf() + 1 ?>
							</div>
						</div>
						<div class="expandable-section overflow-hidden transition-[max-height] duration-300 ease-in-out paragraph" style="max-height: 0px;">
							<div class="pt-3 md:pt-4 border-t mt-4 md:mt-5">
								<?= $principle->description() ?>
							</div>
						</div>
					</div>
			<?php endforeach ?>
		</section>

		<section id="background" class="col-span-12 vertical-wrapper page-grid xl-gap-t vertical-wrapper border-t -mt-[0.5%] collapsible order-4">
			<h2 class="heading-1 col-span-12">
				Background
			</h2>
			<div class="paragraph col-span-12 lg:col-span-9 medium-gap-t">
				<?= $page->background1() ?>
			</div>
			<div class="expandable-section col-span-12 lg:col-span-9 overflow-hidden transition-all duration-300 ease-in-out paragraph" style="max-height: 0px;">
				<div class="paragraph text-gap-t">
					<?= $page->background2() ?>
				</div>
			</div>
			<div class="open-button small-text cursor-pointer col-span-12 tracking-[-0.01em] leading-[120%] mt-2 md:mt-3" aria-label="Open section" role="button">
				<span class="expand-contract">[more]</span>
			</div>
		</section>

		<section id="contributors" class="col-span-12 vertical-wrapper page-grid xl-gap-t xl-gap-b vertical-wrapper border-t -mt-[0.5%] order-5">
			<h2 class="heading-1 col-span-12 medium-gap-b">
				Contributors
			</h2>
			<?php
				$contributors = $page->contributors()->toStructure();
				// Split contributors into two arrays
				$splitContributors = [
					'left' => $contributors->slice(0, ceil($contributors->count() / 2)),
					'right' => $contributors->slice(ceil($contributors->count() / 2))
				];
			?>

			<?php foreach (['left', 'right'] as $column): ?>
				<div class="col-span-12 md:col-span-6 page-grid grid-gap-vertical mb-5 md:mb-0">
					<?php foreach ($splitContributors[$column] as $contributor): ?>
						<div class="contributor border vertical-wrapper collapsible col-span-12">
							<div class="flex justify-between relative">
								<div class="size-fit -my-1 md:-my-2 wrapper">
									<span class="inline paragraph">
										<?= $contributor->name() ?>
									</span>
									<div class="open-button small-text cursor-pointer inline-block tracking-[-0.01em] leading-[120%] -translate-y-[2px] mt-2 md:mt-3" aria-label="Open section" role="button">
										<span class="expand-contract">[show]</span>
									</div>
								</div>
								<?php if ($image = $contributor->image()->toFile()): ?>
									<div class="h-[calc(100%+32px)] md:h-[calc(100%+40px)] image-container absolute right-0 aspect-[1/1] -my-4 md:-my-5 bg-blue">
										<?php snippet('components/image-square-thumbnail', ['image' => $image]) ?>
									</div>
								<?php endif ?>
							</div>
							<div class="expandable-section overflow-hidden transition-all duration-300 ease-in-out paragraph" style="max-height: 0px;">
								<div class="pt-3 md:pt-4 border-t mt-4 md:mt-5 small-text wrapper">
									<?= $contributor->bio() ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endforeach; ?>
		</section>

	</main>
<?php snippet('footer') ?>
