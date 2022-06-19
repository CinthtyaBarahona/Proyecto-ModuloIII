
<?=$cabecera?>

<a href="<?=base_url('dispositivos/crear');?>"><button type="button" class="btn btn-success">Agregar Dispositivo</button> </a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Centro</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($dispositivos as $Dispositivo): ?>

                <tr>
                    <td><?=$Dispositivo['IdDispositivo']; ?></td>
                    <td><?=$Dispositivo['nombreDispositivo']; ?></td>
                    <td><?=$Dispositivo['marcaDispositivo']; ?></td>
                    <td><?=$Dispositivo['modeloDispositivo']; ?></td>
                    <td><?=$Dispositivo['IdCentro']; ?></td>
                    <td><?=$Dispositivo['descripcionDispositivo']; ?></td>
                    <td>
                    <a href="<?=base_url('dispositivos/editar/'.$Dispositivo['IdDispositivo']); ?>" type="button" class="btn btn-info">Editar</a>
                    <a href="<?=base_url('dispositivos/borrar/'.$Dispositivo['IdDispositivo']); ?>" type="button" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
