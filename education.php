<?php include("inc/header.inc.php"); ?>
<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="education">
        <div class="w-100">
            <h2 class="mb-5">Education</h2>
            <?php 
            $result = $pdo->query("SELECT * FROM education");

            while($education = $result->fetch(PDO::FETCH_OBJ)) { ?>
                    

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="resume-content">
                <h3 class="mb-0"><?php echo $education->nom_univ ;?></h3>
                <div class="subheading mb-3"><?php echo $education->nom_formation ;?></div>
                <p><?php echo $education->texte ;?></p>
            </div>
            <div class="resume-date text-md-right">
                <span class="text-primary"><?php echo $education->date_debut ;?></span>
                <span class="text-primary"><?php echo $education->date_fin ;?></span>
            </div>
            </div>
            <?php } ?>



        </div>

    </section>

    <hr class="m-0">
</div>
<?php include("inc/footer.inc.php"); ?>
