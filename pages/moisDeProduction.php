<?php
    include_once "../inc/function.php";
    $liste_mois = mois_getAll();
?>

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Checkboxes and Radios</h5>
            <!-- Checkboxes and Radios -->
            <form action="../controllers/moisControl.php" method="POST">
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-md">
                        <small class="text-light fw-medium">Choisissex les mois de regeneration automatique</small>

                        <?php foreach ($liste_mois as $mois) {?>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="<?php echo $mois['id']?>" name="idMois[]" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> <?php echo $mois['nom'] ?> </label>
                            </div>
                        <?php } ?>

                    </div>

                </div>
            </form>
            </div>
        </div>
    </div>
</div>