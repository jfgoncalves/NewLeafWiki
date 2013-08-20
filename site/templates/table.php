<?php snippet('header') ?>

<div class="content">
	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<br />
	<?= kirbytext($page->text()) ?>
	<br />
	<table class="table faune">
		<tr>
			<th></th>
			<th>Nom</th>
			<th>Nom Anglais</th>
			<th>Prix de Revente</th>
			<th>Lieu</th>
			<th>Heure(s)</th>
			<th>Mois</th>
		</tr>
	<?php foreach($page->children()->invisible()->sortBy($sort='title', $dir='asc') as $element): ?>
  
		<tr>
		  	<td><a href="<?php echo $element->url() ?>">
		  		<?php
			$pic = $element->files()->find('icon.png');
			if ($pic !== NULL) {
				echo "<img src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_small.png' />";
			}
			?></a></td>
		    <td><a href="<?php echo $element->url() ?>"><?php echo $element->title() ?></a></td>
		    <td><?php echo $element->english() ?></td>
		    <td><?php 
		    	$retail = (string)$element->retail();
		    	$retail = str_replace(' ', '', $retail);
		    	if ($retail == "") {
		    		echo "";
		    	}

		    	else {
		    		echo number_format($retail, 0, ',', ' ');
		    	}
				?></td>
		    <td><?php echo $element->location() ?> </td>
		    <td><?php echo $element->time() ?></td>
		    <td><?php echo $element->month() ?></td>
		</tr>

	<?php endforeach ?>
	</table>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>