<?php
include "connection_bd.php";

$selection_clients = $bdd->query("SELECT * FROM client");
$selection_clients = $selection_clients->fetchAll();