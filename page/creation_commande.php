<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../traitement/css/bootstrap.css">
    <script src="../traitement/jquery/jquery-3.6.0.min.js"></script>
    <script src="../traitement/js/bootstrap.js"></script> -->
</head>
<body>
    <main>
        <form action="">
            <button type="button"  style="background: none; border : none;">Ajouter un article <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </button>
            <fieldset>
                <legend>Nouvelle commande client (N°1234)</legend>

                <table>
                    <tr>
                        <td>Client : </td>
                        <td>
                            <select name="" id="">
                                <option value="">Toto Ndiaye</option>
                                <option value="">Toto Ndiaye</option>
                                <option value="">Toto Ndiaye</option>
                                <option value="">Toto Ndiaye</option>
                            </select>
                        </td>
                        <td>Date livraison</td>
                        <td><input type="date" value="">&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/></td>
                            </svg>
                        <td><label for="" name="">Montant Total Commande </label></td>
                        <td><input type="number" value=""></td>
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
                        <td><input type="number" value=""></td>
                        <td><label for="">Article</label></td>
                        <td>
                            <select name="" id="">
                                <option value="">Article 1</option>
                                <option value="">Article 2</option>
                                <option value="">Article 3</option>
                            </select>
                        </td>
                        <td><label for="">Prix unitaire</label></td>
                        <td><input type="number"></td>
                        <td><label for="">Prix total</label></td>
                        <td><input type="number" value=""></td>
                        <td>
                            <button type="button" class="btn btn-light" style="background: none; border : none;">    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button>
                        </td>
                    </tr>

                </table>
            </fieldset>    
        </form>
    </main>
</body>
</html>