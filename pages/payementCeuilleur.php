<?php
include_once "../inc/function.php";
$ceuilleurs = getP;

if(isset($_GET['msg'])){
    alert($_GET['msg']);
}
?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Ceuilleur</h4>

        <div class="card p-4">
            <h5 class="card-header">Vente par Ceuilleur</h5>
            <div class="table-responsive text-nowrap">
                <form action="">
                    <div class="input-group">
                        <span class="input-group-text">Date Min and Max</span>
                        <input type="date" aria-label="Min" class="form-control">
                        <input type="date" aria-label="Max" class="form-control">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Afficher">
                </form>
                <table class="table">
                    <thead>
                    <tr>

                        <th>Date</th>
                        <th>Ceuilleur</th>
                        <th>Poids minimum</th>
                        <th>Bonus</th>
                        <th>Mallus</th>
                        <th>Montant du payement</th>

                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
<!--                    --><?php //foreach($ceuilleurs as $ceuilleur) { ?>
                        <tr>
                            <td>20-02-2024</td>
                            <td>sechepinn</td>
                            <td>5000 kg</td>
                            <td>0.5</td>
                            <td>5</td>
                            <td>4000</td>

                        </tr>
<!--                    --><?php //} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
