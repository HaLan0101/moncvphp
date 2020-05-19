<?php include("inc/header.inc.php"); ?>
<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="skills">
        <div class="w-100">
            <h2 class="mb-5">Skills</h2>
            <?php 
            $result = $pdo->query("SELECT * FROM skill");
            while($skill = $result->fetch(PDO::FETCH_OBJ)) { ?>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0"><?php echo $skill->nom_skill; ?></h3>
                        <p><?php echo $skill->texte; ?></p>
                    </div>
                </div>
            <?php } ?>
            

        </div>

    </section>

    <hr class="m-0">
</div>
<?php include("inc/footer.inc.php"); ?>
