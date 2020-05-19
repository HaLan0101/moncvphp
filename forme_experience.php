<?php include("inc/header.inc.php"); ?>

<?php
    if (!empty($_POST)) {
        $pdo = new PDO("mysql:host=localhost;dbname=moncv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $_POST["poste"] = htmlentities($_POST["post_de_travail"], ENT_QUOTES);
        $_POST["texte1"] = htmlentities($_POST["texte"], ENT_QUOTES);
        $_POST["datedebut"] = htmlentities($_POST["date_debut"], ENT_QUOTES);
        $_POST["datefin"] = htmlentities($_POST["date_fin"], ENT_QUOTES);
        $result = $pdo->exec("INSERT INTO experience (post_de_travail, texte, date_debut, date_fin) VALUES ('$_POST[post_de_travail]', '$_POST[texte]', '$_POST[date_debut]', '$_POST[date_fin]');");
    
        echo '<div style="background: pink; padding: 20px;">l\'experience a bien été ajouté</div>'; 
        header('Refresh: 0');
    }
    else    
    {        
    echo '<div class="erreur">veuillez svp remplir tous les champs du formulaire.</div>';    
    } 
?>
<form method="post"  >    
    <label for="poste">Poste de travail</label><br>   
    <input type="text" name="post_de_travail" placeholder="votre poste" id="post_de_travail" required=""><br><br>    
    <label for="texte1">Texte</label><br>    
    <input type="text" name="texte" placeholder="Votre texte" id="texte1" required="texte"><br><br>        
    <label for="datedebut1">Date debut <i>(Format: AAAA-MM-JJ)</i></label><br>    
    <input type="text" name="date_debut" placeholder="date debut" id="date_debut"><br><br>    
    <label for="datefin1">Date fin <i>(Format: AAAA-MM-JJ)</i></label><br>    
    <input type="text" name="date_fin" placeholder="date_fin" id="date_fin"><br><br>    
    <input type="submit"><br><br> 
</form>
<?php include("inc/footer.inc.php"); ?>