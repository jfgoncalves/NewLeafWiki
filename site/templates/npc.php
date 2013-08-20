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
			<th>Lieu</th>
			<th>Moment</th>
		</tr>
	<?php foreach($page->children()->invisible()->sortBy($sort='title', $dir='asc') as $element): ?>
  
		<tr>
		  	<td><a href="<?php echo $element->url() ?>">
		  		<?php
			$pic = $element->files()->find('personnage.png');
			if ($pic !== NULL) {
				echo "<img class='npcThumb' src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_small.png' />";
			}
			?></a></td>
		    <td><a href="<?php echo $element->url() ?>"><?php echo $element->title() ?></a></td>
		    <td><?php echo $element->english() ?></td>
		    <td><?php echo $element->location() ?></td>
		    <td><?php echo $element->time() ?></td>
		</tr>

	<?php endforeach ?>
	</table>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>