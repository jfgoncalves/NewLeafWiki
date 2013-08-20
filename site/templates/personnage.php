<?php snippet('header') ?>

<div class="content">
	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<div class="sheet personnage">
		<div>
			<h1><?php echo $page->title() ?></h1>
		</div>
		<div id="pic">
			<?php
			$pic = $page->images()->find('personnage.png');
			if ($pic !== NULL) {
				echo "<img class='personnageThumb' src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_big.png' />";
			}
			?>
		</div>
		<div><span class="bold">Nom Anglais :</span> <?php echo $page->english() ?></div>
		<div><span class="bold">Sexe :</span> <?php echo $page->sex() ?></div>
		<div><span class="bold">Espèce :</span> <?php echo $page->species() ?></div>
		<div><span class="bold">Lieu :</span> <?php echo $page->location() ?></div>
		<div><span class="bold">Moment :</span> <?php echo $page->time() ?></div>
		<?php if ($page->ispic() == 'oui') {
			echo("<div><span class='bold'>Phrase photo :</span> ".$page->picquote()." </div>");
		} ?>
	</div>
	<div><?= kirbytext($page->text()) ?></div>
	<br />
	<?php snippet('gallery') ?>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>
	