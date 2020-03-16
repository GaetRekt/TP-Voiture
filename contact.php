<?php
$title = "Contact";
require_once 'views/layout/header.php';
?>

<!-- CONTENU -->
<div class="container mt-4">
  <h1>Estimez votre voiture</h1>
  <form action="new.php" method="POST">
    <div class="form-group">
      <label for="nom_voiture">Nom de la voiture</label>
      <input type="text" class="form-control" id="nom_voiture" name="nom_voiture" aria-describedby="nom_voitureHelp">
      <small id="nomHelp" class="form-text text-muted">Entrez votre nom</small>
    </div>
    <div class="form-group">
      <label for="annee">Année</label>
      <input type="text" class="form-control" id="annee" name="annee" aria-describedby="anneeHelp">
      <small id="prenomHelp" class="form-text text-muted">Entrez l'année de la voiture</small>
    </div>
    <div class="form-group">
      <label for="km">Nombre de kilometre de la voiture</label>
      <input type="text" class="form-control" id="km" name="km" aria-describedby="kmHelp">
      <small id="prenomHelp" class="form-text text-muted">Nombre de kilometre de la voiture</small>
    </div>    
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>
<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>