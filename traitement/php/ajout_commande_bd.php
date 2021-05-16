<?php
include "connection_bd.php";

$id_cli = $_POST['client'];
echo $Q1 = $_POST['Q1'];
echo $article1 = $_POST['article1'];
echo $prix1 = $_POST['prix1'];


echo $Q2 = $_POST['Q2'];
echo $article2 = $_POST['article2'];
echo $prix2 = $_POST['prix2'];

echo $Q3 = $_POST['Q3'];
echo $article3 = $_POST['article3'];
echo $prix3 = $_POST['prix3'];

echo $Q4 = $_POST['Q4'];
echo $article4 = $_POST['article4'];
echo $prix4 = $_POST['prix4'];

$insertArticle1 = $bdd->prepare("INSERT INTO `produit`(`nom_prod`, `quantite_prod`, `prix_prod`) VALUES  (?,?,?);");
$insertArticle1->execute(array($article1, $Q1, $prix1));

$insertArticle2 = $bdd->prepare("INSERT INTO `produit`(`nom_prod`, `quantite_prod`, `prix_prod`) VALUES  (?,?,?);");
$insertArticle2->execute(array($article2, $Q2, $prix2));

$insertArticle3 = $bdd->prepare("INSERT INTO `produit`(`nom_prod`, `quantite_prod`, `prix_prod`) VALUES  (?,?,?);");
$insertArticle3->execute(array($article3, $Q3, $prix3));

$insertArticle4 = $bdd->prepare("INSERT INTO `produit`(`nom_prod`, `quantite_prod`, `prix_prod`) VALUES  (?,?,?);");
$insertArticle4->execute(array($article4, $Q4, $prix4));


?>