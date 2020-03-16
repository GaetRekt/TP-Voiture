<?php

(empty($_POST) ||
  empty($_POST['nom_voiture']) ||
  empty($_POST['annee']) ||
  empty($_POST['km']) && exit("Requête invalide");

require_once 'functions/contact.php';
$title = "Contact";
require_once 'views/layout/header.php';

?>
<div class="container mt-4">
  <?php if (insertContact($_POST['nom_voiture'], $_POST['annee'], $_POST['km'])) { ?>
    <div class="alert alert-success" role="alert">
      <h2>
        Merci ! Voici votre estimation
      </h2>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <h2>
        Une erreur est survenue lors de votre estimation
      </h2>
    </div>
  <?php } ?>
</div>

<?php require_once 'views/layout/footer.php'; ?>