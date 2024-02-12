<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Inserer une Parcelle</h5>
                    <div class="card-body">
                        <form action="" id="ceuillette-form">
                            <input type="hidden" name="action" value="save">

                            <div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Num parcelle</label>
                                    <div class="col-md-9">
                                        <input type="number" id="html5-text-input" class="form-control" name="">

                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Surface en HA</label>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="number" id="basic-icon-default-email" class="form-control" aria-describedby="basic-icon-default-email2" name="rendement">
                                            <span id="basic-icon-default-email2" class="input-group-text">HA</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Variete de the plante</label>
                                    <div class="col-md-9">
                                        <select name="idCateg" id="html5-text-input" class="form-select">

                                                <option value="0">Black Tea</option>
                                                <option value="0">White Tea</option>

                                        </select>
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