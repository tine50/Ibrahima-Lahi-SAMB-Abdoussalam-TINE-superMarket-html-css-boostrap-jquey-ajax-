<?php

include "connection_bd.php";

$selection_article = $bdd->query("SELECT * FROM produit");

$selection_article = $selection_article->fetchAll();
