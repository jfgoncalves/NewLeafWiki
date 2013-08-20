<?php snippet('header') ?>

<div class="content">
	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<div class="sheet art">
		<div>
			<h1><?php echo $page->title() ?></h1>
		</div>
		<div id="pic">
			<?php
			$pic = $page->images()->find('reel.png');
			if ($pic !== NULL) {
				echo "<img src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_big.png' />";
			}
			?>
		</div>
		<div><span class="bold">Nom anglais :</span> <?php echo $page->english() ?></div>
		<div><span class="bold">Nom de la sculpture :</span> <?php echo $page->realname() ?></div>
		<div><span class="bold">Nom de l'artiste :</span> <?php echo $page->realauthor() ?></div>
		<div><span class="bold">Date de création :</span> <?php echo $page->creation() ?></div>
		<div><span class="bold">Lieu d'exposition :</span> <?php echo $page->expo() ?></div>
		<div><span class="bold">Support :</span> <?php echo $page->support() ?></div>
		<div><span class="bold">Cartel du musée :</span> <?php echo $page->museum() ?></div>
		<div><span class="bold">Détecter la contrefaçon :</span> <?php echo $page->howtodetect() ?></div>
		<div style="width: inherit; margin: auto;">
			<div style="float: left;"><span class="bold" style="text-align: center">Authentique</span><br />
				<?php
			$vrai = $page->images()->find('vrai.png');
			if ($vrai !== NULL) {
				echo "<img class='tableauThumb' src='".$vrai->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_small.png' />";
			}
			?>
			</div>
			<div style="float: left;"><span class="bold" style="text-align: center">Contrefaçon</span><br />
				<?php
			$faux = $page->images()->find('faux.png');
			if ($faux == NULL) {
				echo "<img class='noimg' src='/assets/images/fake.png' />";
			}

			else {
				echo "<img class='tableauThumb' src='".$faux->url()."' />";
			}
			?>
			</div>
			<div style="clear:both"></div>
		</div>
		
	</div><br />
	<?= kirbytext($page->text()) ?>
	<br />
	<?php snippet('gallery') ?>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>
	
