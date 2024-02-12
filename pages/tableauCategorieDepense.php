<?php
    include_once "../inc/function.php";
    $categorieDepenses = categorie_depense_getAll();
?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Categorie Depense</h4>

        <div class="card">
            <h5 class="card-header">Categorie Depense <a href="" style="float: right"><button type="button" class="btn btn-outline-dark">Inreserer</button></a> </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Categorie</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    <?php
                        foreach ($categorieDepenses as $categorieDepense) { ?>
                            <tr>
                                <td><?php echo $categorieDepense['nom']; ?></td>
                                <td><a href="backModel.php?page=../pages/insertCategorieDepense.php&action=update&id=<?php echo $categorieDepense['id']; ?>"><button type="button" class="btn rounded-pill btn-outline-info">Modifier</button></a></td>
                                <td><a href="../controllers/categorieDepenseControl.php?action=delete&id=<?php echo $categorieDepense['id']; ?>"><button type="button" class="btn rounded-pill btn-outline-danger">Supprimer</button></a></td>
                            </tr>
                        <?php }
                    ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
