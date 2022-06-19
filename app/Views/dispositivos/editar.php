
<?=$cabecera?>
    Formulario de editar
    <div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Editar Dispositivo</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('dispositivos/actualizar')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$Dispositivo['IdDispositivo']?>">
                    <div class="form-group">
                        <label for="nombre">Dispositivo</label>
                        <input id="nombre" value="<?=$Dispositivo['nombreDispositivo']?>" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input id="marca" value="<?=$Dispositivo['marcaDispositivo']?>" class="form-control" type="text" name="marca">
                        <label for="modelo">Modelo</label>
                        <input id="modelo" value="<?=$Dispositivo['modeloDispositivo']?>" class="form-control" type="text" name="modelo">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="10" rows="5"><?=$Dispositivo['descripcionDispositivo']?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </p>
        </div>
    </div>
<?=$pie?>
