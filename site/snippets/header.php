<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<?php if($page->template() == 'home'): ?>
  	<title><?= $site->title() ?></title>
	<?php else: ?>
		<title><?= $page->title() ?> | <?= $site->title() ?></title>
	<?php endif ?>

	<?php snippet('seo/head'); ?>
	<?php snippet('favicons') ?>

  <?= css([
    'assets/css/styles.css?v=1.1',
  ]) ?>

</head>
<body id="<?= $page->template() ?>" class="theme-dark">
	<header id="header" class="paragraph wrapper vertical-wrapper page-grid">
		<h1 class="heading-1 col-span-12 sm:col-span-11 -mt-[0.5%] text-balance">
			<?= $site->title() ?>
		</h1>
	</header>
	<main>
