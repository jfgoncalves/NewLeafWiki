<!DOCTYPE html>
<html lang="en">
<head>
	
	<title><?= html($page->title()) ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<?= css('assets/styles/styles.css') ?>
</head>

<body>
	
	<div id="wrapper">
		
		<div class="menu">
			<a id="logo" href="/"></a>
			<form id="search" action="./search"><input type="search" name="q" placeholder="Rechercher...">
			<?php
				if (isset($_SERVER['HTTP_USER_AGENT'])) {
					$agent = $_SERVER['HTTP_USER_AGENT'];
				}

				if (stripos($agent, 'nintendo 3ds') !== FALSE) {
					echo "<input type='submit' value='Go'>" ;
				}
			?>
			</form>
			<?php snippet('treemenu') ?>
		</div>
