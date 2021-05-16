<?php
    include "../traitement/php/selection_client_bd.php";
    include "../traitement/php/selection_article_bd.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel="stylesheet" href="../traitement/css/bootstrap.css">
    <script src="../traitement/jquery/jquery-3.6.0.min.js"></script>
    <script src="../traitement/js/bootstrap.js"></script> -->
</head>
<body>
    <main>
        <form method="POST" action="../traitement/php/ajout_commande_bd.php">
            <button type="button"  style="background: none; border : none;" id="">Ajouter un article <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </button>
            <fieldset>
                <legend>Nouvelle commande client (N°1234)</legend>

                <table>
                    <tr>
                        <td>Client : </td>
                        <td>
                            <select name="client" id="name_client">
                                <?php
                                    for($i = 0; $i < count($selection_clients); $i ++)
                                    {

                                    
                                ?>
                                        <option value="<?php echo $selection_clients[$i]['id_cli'] ?>"><?php echo $selection_clients[$i]['prenom_cli'] ?>  <?php echo $selection_clients[$i]['nom_cli'] ?></option>
                                <?php
                                    }
                                ?>
                                
                            </select>
                        </td>
                        <td>Date livraison</td>
                        <td><input type="date" name="date_liv">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/></td>
                            </svg>
                        <td><label for="" name="">Montant Total Commande </label></td>
                        <td><input type="number" value="" id="total_com"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="radio" value="">&nbsp;Achat au comptant&nbsp;&nbsp;&nbsp;<input type="radio" value="">&nbsp;Achat à credit</td>
                        <td><label for="">Avance</label></td>
                        <td><input type="number" value=""></td>
                        <td><label for="">Reste à payer</label></td>
                        <td><input type="number" value=""></td>
                        <td>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                        </svg>&nbsp;&nbsp;<input type="button" value="Completer le reliquat"></td>
                    </tr>
                </table>
                    <br><br><br><br>
                <table>
                    <tr>
                        <td><label for="">Quantité</label></td>
                        <td><input type="number" value="" name="Q1"></td>
                        <td><label for="">Article</label></td>
                        <td>
                            <select name="article1">
                                    
                                <?php
                                    for($j = 0; $j < count($selection_article); $j ++)
                                    {

                                    
                                ?>
                                        <option value="<?php echo $selection_article[$j]['id_prod'] ?>"><?php echo $selection_article[$j]['nom_prod']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                        <td><label for="">Prix unitaire</label></td>
                        <td><input type="number" name="prix1"></td>
                        <td><label for="">Prix total</label></td>
                        <td><input type="number" value="" id="prixTotalArt1"></td>
                        <td>
                            <button type="button" id="suppCom" class="btn btn-light" style="background: none; border : none;">    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td><label for="">Quantité</label></td>
                        <td><input type="number" value="" name="Q2"></td>
                        <td><label for="">Article</label></td>
                        <td>
                            <select name="article2">
                            <?php
                                for($j = 0; $j < count($selection_article); $j ++)
                                {

                                    
                                ?>
                                    <option value="<?php echo $selection_article[$j]['id_prod'] ?>"><?php echo $selection_article[$j]['nom_prod']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                        <td><label for="">Prix unitaire</label></td>
                        <td><input type="number" name="prix2"></td>
                        <td><label for="">Prix total</label></td>
                        <td><input type="number" id="prixTotalArt2"></td>
                        <td>
                            <button type="button" class="btn btn-light" style="background: none; border : none;">    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="">Quantité</label></td>
                        <td><input type="number" value="" name="Q3"></td>
                        <td><label for="">Article</label></td>
                        <td>
                            <select name="article3">
                            <?php
                                for($j = 0; $j < count($selection_article); $j ++)
                                {

                                    
                                ?>
                                    <option value="<?php echo $selection_article[$j]['id_prod'] ?>"><?php echo $selection_article[$j]['nom_prod']?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                        <td><label for="">Prix unitaire</label></td>
                        <td><input type="number" name="prix3"></td>
                        <td><label for="">Prix total</label></td>
                        <td><input type="number" id="prixTotalArt3"></td>
                        <td>
                            <button type="button" class="btn btn-light" style="background: none; border : none;">    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="">Quantité</label></td>
                        <td><input type="number" name="Q4"></td>
                        <td><label for="">Article</label></td>
                        <td>
                            <select name="article4">
                            <?php
                                for($j = 0; $j < count($selection_article); $j ++)
                                {

                                    
                                ?>
                                        <option value="<?php echo $selection_article[$j]['id_prod'] ?>"><?php echo $selection_article[$j]['nom_prod']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                        <td><label for="">Prix unitaire</label></td>
                        <td><input type="number"  name="prix4"></td>
                        <td><label for="">Prix total</label></td>
                        <td><input type="number" value=""  id="prixTotalArt4"></td>
                        <td>
                            <button type="button" class="btn btn-light" style="background: none; border : none;">    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button>
                        </td>
                    </tr>

                    <tr>
                    <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td col="2">
                            <button type="reset"  style="background: none;" id=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg> Annuler</button>

                            <button type="submit"  style="background: none;" id=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg> Valider</button>
                        </td>
                    </tr>
                </table>
            </fieldset>    
        </form>
    </main>
</body>
</html>