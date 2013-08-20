<?php
	$gal = (string)$page->images()->filterBy('gallery', 'oui');
	if($page->hasImages() && $gal !== ""): ?>
	<div>
		<h1>Galerie</h1>
		<ul class="gallery">
		  <?php foreach($page->images()->filterBy('gallery', 'oui') as $image): ?>
		  <li>
		    <img src="<?php echo $image->url() ?>" width="200px" height="120px" alt="<?php echo $image->caption() ?>" />
		    <div class="caption"><?php echo kirbytext($image->caption()) ?></div>
		  </li>
		  <?php endforeach ?>
		</ul>
	</div>
	<div style="clear:both"></div>
<?php endif ?>