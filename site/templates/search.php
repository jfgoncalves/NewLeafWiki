<?php
	snippet('header');

	$search = new search(array(
		'searchfield' => 'q',
		'ignore'      => array('search', 'error'),
		'words'       => true,
		'paginate'    => 10
	));

	$results = $search->results();
      
?>

<div class="content">

	<?php snippet('breadcrumb') ?>
	
	<div class="search">
		<form action="<?= thisURL() ?>">
	  		<input type="text" placeholder="Rechercher sur le wiki.." name="q" value="<?= html($search->query()) ?>" />
	  		<input type="submit" value="Rechercher" />
		</form>

		<?php if($results): ?>

		<?php snippet('pagination', array('pagination' => $results->pagination())) ?>

		<ul>
		  <?php foreach($results as $row): ?>
		  <li>
		    <strong><a href="<?= $row->url() ?>"><?= html($row->title()) ?></a></strong>
		    <a href="<?= $row->url() ?>"><?= html($row->url()) ?></a>
		  </li>
		  <?php endforeach ?>
		</ul>

		<?php snippet('pagination', array('pagination' => $results->pagination())) ?>

		<?php elseif($search->query()): ?>
		<div class="no-results">Aucun résultat pour <strong><?= html($search->query()) ?></strong></div>
		<?php endif ?>

	</div>
	<?php snippet('licence') ?>
</div>
<div style="clear:both"></div>

<?php snippet('footer') ?>