<?php
    include_once "../inc/function.php";
    $pds_total_ceuillette = getPoidsTotalCeuillette();
    $pds_restant_parcelle = getPoidsRestantParcelle();
    $prix_revient = getCoutRevientKg();
?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Dashboard des resultat </h5>
                                <p class="mb-4">
                                    Voir tout les resultat Global de l'entreprise
                                </p>
                                <form action="" id="form_unique" method="post">
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="date" placeholder="Choisisser La date de Resultat" aria-describedby="button-addon2">
                                        <input class="btn btn-outline-primary" type="submit" id="button-addon2" value="Afficher">
                                    </div>
                                </form>

                                <form action="" id="form_between" method="post">
                                    <div class="input-group">
                                        <span class="input-group-text">Date Min and Max</span>
                                        <input type="date" aria-label="Max" name="dateMin" class="form-control" id="input_date_min" placeholder="Min...">
                                        <input type="date" aria-label="Min" name="dateMax" class="form-control" id="input_date_max" placeholder="Max...">
                                        <input type="hidden" name="type" value="between">
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-primary" value="Afficher">
                                </form>


                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../assets/img/illustrations/hommeplante-remove.png" height="140" alt="View Badge User" style="margin-bottom: 80px">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <!-- Order Statistics -->
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between  flex-sm-row flex-column gap-3" style="position: relative;">
                                    <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2">Poids total de ceuillette</h5>
                                            <span class="badge bg-label-warning rounded-pill">Year 2024</span>
                                        </div>
                                        <div class="mt-sm-auto">

                                            <h3 class="mb-0" id="total_ceuillette"><?php echo $pds_total_ceuillette?></h3>
                                        </div>
                                    </div>
                                    <div id="profileReportChart" style="min-height: 80px;"><img src="../assets/img/illustrations/feuille-remove.png" height="140" alt="View Badge User"></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 392px; height: 118px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <!--/ Order Statistics -->

                    <!-- Expense Overview -->
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-sm-row flex-column gap-3" style="position: relative;">
                                    <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                        <div class="card-title">
                                            <h5 class="text-nowrap mb-2">Poids restant sur les parcelle</h5>
                                            <span class="badge bg-label-warning rounded-pill">Year 2024</span>

                                        </div>
                                        <div class="mt-sm-auto">
                                            <h3 class="mb-0" id="restant_parcelle"><?php echo $pds_restant_parcelle?></h3>
                                        </div>
                                    </div>
                                    <div id="profileReportChart" style="min-height: 80px;"><img src="../assets/img/illustrations/terrain-remov.png" height="140" alt="View Badge User"></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 392px; height: 118px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Transactions</h5>
                        </div>
                        <div class="card-body">
                            <div id="profileReportChart" style="min-height: 80px; float: right"><img src="../assets/img/illustrations/vente-remov.png" height="140" alt="View Badge User"></div>
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <small class="text-muted d-block mb-1">Money</small>
                                            <h6 class="mb-0">Prix de Revient par kg</h6>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <h4 class="mb-0" id="prix_revient"><?php echo $prix_revient ?></h4>
                                            <span class="text-muted">AR</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../assets/img/icons/unicons/cc-warning.png" alt="chart success" class="rounded">
                                    </div>
                                </div>
                                <span class="fw-medium d-block mb-1">Depenses</span>
                                <h3 class="card-title mb-2">6000 AR</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="../assets/img/icons/unicons/chart-success.png" alt="Credit Card" class="rounded">
                                    </div>
                                </div>
                                <span>Vente</span>
                                <h3 class="card-title text-nowrap mb-1">90000 AR</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card" style="background-color: rgba(41,217,0,0.19)">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Benefice total </h5>
                            <p class="mb-4">
                                Le benefice que vous avez obtenue pendant cette periode
                            </p>
                            <h3 class="card-title text-nowrap mb-1">90000 AR</h3>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/Investment-Vector-Illustration-remov.png" height="140" alt="View Badge User">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let dateMax = document.getElementById("input_date_max").value;
    let dateMin = document.getElementById("input_date_max").value;


    document.addEventListener("DOMContentLoaded", () => {
        let form_unique = document.getElementById("form_unique");

        form_unique.addEventListener("submit", (event) => {
            event.preventDefault();

            let formData = new FormData(form_unique);
            const xhr = new XMLHttpRequest();

            xhr.addEventListener("readystatechange", () => {
                if(xhr.readyState == 4){
                    if(xhr.status == 200){
                        let reponse = JSON.parse(xhr.responseText);
                        let total_ceuillette  = document.getElementById("total_ceuillette");
                        let restant_parcelle  = document.getElementById("restant_parcelle");
                        let prix_revient = document.getElementById("prix_revient");

                        total_ceuillette.textContent = reponse['poidsTotal'];
                        restant_parcelle.textContent = reponse['poidsRestantParcelle'];
                        prix_revient.textContent = reponse['prixDeRevientKg'];
                    }
                }
            });

            xhr.open("POST", "../controllers/resultatControl.php", true);
            xhr.send(formData);
        });

        let form_between = document.getElementById("form_between");

        form_between.addEventListener("submit", (event) => {
            event.preventDefault();

            let formData = new FormData(form_between);
            const xhr = new XMLHttpRequest();

            xhr.addEventListener("readystatechange", () => {
                if(xhr.readyState == 4){
                    if(xhr.status == 200){
                        let reponse = JSON.parse(xhr.responseText);
                        let total_ceuillette  = document.getElementById("total_ceuillette");
                        let restant_parcelle  = document.getElementById("restant_parcelle");
                        let prix_revient = document.getElementById("prix_revient");

                        total_ceuillette.textContent = reponse['poidsTotal'];
                        restant_parcelle.textContent = reponse['poidsRestantParcelle'];
                        prix_revient.textContent = reponse['prixDeRevientKg'];
                    }
                }
            });

            xhr.open("POST", "../controllers/resultatControl.php", true);
            xhr.send(formData);
        });
    })
</script>