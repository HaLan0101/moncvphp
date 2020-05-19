<?php include("inc/header.inc.php"); ?>

<?php
    if (!empty($_POST)) {
        $pdo = new PDO("mysql:host=localhost;dbname=moncv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $_POST["nomuniv"] = htmlentities($_POST["nom_univ"], ENT_QUOTES);
        $_POST["nomformation"] = htmlentities($_POST["nom_formation"], ENT_QUOTES);
        $_POST["texte2"] = htmlentities($_POST["texte"], ENT_QUOTES);
        $_POST["datedebut2"] = htmlentities($_POST["date_debut"], ENT_QUOTES);
        $_POST["datefin2"] = htmlentities($_POST["date_fin"], ENT_QUOTES);
        $result = $pdo->exec("INSERT INTO experience (nom_univ, nom_formation, date_debut, date_fin) VALUES ('$_POST[nom_univ]', '$_POST[nom_formation]', '$_POST[texte]','$_POST[date_debut]', '$_POST[date_fin]');");
    
        echo '<div style="background: pink; padding: 20px;">l\'formation a bien été ajouté</div>'; 

        header('Refresh: 0');
    }
    else    
    {        
        echo '<div class="erreur">veuillez svp remplir tous les champs du formulaire.</div>';    
    } 
?>
<form method="post">    
    <label for="nomuniv">Nom d'université</label><br>   
    <input type="text" name="nom_univ" placeholder="votre université" id="nom_univ" required=""><br><br>    
    <label for="formation">Nom de la formation</label><br>    
    <input type="text" name="nom_formation" placeholder="Votre formation" id="nom_formation" required=""><br><br> 
    <label for="texte2">Texte</label><br>    
    <input type="text" name="texte" placeholder="Votre texte" id="texte" required=""><br><br>        
    <label for="datedebut2">Date debut <i>(Format: AAAA-MM-JJ)</i></label><br>    
    <input type="text" name="date_debut" placeholder="date debut" id="date_debut"><br><br>    
    <label for="datefin2">Date fin <i>(Format: AAAA-MM-JJ)</i></label><br>    
    <input type="text" name="date_fin" placeholder="date fin" id="date_fin"><br><br>    
    <input type="submit"><br><br> 
</form>

<?php include("inc/footer.inc.php"); ?>