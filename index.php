<?php
$title = "Accueil";
require_once 'views/layout/header.php';
require_once 'views/layout/nav.php';
?>

<!-- CONTENU -->
<div class="jumbotron">
  <h1 class="display-4">TP-Voiture</h1>
  <p class="lead">Page d'accueil</p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="/voitures.php" role="button">Voir les voitures</a>
</div>
<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>