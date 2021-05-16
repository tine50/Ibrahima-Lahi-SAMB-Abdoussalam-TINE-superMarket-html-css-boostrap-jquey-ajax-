<?php
    $bdd = new PDO("mysql:host=localhost;dbname=supermarket",'root','');
    $clientList = $bdd->query("SELECT * FROM clients")
?>
<link rel="stylesheet" href="../css/bootstrap.css">

            <button class="btn btn-secondary" style="float: right;">Ajouter un nouveau</button>
            <table class="table">
                <tr class="col">
                    <th>Id</th>
                    <th>Prenom & Nom</th>
                    <th>Description</th>
                    <th>Age</th>
                    <th>Surnom</th>
                    <th>Employe</th>
                    <th>Actions</th>
                </tr>
                <tr class="col">
                    <?php
                        foreach ($clientList as $client) {
                            echo '
                            <tr>
                                <td>$client[0]</td>
                                <td>$client[1]</td>
                                <td>$client[2]</td>
                                <td>$client[3]</td>
                                <td>$client[4]</td>
                                <td>$client[5]</td>
                                <td>$client[6]</td>
                            </tr>
                            '
                        }
                    ?>
                    
                </tr>
            </table>
        </div>
