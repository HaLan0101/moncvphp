<?php include("inc/header.inc.php"); ?>

<?php
    if (!empty($_POST)) {
        $pdo = new PDO("mysql:host=localhost;dbname=moncv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $_POST["texte5"] = htmlentities($_POST["texte"], ENT_QUOTES);
        $result = $pdo->exec("INSERT INTO skill (nom_skill,texte) VALUES ('$_POST[nom_skill]','$_POST[texte]');");
    
        echo '<div style="background: pink; padding: 20px;">l\'skill a bien été ajouté</div>'; 
        header('Refresh: 0');
    }
    else    
    {        
        echo '<div class="erreur">veuillez svp remplir tous les champs du formulaire.</div>';    
    } 
?>
<form method="post">    
    <label for="skill">Nom skill</label><br>   
    <input type="text" name="nom_skill" placeholder="votre skill" id="nom_skill" required=""><br><br>    
    <label for="texte3">Texte</label><br>    
    <input type="text" name="texte" placeholder="Votre texte" id="texte" required=""><br><br>        
    <input type="submit"><br><br> 
</form>   

<?php include("inc/footer.inc.php"); ?>