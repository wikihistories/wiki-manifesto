    </main>
	<footer class="page-grid wrapper vertical-wrapper">
		<div id="citation" class="col-span-12 md:col-span-6 xl:col-span-5 2xl:col-span-4 small-text md:order-2 md:col-start-7 xl:col-start-7 2xl:col-start-7 medium-gap-b">
			<?= $page->citation() ?>
			<div class="text-xs hidden md:block"><br><br>
				Design and code by <a href="https://ellewilliams.com" target="_blank">Elle Williams Studio</a>.
			</div>
		</div>
		<div id="funding" class="col-span-12 md:col-span-6 xl:col-span-5 2xl:col-span-4 small-text md:order-1 xs-gap-b">
			<?= $page->funding() ?>
			<div class="flex flex-wrap gap-4 md:gap-5 small-gap-t">
				<?php 
				$items = $page->logos()->toStructure();
				foreach ($items as $item): 
          if ($image = $item->picture()->toFile()): ?>
            <div class="logo h-14 md:h-16 relative">
              <?php if ($item->website()->isNotEmpty()): ?>
                <a href="<?= $item->website() ?>" target="_blank" class="inline-block h-full w-auto">
									<?= svg($image) ?>
                </a>
              <?php else: ?>
                <div class="inline-block h-full w-auto">
									<?= svg($image) ?>
                </div>
              <?php endif ?>          
            </div>
          <?php endif ?>
        <?php endforeach ?>
			</div>
			<div class="text-xs md:hidden"><br><br>
				Design and code by <a href="https://ellewilliams.com" target="_blank">Elle Williams Studio</a>.
			</div>
		</div>
	</footer>
<?= js([
			'assets/js/footer.js?v=1.0',
		]) ?>
		<?php snippet('seo/schemas'); ?>
</body>
</html>