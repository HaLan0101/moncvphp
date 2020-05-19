<?php include("inc/header.inc.php"); ?>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=moncv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
if($_POST) {    
    $sql = "SELECT * FROM membre WHERE pseudo='$_POST[admin]' AND mdp='$_POST[pw]'";    
    $resultat = $pdo->query($sql);   
    $membre = $resultat->fetch(PDO::FETCH_OBJ);    
    if(!empty($membre)){        
        echo '<div style="background: pink; padding: 20px;">Bienvenue</div>';
        echo "cliquez ici : ";
?>
    <a class="nav-link js-scroll-trigger" href="admin.php" id="admin"> Ajouter Administration</a>
    <a class="nav-link js-scroll-trigger" href="supprimer.php" id="admin"> Supprimer Administration</a>
    <a class="nav-link js-scroll-trigger" href="modifier.php" id="admin"> Modifier Administration</a>
<?php    
    }           
    else{        
        echo '<div style="background: red; padding: 20px;">Error</div>';
    }   
} 
?>

<form method="post" action="">    
    <label for="admin">Admin</label><br>    
    <input type="text" id="admin" name="admin"><br>        
    <label for="pw">Mot de passe</label><br>    
    <input type="text" id="pw" name="pw"><br>         
    <input type="submit" value="Se connecter"> 
</form> 
