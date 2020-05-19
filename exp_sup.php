<?php include("inc/header.inc.php"); ?>
<?php 
$pdo = new PDO("mysql:host=localhost;dbname=moncv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo->query("SELECT * FROM experience");    
while($experience=$result->fetch(PDO::FETCH_OBJ)){
    echo $experience->id_exp.".";
    echo $experience->post_de_travail."-";
    echo $experience->texte."-";
    echo $experience->date_debut."-";
    echo $experience->date_fin."<br>";
}
?>
<?php
    if (!empty($_POST)) {
        $_POST["poste"] = htmlentities($_POST["post_de_travail"], ENT_QUOTES);
        $result = $pdo->exec("DELETE FROM experience WHERE post_de_travail= '$_POST[post_de_travail]';");
        echo '<div style="background: pink; padding: 20px;">l\'experience a bien été modifié</div>'; 
        header('Refresh: 0');
    }
?>
<form method="post"  >    
    <label for="poste">Poste de travail</label><br>   
    <input type="text" name="post_de_travail" placeholder="votre poste" id="post_de_travail" required=""><br><br>      
    <button class="submit">Supprimez</button>
</form>
<?php include("inc/footer.inc.php"); ?>