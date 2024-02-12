<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Insere une variete de the</h5>
                    <div class="card-body">
                        <form action="" id="variete-form">
                            <input type="hidden" name="action" value="save">

                            <div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Nom Variete</label>
                                    <div class="col-md-9">
                                        <input type="text" id="html5-text-input" class="form-control" name="nom">

                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Occupation</label>
                                    <div class="col-md-9">
                                        <input type="number" id="html5-text-input" class="form-control" name="occupation">

                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label" for="basic-icon-default-email">Rendement par pied</label>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="number" id="basic-icon-default-email" class="form-control" aria-describedby="basic-icon-default-email2" name="rendement">
                                            <span id="basic-icon-default-email2" class="input-group-text">KG</span>
                                        </div>
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

<script>
    document.addEventListener("DOMContentLoaded", () => {
        let form = document.getElementById("variete-form");

        form.addEventListener("submit", (event) => {
            event.preventDefault();

            let formData = new FormData(form);
            const xhr = new XMLHttpRequest();



            xhr.addEventListener("readystatechange", () => {
                if(xhr.readyState == 4){
                    if(xhr.status == 200){
                        alert(xhr.responseText);
                    }
                }
            });

            xhr.open("POST", "../controllers/varieteTheControl.php", true);
            xhr.send(formData);
        });
    })
</script>

