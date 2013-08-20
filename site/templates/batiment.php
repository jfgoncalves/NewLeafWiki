<?php snippet('header') ?>

<div class="content">
	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
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
	</div><br />
	<div><?= kirbytext($page->text()) ?></div>
	<br />
	<?php snippet('gallery') ?>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>
	