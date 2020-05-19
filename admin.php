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
            <a class="nav-link js-scroll-trigger" href="forme_experience.php">Experience</a>
        </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <a class="nav-link js-scroll-trigger" href="forme_education.php">Education</a>
        </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <a class="nav-link js-scroll-trigger" href="forme_skill.php">Skills</a>   
        </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <a class="nav-link js-scroll-trigger" href="forme_interet.php">Interests</a>
        </div>
        </div>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <a class="nav-link js-scroll-trigger" href="forme_award.php">Awards</a> 
        </div>
        </div>
        

    </div>

</section>

<hr class="m-0">
</div>




<?php include("inc/footer.inc.php"); ?>