<?php
  function redirectionerMerci(){
    header("Location: merci.html");
    exit;
   }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  
   <!--Lisboa Claudia
     HarveyScrabble_PHP
     For studding proposes -->
  
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Claudia Lisboa">
    <title>Exercice #5 - Le formulaire de dons</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
    <?php 
    $assuranceS = "";
    $don = "";
    $identifiant = "";
    $donValide = false;
    $assuranceValide = false;
    $identifiantValide = false;


    //si on arrive du formulaire, j'ai des valeurs à mettre dans les variables 
    if(isset($_GET["assuranceS"]))
         $assuranceS= $_GET["assuranceS"];

    if(isset($_GET["don"]))
         $don = $_GET["don"];

    if(isset($_GET["identifiant"]))
        $identifiant = $_GET["identifiant"];


   

    if($assuranceS !== "" )
    {
        if(!preg_match('/\d{9}/', $assuranceS)) //verifier le format du numero d'assurance sociale entre pour l'usager
        {
            echo"<p id=\"pError\">Numero d'assurance sociale NON VALIDE! Le format valide est de 9 chiffres.</p>";
        }else{
            $assuranceValide = true;
        }
    }  

    if($don !== "" )
    {
        if (!preg_match('/^[1-9]?[0-9]([\.][0-9]{2})?\$/', $don)) //verifier le montant entre pour l'usager
        {
          echo"<p id=\"pError\">Montant NON VALIDE! Veuillez entrer un montant valide entre 0$ et 99.99$.</p>";
        }else{
            $donValide =true;
        }
    }

    if($identifiant !== "") 
    {
        if(!preg_match(preg_match('/^[1-9]?[0-9]([\.][0-9]{2})?\$/', $identifiant)) //verifier le identifiant  entre pour l'usager
        {
            echo"<p id=\"pError\">Votre identifiant de fan est NON VALIDE! </p>";
        }else{
            $identifiantValide = true;
        }
    }
    if($donValide == true && $assuranceValide == true && $identifiantValide == true)
    {
        redirectionerMerci();

    }

    ?>
    <header class="header">
        <img id="cmaisonneuve" src="img/cMaisonnneuve_logo.png">
        <h1>AEC - Développement de site Web et Commerce Électronique </h1>
        <h2>Exercice #5 - Le formulaire de dons </h2>
    </header>
    <nav class="navbar">
        <a href="index.php">Accueil</a>
        
    </nav>
    <main class="mainTravail">
        <section>
            <h1> Campagne de promotion HarveyScrabble</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                <fieldset>
                    <legend><b>Voulez informer les donnees suivantes :</b></legend>
                    <label for="assuranceS">Votre numero d'assurance sociale :</label>
                    <input type="text" id="assuranceS" name="assuranceS">
                    <br>
                    <br>
                    <label for="don">Votre don :</label>
                    <input type="text" id="don" name="don">
                    <br>
                    <br>
                    <label for="don">Votre identifiant de fan du HarveySrabble:</label>
                    <input type="text" id="identifiant" name="identifiant">
                    <br>
                    <br>
                    <input type="submit" value="SUBMIT">
                </fieldset>
            </form> 
       </section>
    <!-- <footer class="footer">
        <p> © Tous le droits réservés - Claudia Lisboa - 2022 </p>
     </footer>     -->
</body>
</html>
