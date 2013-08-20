<?php snippet('header') ?>

<div class="content">
	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<br />
	<?= kirbytext($page->text()) ?>
	<br />
	<h1>Liste des tableaux</h1>
	<table class="table">
		<tr>
			<th></th>
			<th>Nom de l'objet</th>
			<th>Titre de l'oeuvre</th>
			<th>Peintre</th>
			<th>Contrefaçon</th>
		</tr>
	<?php foreach($pages->findbyUID("tableaux")->children()->invisible()->sortBy($sort='title', $dir='asc') as $tableau): ?>
  
		<tr>
		  	<td><a href="<?php echo $tableau->url() ?>">
		  		<?php
			$pic = $tableau->files()->find('reel.png');
			if ($pic !== NULL) {
				echo "<img class='tableauThumb' src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_small.png' />";
			}
			?></a></td>
		    <td><a href="<?php echo $tableau->url() ?>"><?php echo $tableau->title() ?></a></td>
		    <td><?php echo $tableau->realname() ?></td>
		    <td><?php echo $tableau->realauthor() ?></td>
		    <td><?php echo $tableau->howtodetect() ?></td>
		</tr>

	<?php endforeach ?>
	</table>
	<br />
	<h1>Liste des sculptures</h1>
	<table class="table">
		<tr>
			<th></th>
			<th>Nom de l'objet</th>
			<th>Titre de l'oeuvre</th>
			<th>Artiste</th>
			<th>Contrefaçon</th>
		</tr>
	<?php foreach($pages->findbyUID("sculptures")->children()->invisible()->sortBy($sort='title', $dir='asc') as $sculpture): ?>
  
		<tr>
		  	<td><a href="<?php echo $sculpture->url() ?>">
		  		<?php
			$pic = $sculpture->files()->find('reel.png');
			if ($pic !== NULL) {
				echo "<img class='sculptureThumb' src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_small.png' />";
			}
			?></a></td>
		    <td><a href="<?php echo $sculpture->url() ?>"><?php echo $sculpture->title() ?></a></td>
		    <td><?php echo $sculpture->realname() ?></td>
		    <td><?php echo $sculpture->realauthor() ?></td>
		    <td><?php echo $sculpture->howtodetect() ?></td>
		</tr>

	<?php endforeach ?>
	</table>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>