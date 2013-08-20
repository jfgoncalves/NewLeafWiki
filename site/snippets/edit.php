<?php

$user = panelUser();

if($user) {
  // the user is logged in
  echo '<a class="edit" href="http://newleaf.fr/panel/'.$site->uri()->path().'">Modifier</a>';
}

?>