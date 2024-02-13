<?php
include_once "../inc/function.php";

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
                <form action="" id="crit-form">
                    <div class="input-group">
                        <input type="hidden" name="action" value="payement">
                        <span class="input-group-text">Date Min and Max</span>
                        <input type="date" aria-label="Min" class="form-control" id="date-min" name="debut" value="2023-01-01">
                        <input type="date" aria-label="Max" class="form-control" id="date-max" name="fin" value="2024-02-14">
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
                    <tbody class="table-border-bottom-0" id="my_table">
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

<script>
    document.addEventListener("DOMContentLoaded", () => {
        let date_debut = document.getElementById("date-min");
        let date_max = document.getElementById("date-max");
        let form = document.getElementById("crit-form");
        let table = document.getElementById("my_table");

        let formData = new FormData(form);

        refresh_table();

        function refresh_table(){
            const xhr = new XMLHttpRequest();

            xhr.addEventListener("readystatechange", () => {
                if(xhr.readyState === 4) {
                    if(xhr.status === 200){
                        let newDonnees = JSON.parse(xhr.responseText);
                        let tBody = document.getElementById("my_table");
                        tBody.innerHTML = "";

                        for (let i = 0; i < newDonnees.length ; i++) {
                            let row = document.createElement("tr");

                            let date = document.createElement("td");
                            let ceuilleur = document.createElement("td");
                            let poids = document.createElement("td");
                            let bonus = document.createElement("td");
                            let mallus = document.createElement("td");
                            let montant = document.createElement("td");

                            date.textContent = newDonnees[i]['date'];
                            ceuilleur.textContent = newDonnees[i]['nom'];
                            poids.textContent = newDonnees[i]['poids_minimal'];
                            bonus.textContent = newDonnees[i]['bonus'];
                            mallus.textContent = newDonnees[i]['malus'];
                            montant.textContent = newDonnees[i]['montant'];

                            row.appendChild(date);
                            row.appendChild(ceuilleur);
                            row.appendChild(poids);
                            row.appendChild(bonus);
                            row.appendChild(mallus)
                            row.appendChild(montant);

                            tBody.appendChild(row);
                        }

                    }
                }

            });


            xhr.open("POST", "../controllers/ceuilleurControl.php", true);
            xhr.send(formData);
        }
    })


</script>
