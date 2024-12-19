<?php if($image = $site->favicon()->toFile()): 
	$src = $image->url(); 
	$size16 = $image->resize(16)->url();
	$size32 = $image->resize(32)->url(); 
	$size48 = $image->resize(48)->url(); 
	$size64 = $image->resize(64)->url(); 
	$size96 = $image->resize(96)->url();
	$size128 = $image->resize(128)->url();
	$size144 = $image->resize(144)->url();
	?>
<link rel="icon" sizes="16x16" href="<?= $size16 ?><">
<link rel="icon" sizes="32x32" href="<?= $size32 ?>">
<link rel="icon" sizes="48x48" href="<?= $size48 ?>">
<link rel="icon" sizes="64x64" href="<?= $size64 ?>">
<link rel="icon" sizes="96x96" href="<?= $size96 ?>">
<link rel="icon" sizes="128x128" href="<?= $size128 ?>">
<link rel="icon" sizes="144x144" href="<?= $size144 ?>">
<link rel="icon" sizes="192x192" href="<?= $src ?>">
<!--<link rel="icon" sizes="512x512" href="">-->
<?php endif ?>

<?php if($image = $site->appleicon()->toFile()): $src = $image->url() ?>
<link rel="apple-touch-icon" href="<?= $src ?>"><!-- 180×180 -->
<?php endif ?>