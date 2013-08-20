<?php snippet('header') ?>

<div class="content">
	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<br />
	<?= kirbytext($page->text()) ?>
	<br />
	<table class="table">
		<tr>
			<th></th>
			<th>Nom de l'objet</th>
			<th>Titre de l'oeuvre</th>
			<th>Artiste</th>
			<th>Contrefaçon</th>
		</tr>
	<?php foreach($page->children()->invisible()->sortBy($sort='title', $dir='asc') as $tableau): ?>
  
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
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>