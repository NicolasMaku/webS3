<?php
    include_once "../inc/function.php";
    $is_update = false;
    $ceuilleur = null;

    if(isset($_GET['action'])){
        $is_update = true;
        $ceuilleur = ceuilleur_getByid($_GET['idCeuilleur']);
//        var_dump($ceuilleur);
    }
?>


<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header"><?php echo $is_update ? "Modifier" : "Ajouter" ?> un ceuilleur</h5>
                    <div class="card-body">
                        <form action="../controllers/ceuilleurControl.php" method="POST" id="ceuilleur-form">
                            <input type="hidden" name="action" value="<?php echo $is_update ? "update" : "save" ?>">

                            <?php if($is_update) {?>
                                <input type="hidden" name="idCeuilleur" value="<?php echo $ceuilleur['id'] ?>">
                            <?php } ?>

                            <div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Nom</label>
                                    <div class="col-md-9">
                                        <input type="text" id="html5-text-input" class="form-control" name="nom"
                                        value="<?php echo $is_update ? $ceuilleur['nom'] : "" ?>"
                                        >

                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Genre</label>
                                    <div class="col-md-9">
                                        <select name="genre" id="html5-text-input" class="form-select">

                                            <option value="Homme" <?php echo $is_update ? ($ceuilleur['genre'] == "Homme" ?  "selected" : "") : ""  ?>>Homme</option>
                                            <option value="Femme" <?php echo $is_update ? ($ceuilleur['genre'] == "Femme" ?  "selected" : "") : ""  ?>>Femme</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-date-input" class="col-md-3 col-form-label">Date</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="date" value="<?php echo $is_update ? $ceuilleur['date_naissance'] : "" ?>" id="html5-date-input" name="date"
                                        >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Poids minimum</label>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="number" id="basic-icon-default-email" class="form-control" aria-describedby="basic-icon-default-email2" name="poidsMin"
                                                   value="<?php echo $is_update ? $ceuilleur['poids_minimum'] : ""  ?>"
                                            >
                                            <span id="basic-icon-default-email2" class="input-group-text">KG</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Bonus</label>
                                    <div class="col-md-9">
                                        <input type="number" id="html5-text-input" class="form-control" name="bonus"
                                               value="<?php echo $is_update ? $ceuilleur['bonus'] : "" ?>"
                                        >

                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Mallus</label>
                                    <div class="col-md-9">
                                        <input type="text" id="html5-text-input" class="form-control" name="malus"
                                               value="<?php echo $is_update ? $ceuilleur['malus'] : ""?>"
                                        >

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