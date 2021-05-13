 $("#send").click(function () {
                var id_cli = $("#id_cli").val();
                var prenom_cli = $("#prenom_cli").val();
                var nom_cli = $("#nom_cli").val();
                var avance_cli = $("#avance_cli").val();
                var reste_a_payer_cli = $("#reste_a_payer_cli").val();
                var id_prod = $("#id_prod").val();
                var date_liv = $("#date_liv").val();
                var num_liv = $("#num_liv").val();
                var nom_prod = $("#nom_prod").val();
                var prix_prod = $("#prix_prod").val();
                var quantite_prod = $("#quantite_prod").val();
               $.ajax({
                    url:"traitement.php",
                    type:"POST",
                    data:
                    {
                       'id_cli': id_cli,
                       'prenom_cli' : prenom_cli ,
                       'nom_cli': nom_cli,
                       'avance_cli': avance_cli,
                       'reste_a_payer_cli': reste_a_payer_cli,
                       'id_prod' : id_prod,
                       'date_liv' : date_liv,
                       'num_liv' : num_liv ,
                    }
               })
  })