<?php
    $bdd = new PDO("mysql:host=localhost;dbname=supermarket",'misteriks','p@pes@mb7777ibou1234');
    $id = $_POST['id_cli'];
    $prenom_cli = $_POST['prenom_cli'];
    $nom_cli = $_POST['nom_cli'];
    $avance_cli = $_POST['avance_cli'];
    $reste_a_payer_cli = $_POST['reste_a_payer_cli'];
    $id_prod = $_POST['id_prod'];
    $date_liv = $_POST['date_liv'];
    $num_liv = $_POST['num_liv'];

    $id_prod = $_POST['id_prod'];
    $nom_prod = $_POST['nom_prod'];
    $quantite_prod = $_POST['quantite_prod'];
    $prix_prod = $_POST['prix_prod'];

    $ClientInsert = $bdd->exec("UPDATE `client` SET 
    `prenom_cli`= '$prenom_cli',
    `nom_cli` ='$nom_cli', 
    `avance_cli` = $avance_cli,
    `reste_a_payer_cli` =  $reste_a_payer_cli
    WHERE `id_cli` = $id ");

    $CommandeInsert = $bdd->exec("UPDATE `commander` SET 
    `id_prod`=$id_prod,
    `id_cli`=$id,
    `date_liv`= '$date_liv',
    `num_liv`=$num_liv 
    WHERE id_cli = $id ");

    $ProductInsert = $bdd->exec("UPDATE `produit` SET 
    `id_prod`=$id_prod,
    `nom_prod`= '$nom_prod',
    `quantite_prod`=$quantite_prod,
    `prix_prod`=$prix_prod 
    WHERE id_prod = $id_prod")
?>

   