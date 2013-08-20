<?php snippet('header') ?>

<div class="content">

	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<br />
	<div class="sheet batiment">
		<div>
			<h1><?php echo $page->title() ?></h1>
		</div>
		<div id="pic">
			<?php
			$pic = $page->images()->find('batiment.png');
			if ($pic !== NULL) {
				echo "<img class='batimentThumb' src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_big.png' />";
			}
			?>
		</div>
		<div><span class="bold">Nom Anglais :</span> <?php echo $page->english() ?></div>
		<div><span class="bold">Tenu par :</span>  <?php echo $page->proprio() ?></div>
		<div><span class="bold">Localisation :</span> <?php echo $page->location() ?></div>
		<div><span class="bold">Heures d'ouvertures :</span>
			<?php
			$timestart = (string)$page->timestart();
			$timeend = (string)$page->timeend();
			if ($timestart == "" && $timeend == "") {
				echo "Ouvert tout le temps";
			}

			else {
				echo "Ouvert de ".$timestart." à ".$timeend;
			}

			?>
		</div>
			<?php 
			$issell = (string)$page->issell;
			if ($issell == "oui") {
				echo "<div><span class='bold'>En vente :</span><br />".$page->sell()."</div>";
			}

			?>
	</div>
	<br />
	<div><?= kirbytext($page->text()) ?></div>
	<br />
	<?php snippet('gallery') ?>
	<br />
	<table class="table cofee">
		<tr>
			<th>Personnages Spéciaux</th>
			<th>Graines de café</th>
			<th>Lait</th>
			<th>Sucre</th>
		</tr>
	<?php foreach($pages->findbyUID("personnages-speciaux")->children()->invisible()->filterBy('iscofee', 'oui')->sortBy($sort='title', $dir='asc') as $npc): ?>
  
		<tr>
		    <td><a href="<?php echo $npc->url() ?>"><?php echo $npc->title() ?></a></td>
		    <td><?php
		    $cafe = strval($npc->cofee());
			$cafe = strtr($cafe, "_", " ");
			echo $cafe ?></td>
		    <td><?php 
		    $lait = strval($npc->milk());
		    $lait = strtr($lait, "_", " ");
		    echo $lait ?></td>
		    <td><?php echo $npc->sugar() ?> </td>
		</tr>

	<?php endforeach ?>
	</table>
	<br /><br />
	<table class="table cofee">
		<tr>
			<th>Villageois</th>
			<th>Graines de café</th>
			<th>Lait</th>
			<th>Sucre</th>
		</tr>
	<?php foreach($pages->findbyUID("villageois")->children()->invisible()->sortBy($sort='title', $dir='asc') as $habitant): ?>
  
		<tr>
		    <td><a href="<?php echo $habitant->url() ?>"><?php echo $habitant->title() ?></a></td>
		    <td><?php
		    $cafe = strval($habitant->cofee());
			$cafe = strtr($cafe, "_", " ");
			echo $cafe ?></td>
		    <td><?php 
		    $lait = strval($habitant->milk());
		    $lait = strtr($lait, "_", " ");
		    echo $lait ?></td>
		    <td><?php echo $habitant->sugar() ?> </td>
		</tr>

	<?php endforeach ?>
	</table>
	<br />
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>