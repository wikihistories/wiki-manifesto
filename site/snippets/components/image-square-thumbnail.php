<?php 
		$alt = $image->alt()->text();
		$sizes = "null";
?>
<div class="image-container image-square lazy hover-image relative mix-blend-screen">
	<?php snippet('components/image', ['image' => $image, 'alt' => $alt, 'ratio' => 'square-thumb', 'sizes' => $sizes, 'lazy' => 'grayscale relative']) ?>
</div>