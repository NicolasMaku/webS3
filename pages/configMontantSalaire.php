<?php
    include_once "../inc/function.php";
    $ceuilleurs =  ceuilleur_getAll();
?>

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Configuerer le montant du salaire</h5>
                    <div class="card-body">
                        <form method="POST" id="salaire-form">
                            <input type="hidden" name="action" value="salaire">

                            <div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Ceuilleur</label>
                                    <div class="col-md-9">
                                        <select name="idCeuilleur" id="ceuilleur" class="form-select">

                                            <option value="" selected>Choisisser</option>

                                            <?php foreach ($ceuilleurs as $ceuilleur) { ?>
                                                <option value="<?php echo $ceuilleur['id']?>"><?php echo $ceuilleur['nom'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Salaire</label>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="number" id="salaire" class="form-control" aria-describedby="basic-icon-default-email2" name="">
                                            <span id="basic-icon-default-email2" class="input-group-text">AR</span>
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
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        var emp=document.getElementById("ceuilleur");
        var montant=document.getElementById("salaire");
        const salaireForm = document.getElementById("salaire-form");


        emp.addEventListener("change",(ev) =>{
            ev.preventDefault();

            // console.log("a")
            const xhr = new XMLHttpRequest();

            let formData = new FormData(salaireForm);

            xhr.addEventListener("readystatechange", () => {
                if(xhr.readyState == 4){
                    if(xhr.status == 200){
                        montant.value = xhr.responseText;
                    }
                }
            });

            xhr.open("POST", "../controllers/ceuilleurControl.php", true);
            xhr.send(formData);
        });

    })

</script>