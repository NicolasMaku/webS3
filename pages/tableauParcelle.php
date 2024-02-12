<?php
    include_once "../inc/function.php";
    $parcelles = parcelle_variete_getAll();

    if(isset($_GET['msg'])){
        alert($_GET['msg']);
    }

?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Parcelle</h4>

        <div class="card">
            <h5 class="card-header">Parcelle <a href="" style="float: right"><button type="button" class="btn btn-outline-dark">Inreserer</button></a> </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Num Parcelle</th>
                        <th>Surface en HA</th>
                        <th>Variete de the plante</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php foreach ($parcelles as $parcelle) { ?>
                        <tr>
                            <td><?php echo $parcelle['numero']?></td>
                            <td><?php echo $parcelle['surface']?></td>
                            <td><?php echo $parcelle['nom']?></td>
                            <td><a href="../template/backModel.php?page=../pages/insererParcelle.php&action=update&idParcelle=<?php echo $parcelle['numero'] ?>"><button type="button" class="btn rounded-pill btn-outline-info">Modifier</button></a></td>
                            <td><a href="../controllers/parcelleControl.php?action=delete&idParcelle=<?php echo $parcelle['numero'] ?>"><button type="button" class="btn rounded-pill btn-outline-danger">Supprimer</button></a></td>

                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
