<?php snippet('header') ?>

<div class="content">
	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<div class="sheet habitant">
		<div>
			<h1><?php echo $page->title() ?></h1>
		</div>
		<div id="pic">
			<?php
			$pic = $page->images()->find('habitant.png');
			if ($pic !== NULL) {
				echo "<img class='habitantThumb' src='".$pic->url()."' />";
			}

			else {
				echo "<img class='noimg' src='/assets/images/no-img_big.png' />";
			}
			?>
		</div>
		<div><span class="bold">Anniversaire :</span> <?php 
		setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
		$bDay = strtotime($page->birthday().".2008");
		echo strftime('%d %B', $bDay);
		?></div>
		<div><span class="bold">Sexe :</span> <?php echo $page->sex() ?></div>
		<div><span class="bold">Nom Anglais :</span> <?php echo $page->english() ?></div>
		<div><span class="bold">Espèce :</span> <?php echo $page->species() ?></div>
		<div><span class="bold">Personnalité :</span> <?php echo $page->personality() ?></div>
		<div><span class="bold">Expression :</span> "<?php echo $page->initphrase() ?>"</div>
		<div><span class="bold">T-Shirt par défaut :</span> <?php echo $page->initclothes() ?></div>
		<div><span class="bold">Phrase photo :</span> <?php echo $page->picquotes() ?></div>
	</div>
	<?= kirbytext($page->text()) ?>
	<br />
	<?php snippet('gallery') ?>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>
	