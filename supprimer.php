<?php require_once("connexion.php")?>
<?php include("inc/header.inc.php"); ?>

<?php
    
    $pdo = new PDO("mysql:host=localhost;dbname=moncv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    
    
?>

<div class="container-fluid p-0">

<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="admin">
    <div class="w-100">
        <h2 class="mb-5">Administrateur</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <a class="nav-link js-scroll-trigger" href="exp_sup.php">Experience</a>
        </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <a class="nav-link js-scroll-trigger" href="">Education</a>
        </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <a class="nav-link js-scroll-trigger" href="">Skills</a>   
        </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <a class="nav-link js-scroll-trigger" href="">Interests</a>
        </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <a class="nav-link js-scroll-trigger" href="">Awards</a> 
        </div>
        </div>
        

    </div>

</section>

<hr class="m-0">
</div>




<?php include("inc/footer.inc.php"); ?>