<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <?= css(['assets/css/index.css', '@auto']) ?>

    <title></title>
</head>


<body>
	<header id="navbar" class="banner">
		<img id="logo" src="<?= url('assets/images/bemo-logo.png') ?>">
		<nav id="menu">
			<?php foreach ($pages->listed() as $pg): ?>
	        	<?= $pg->title()->link() ?>
	        <?php endforeach ?>
	    </nav>
	</header>
	<div id="coverwrapper">
		<img id="cover" src="<?= $page->image()->url() ?>"></img>
		<div id="heading"><h1><?= $page->heading() ?></h1></div>
	</div>