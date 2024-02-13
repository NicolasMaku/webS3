
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="input-group">
        <input type="date" class="form-control" placeholder="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button" id="button-addon2">Prevoir</button>
        </div>
        <br>
        <br>

        <p>poids total the restant: 200kg</p>
        <br>
        <p>Montant: 1 580 900AR</p>
        <br>
        <br>
        <div class="row">
            <?php for($i = 0; $i < 20; $i++) { ?>

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Parcelle1</h5>
                        <h6 class="card-subtitle text-muted">Cafe noir</h6>
                    </div>
                    <img class="img-fluid" src="../assets/img/elements/parcelle.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">10KG</p>
                        <br>
                        <p class="card-link">Nombre de Pieds:200 kg</p>
                        <br>
                        <p class="card-link">Poids Restante: 407 kg</p>
                    </div>
                </div>
            </div>

            <?php
            } ?>
        </div>
    </div>
</div>
