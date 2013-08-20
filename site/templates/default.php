<?php snippet('header') ?>

<div class="content">

	<?php snippet('edit') ?>
	<?php snippet('breadcrumb') ?>
	<div style="clear:both"></div>
	<?= kirbytext($page->text()) ?>
	<br />
	<?php snippet('gallery'); ?>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>