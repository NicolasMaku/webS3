<?php
    include_once "../inc/function.php";
    $ceuilleurs = ceuilleur_getAll();

    if(isset($_GET['msg'])){
        alert($_GET['msg']);
    }
?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Ceuilleur</h4>

        <div class="card">
            <h5 class="card-header">Ceuilleur <a href="" style="float: right"><button type="button" class="btn btn-outline-dark">Inreserer</button></a> </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Genre</th>
                        <th>Date</th>
                        <th>Poids minimum</th>
                        <th>Bonus</th>
                        <th>Mallus</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php foreach($ceuilleurs as $ceuilleur) { ?>
                    <tr>
                        <td><?php echo $ceuilleur['nom']?></td>
                        <td><?php echo $ceuilleur['genre']?></td>
                        <td><?php echo $ceuilleur['date_naissance'] ?></td>
                        <td><?php echo $ceuilleur['poids_minimal'] ?></td>
                        <td><?php echo $ceuilleur['bonus'] ?></td>
                        <td><?php echo $ceuilleur['malus'] ?></td>
                        <td><a href="../template/backModel.php?page=../pages/insertCeuilleur.php&action=update&idCeuilleur=<?php echo $ceuilleur['id']?>"><button type="button" class="btn rounded-pill btn-outline-info">Modifier</button></a></td>
                        <td><a href="../controllers/ceuilleurControl.php?action=delete&idCeuilleur=<?php echo $ceuilleur['id']?>"><button type="button" class="btn rounded-pill btn-outline-danger">Supprimer</button></a></td>

                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
