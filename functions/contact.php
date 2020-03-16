<?php

require_once __DIR__ . '/db.php';

function insertContact(
  string $nom_voiture,
  string $annee,
  string $km
) {
  $pdo = getPdo();

  $query = "INSERT INTO contact (nom_voiture, annee, km) VALUES (:nom_voiture, :annee, :km)";

  $stmt = $pdo->prepare($query);

  // On retourne le résultat d'execute car en cas de succès elle retourne TRUE, sinon en cas d'échec elle retourne FALSE
  return $stmt->execute([
    'nom_voiture' => $nom_voiture,
    'annee' => $annee,
    'km' => $km,
  ]);
}
