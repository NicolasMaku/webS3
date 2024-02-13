<?php
    include_once "../inc/function.php";

    $is_update = false;
    $variete = null;

    if(isset($_GET['action'])){
        $is_update = true;
        $categorieDepense = categorie_depense_getByid($_GET['id']);
    }
?>

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Insere une variete de the</h5>
                    <div class="card-body">
                        <form action="../controllers/categorieDepenseControl.php" id="ceuillette-form" method="post">
                            <input type="hidden" name="action" value="<?php echo $is_update ? "update" : "save"?>">

                            <div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Categorie</label>
                                    <div class="col-md-9">
                                        <input type="text" id="html5-text-input" class="form-control" name="nom" value="<?php echo $is_update ? $categorieDepense['nom'] : ""?>">
                                        <?php echo $is_update ? "<input type=hidden name=id value=". $categorieDepense['id'] . ">" : ""?>
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-primary" value="<?php echo $is_update ? "Modifier" : "Ajouter"?>" style="background-color: green">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>