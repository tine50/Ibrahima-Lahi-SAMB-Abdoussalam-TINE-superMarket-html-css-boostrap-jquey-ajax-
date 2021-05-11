<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font/all.css">
    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<div class="w-50 mt-5 border border-dark border-2">
        <form action="accueil.html" >
           <div>
                <center>
                    <img src="img/auth.jpg" class="w-25" alt="">
                </center>
            </div><br><br>
            <div class="d-flex flex-column w-50">
                <div class="d-flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                    </svg><input type="text" class="h-25 col-11" value="" placeholder="email"><br><br>   
                </div>
                <div class="d-flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg><input type="password" value=""  class="h-25 col-11" placeholder="password"><br><br>                   
                </div>
                <div class="d-flex h-10">
                    <input type="checkbox" value="" class="w-20 m-2 form-check-input"> Connexion Permanente
                </div>
                <br>
                <center>
                    <div class="d-flex justify-content-md-between flex-wrap">
                        <input type="reset" value="Annuller"  class="btn btn-danger col-12 col-md-4"> <input type="submit" value="Connexion" class="btn btn-success col-12 col-md-4" >
                    </div>
                </center>
                <center>
                    <div class="border border-top border border-dark mt-4 w-75 "></div>
                </center>

                <div class="d-flex  justify-content-between my-4">
                    <a href="mdp.html">Mot de passe oublié</a><a href="Inscription.html">Créer un compte</a>
                </div>
            </div> 
        </form>
    </div> 
</body>
</html>