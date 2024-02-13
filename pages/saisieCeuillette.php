<?php
    include_once "../inc/function.php";
    $ceuilleurs = ceuilleur_getAll();
    $parcelles = parcelle_getAll();
?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Saisie de Ceuillette</h5>
                    <div class="card-body">
                        <form action="" id="ceuillette-form">
                            <input type="hidden" name="action" value="save">

                            <div>
                                <div class="mb-3 row">
                                    <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" name="date">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Ceuilleur</label>
                                    <div class="col-md-10">
                                        <select id="html5-text-input" class="form-select" name="idCeuil">
                                            <?php foreach ($ceuilleurs as $ceuilleur) {?>
                                                <option value="<?php echo $ceuilleur['id']?>"> <?php echo $ceuilleur['nom']?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Parcelle</label>
                                    <div class="col-md-10">
                                        <select id="html5-text-input" class="form-select" name="idParc">
                                            <?php foreach ($parcelles as $parcelle) {?>
                                                <option value="<?php echo $parcelle['numero'] ?>">Parcelle N°<?php echo $parcelle['numero'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Poids ceuilli</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <input type="number" id="basic-icon-default-email" class="form-control" aria-describedby="basic-icon-default-email2" name="poids">
                                            <span id="basic-icon-default-email2" class="input-group-text">KG</span>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Ajouter" style="background-color: green">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <h5 class="card-header">Depenses </h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Ceuilleur</th>
                            <th>Parcelle</th>
                            <th>Poids ceuilli</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <tr>
                            <td>20-02-2024</td>
                            <td>sescheepinn</td>
                            <td>parcelle1</td>
                            <td>200 kg</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        let ceuilletteForm = document.getElementById("ceuillette-form");

        ceuilletteForm.addEventListener("submit", (event) => {
            event.preventDefault();

            let formData = new FormData(ceuilletteForm);
            const xhr = new XMLHttpRequest();



            xhr.addEventListener("readystatechange", () => {
               if(xhr.readyState == 4){
                   if(xhr.status == 200){
                       alert(xhr.responseText);
                   }
               }
            });

            xhr.open("POST", "../controllers/ceuilletteControl.php", true);
            xhr.send(formData);
        });
    })

</script>