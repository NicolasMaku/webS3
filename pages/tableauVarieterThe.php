<?php
    include_once "../inc/function.php";
    $varietes = the_getAll();

    if(isset($_GET['msg'])){
        alert($_GET['msg']);
    }

?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Varieter de the</h4>

        <div class="card">
            <h5 class="card-header">Variete de the <a href="" style="float: right"><button type="button" class="btn btn-outline-dark">Inreserer</button></a> </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Occupation</th>
                        <th>Rendement par pied</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php foreach ($varietes as $variete) {?>
                    <tr>
                        <td><?php echo $variete['nom'] ?></td>
                        <td><?php echo $variete['occupation']?></td>
                        <td><?php echo $variete['rendement_par_pied']?></td>
                        <td><a href=""><button type="button" class="btn rounded-pill btn-outline-info">Modifier</button></a></td>
                        <td><a href="../controllers/varieteTheControl.php?action=delete&idVariete=<?php echo $variete['id']?>"><button type="button" class="btn rounded-pill btn-outline-danger">Supprimer</button></a></td>
                    </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
