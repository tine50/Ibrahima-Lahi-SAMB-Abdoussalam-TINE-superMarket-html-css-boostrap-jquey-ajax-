<?php
include "connection_bd.php";
$date = $_POST['date_liv'];
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

$insertCom1 = $bdd->prepare("INSERT INTO `commander`(`id_prod`, `id_cli`, `date_liv`, `quantite_com`, `prix_com`) VALUES (?,?,?,?,?)");
$insertCom1->execute(array($id_cli, $article1,$date,$Q1, $prix1));

$insertCom2 = $bdd->prepare("INSERT INTO `commander`(`id_prod`, `id_cli`, `date_liv`, `quantite_com`, `prix_com`) VALUES (?,?,?,?,?)");
$insertCom2->execute(array($id_cli, $article2,$date,$Q2, $prix2));

$insertCom3 = $bdd->prepare("INSERT INTO `commander`(`id_prod`, `id_cli`, `date_liv`, `quantite_com`, `prix_com`) VALUES (?,?,?,?,?)");
$insertCom3->execute(array($id_cli, $article3,$date,$Q3, $prix3));

$insertCom4 = $bdd->prepare("INSERT INTO `commander`(`id_prod`, `id_cli`, `date_liv`, `quantite_com`, `prix_com`) VALUES (?,?,?,?,?)");
$insertCom4->execute(array($id_cli, $article4,$date,$Q4, $prix4));


?>