<?php 
$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
$nom = (isset($_GET['nom'])) ? $_GET['nom'] : "inconnu";
$nb_depost = (isset($_GET['nb_depost'])) ? $_GET['nb_depost'] : 0;
 ?>
<h2>Voir un post</h2>
<a href="/nathan-taff-php/">Liste</a> | <a href="/nathan-taff-php/view/poste_create.php">Ajouter</a><br><hr>
<p>Le post numéro  <strong><?= $id ?></strong> s'appelle <strong><?= $nom ?></strong> et à depost <strong><?= $nb_depost ?></strong> post</p>

