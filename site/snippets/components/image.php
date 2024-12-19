<?php if($image->extension() == 'gif'): ?>
	<picture>
		<img
			alt="<?= $alt ?>"
			src="<?= $image->url() ?>"
			class="<?= $lazy ?>"
			srcset="<?= $image->url() ?>"
		>
	</picture>
<?php else: ?>
	<picture>
		<source
			srcset="<?= $image->srcset($ratio . '-webp') ?>"
			type="image/webp"
			sizes="<?= $sizes ?>"
		>
		<img
			alt="<?= $alt ?>"
			src="<?= $image->resize(300)->url() ?>"
			srcset="<?= $image->srcset($ratio) ?>"
			class="<?= $lazy ?>"
			sizes="<?= $sizes ?>"
			<?php if($page->template() != "52-actions-artwork"):?>loading="lazy"<?php endif ?>
		>
	</picture>
<?php endif ?>