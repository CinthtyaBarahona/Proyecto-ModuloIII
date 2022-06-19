
<?=$cabecera?>

<a href="<?=base_url('roles/crear');?>"><button type="button" class="btn btn-success">Agregar Rol</button> </a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($roles as $rol): ?>

                <tr>
                    <td><?=$rol['IdRol']; ?></td>
                    <td><?=$rol['nombreRol']; ?></td>
                    <td><?=$rol['descripcionRol']; ?></td>
                    <td>
                    <a href="<?=base_url('roles/editar/'.$rol['IdRol']); ?>" type="button" class="btn btn-info">Editar</a>
                    <a href="<?=base_url('roles/borrar/'.$rol['IdRol']); ?>" type="button" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie?>
