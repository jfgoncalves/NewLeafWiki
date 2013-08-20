<?php snippet('header') ?>

<div class="content">
	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<br />
	<?= kirbytext($page->text()) ?>
	<br /><br />
	<table class="table">
		<tr>
			<th></th>
			<th>Nom</th>
			<th>Nom Anglais</th>
			<th>Date d'anniversaire</th>
			<th>Personnalité</th>
			<th>Espèce</th>
		</tr>
	<?php foreach($page->children()->invisible()->sortBy($sort='title', $dir='asc') as $element): ?>
  
		<tr>
		  	<td><a href="<?php echo $element->url() ?>">
		  		<?php
			$pic = $element->files()->find('habitant.png');
			if ($pic !== NULL) {
				echo "<img class='habThumb' src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_small.png' />";
			}
			?></a></td>
		    <td><a href="<?php echo $element->url() ?>"><?php echo $element->title() ?></a></td>
		    <td><?php echo $element->english() ?></td>
		    <td><?php 
				setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
				$bDay = strtotime($element->birthday().".2008");
				echo strftime('%d %B', $bDay);
		?></td>
		    <td><?php echo $element->personality() ?></td>
		    <td><?php echo $element->species() ?></td>
		    
		</tr>

	<?php endforeach ?>
	</table>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>