<?php include("inc/header.inc.php"); ?>

<?php
    if (!empty($_POST)) {
        $pdo = new PDO("mysql:host=localhost;dbname=moncv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $_POST["texte4"] = htmlentities($_POST["texte"], ENT_QUOTES);
        $result = $pdo->exec("INSERT INTO interet (texte) VALUES ('$_POST[texte]');");
    
        echo '<div style="background: pink; padding: 20px;">l\'interet a bien été ajouté</div>';
        header('Refresh: 0');
    }
    else    
    {        
        echo '<div class="erreur">veuillez svp remplir tous les champs du formulaire.</div>';    
    } 
?>
<form method="post">       
    <label for="interet">Texte</label><br>    
    <input type="text" name="texte" placeholder="Votre intérêts" id="texte" required=""><br><br>            
    <input type="submit"><br><br> 
</form>

<?php include("inc/footer.inc.php"); ?>