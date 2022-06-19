
<?=$cabecera?>
    Formulario de crear

    <div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Agregar Rol</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('roles/guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Rol</label>
                        <input id="nombre" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="10" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Guardar</button>

                </form>
            </p>
        </div>
    </div>
<?=$pie?>
