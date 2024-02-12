<?php
    include_once "../inc/function.php";
    $varietes = the_getAll();
    $is_update = false;
    $parcelle = null;

    if(isset($_GET['action'])){
        $is_update = true;
        $parcelle = parcelle_getByid($_GET['idParcelle']);
//        var_dump($parcelle);
    }

?>


<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header"><?php echo $is_update ? "Modifier" : "Inserer"?> une Parcelle</h5>
                    <div class="card-body">
                        <form action="../controllers/parcelleControl.php" method="POST" id="parcelle-form">
                            <input type="hidden" name="action" value="<?php echo $is_update ? "update" : "save"?>">

                            <?php if($is_update) { ?>
                                <input type="hidden" name="idParcelle" value="<?php echo $parcelle['numero']?>">
                            <?php } ?>

                            <div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Surface en HA</label>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="basic-icon-default-email" class="form-control" aria-describedby="basic-icon-default-email2" name="surface"
                                            value="<?php echo $is_update ? $parcelle['surface'] : ""?>"
                                            >
                                            <span id="basic-icon-default-email2" class="input-group-text">HA</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Variete de the plante</label>
                                    <div class="col-md-9">
                                        <select name="idVariete" id="html5-text-input" class="form-select">
                                            <?php foreach ($varietes as $variete){ ?>
                                                <option value="<?php echo $variete['id']?>"
                                                     <?php echo $is_update ? ($variete['id'] == $parcelle['id_variete_the'] ? "selected": "") : ""  ?>
                                                >
                                                    <?php echo $variete['nom'] ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-primary" value="<?php echo $is_update ? "Modifier" : "Ajouter" ?>" style="background-color: green">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>