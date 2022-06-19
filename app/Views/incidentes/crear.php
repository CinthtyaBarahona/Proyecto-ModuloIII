
<?=$cabecera?>
    Formulario de crear

    <div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Agregar Incidente</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('incidentes/guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Incidente</label>
                        <input id="nombre" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="10" rows="5"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputState">Estado</label>
                        <select id="inputState" class="form-control" id="estado" name="estado" size="1">
                            <option value="0">Seleccione...</option>
                            <?php foreach($estados as $estado): ?>
                                <option value="<?=$estado->IdEstado?>"><?=$estado->Estado?></option>
                            <?php endforeach?>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputState">Centro de Computo</label>
                        <select id="inputState" class="form-control" id="centro" name="centro" size="1">
                            <option value="0">Seleccione...</option>
                            <?php foreach($centros as $centro): ?>
                                <option value="<?=$centro->IdCentro?>"><?=$centro->nombreCentro?></option>
                            <?php endforeach?>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputState">Dispositivo</label>
                        <select id="inputState" class="form-control" id="dispositivo" name="dispositivo" size="1">
                            <option value="0">Seleccione...</option>
                            <?php foreach($dispositivos as $dispositivo): ?>
                                <option value="<?=$dispositivo->IdDispositivo?>"><?=$dispositivo->nombreDispositivo?></option>
                            <?php endforeach?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Guardar</button>

                </form>
            </p>
        </div>
    </div>
<?=$pie?>
