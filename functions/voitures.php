<?php
require_once __DIR__ . "/db.php";

function getvoitures(): array
{
  $pdo = getPdo();

  $stmt = $pdo->query("SELECT * FROM voitures WHERE visible=1");
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
