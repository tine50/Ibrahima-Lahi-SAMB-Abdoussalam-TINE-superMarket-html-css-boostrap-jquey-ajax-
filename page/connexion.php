<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../traitement/css/bootstrap.css">
    <script src="../traitement/jquery/jquery-3.6.0.min.js"></script>
    <script src="../traitement/js/bootstrap.js"></script>
</head>
<body>
<center>
    <div class="w-50 mt-5 border border-dark border-3" style="border-radius : 40px 40px 0px 0px"><br>
        <form action="accueil.html" >
           <div>
                <center>
                    <h1>Authentification</h1>
                </center>
            <div class="border border-dark">
            </div>
            </div><br><br>
            <div class="d-flex flex-column w-50">
                <div class="d-flex flex-column">
                    <label for="identifiant" style="text-align : left;">Identifiant</label>
                    <input type="text" class="h-25 col-12" id="identifiant" value="" name="identifiant"><br>   
                </div>
                <div class="d-flex flex-column">
                    <label for="password" style="text-align : left;">Mot de passe</label>
                    <input type="password" value="" id="password" class="h-25 col-12" name="password"><br>                   
                </div>
                <br>
                <center>
                    <div class="d-flex justify-content-end flex-wrap"><input type="submit" value="Connexion" class="btn btn-success col-12 col-md-4" >
                    </div>
                </center><br><br><br>
            </div> 
        </form>
    </div>
</center>

</body>
</html>