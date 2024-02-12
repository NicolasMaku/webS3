<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Saisie de Depenses</h5>
                    <div class="card-body">
                        <form action="../template/frontModel.php">
                            <div>
                                <div class="mb-3 row">
                                    <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" name="date">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Categorie</label>
                                    <div class="col-md-10">
                                        <select name="categorie" id="html5-text-input" class="form-select">
                                            <option value="0">Engrais</option>
                                            <option value="0">Carburant</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Montant</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <input type="number" id="basic-icon-default-email" class="form-control" aria-describedby="basic-icon-default-email2" name="poids">
                                            <span id="basic-icon-default-email2" class="input-group-text">AR</span>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Send" style="background-color: green">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>