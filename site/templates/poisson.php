<?php snippet('header') ?>

<div class="content">
	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<div class="sheet fish">
		<div>
			<h1><?php echo $page->title() ?></h1>
		</div>
		<div id="pic">
			<?php
			$pic = $page->images()->find('poisson.png');
			if ($pic !== NULL) {
				echo "<img class='poissonThumb' src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_big.png' />";
			}
			?>
		</div>
		<div><span class="bold">Nom anglais :</span> <?php echo $page->english() ?></div>
		<div><span class="bold">Rareté :</span> <?php echo $page->rarity() ?></div>
		<div><span class="bold">Lieu :</span> <?php echo $page->location() ?></div>
		<div><span class="bold">Moment de la journée :</span> <?php echo $page->time() ?></div>
		<div><span class="bold">Moment de l'année :</span> <?php echo $page->month() ?></div>
		<div><span class="bold">Prix de revente :</span>
			<?php  
			$retail = (string)$page->retail();
			if ($retail == "") {
		    		echo "";
		    	}

		    	else {
		    		echo number_format($retail, 0, ',', ' ');
		    	}
			?> clochettes</div>
		<div><span class="bold">Cartel du musée :</span> <?php echo $page->museum() ?></div>
		<div><span class="bold">Phrase de pêche :</span> "Tu as pris un(e) <?php echo strtolower($page->title()) ?> ! <?php echo $page->catchphrase() ?>"</div>
		<div><span class="bold">Place chez soi :</span> <?php echo $page->house() ?></div>
		<div><span class="bold">Taille de l'ombre :</span> <?php echo $page->shadow() ?></div>
	</div><br />
	<?= kirbytext($page->text()) ?>
	<br />
	<?php snippet('gallery') ?>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>
	
