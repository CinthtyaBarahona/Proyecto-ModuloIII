<?=$cabecera?>

    Formulario de crear

    <div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Agregar Dispositivo</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('dispositivos/guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Dispositivo</label>
                        <input id="nombre" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input id="marca" class="form-control" type="text" name="marca">
                        <label for="modelo">Modelo</label>
                        <input id="modelo" class="form-control" type="text" name="modelo">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Centro de cómputo</label>
                        <select id="inputState" class="form-control" id="centro" name="centro" size="1">
                            <option value="0">Seleccione...</option>
                            <?php foreach($centros as $centro): ?>
                                <option value="<?=$centro->IdCentro?>"><?=$centro->nombreCentro?></option>
                            <?php endforeach?>
                        </select>
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
</body>
