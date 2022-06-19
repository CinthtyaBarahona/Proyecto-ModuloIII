

<?=$cabecera?>
<a class="btn btn-success" href="<?=base_url('usuario/crear')?>">Crear un nuevo Usuario  </a>
    
    <div class="container">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo de Usuario </th>
                    <th>Rol </th>
                    <th>DUI</th>
                    <th>Telefono </th>
                    <th>Correo Electronico</th>
                    <th> Fecha de Nacimiento </th>
                    <th>Acciones </th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($usuarios as $usuario): ?>

                <tr>
                    <td><?=$usuario['IdUsuario']; ?></td>
                    <td><?=$usuario['NombreUsuario']; ?></td>
                    <td><?=$usuario['Usuario']; ?> </td>
                    <td><?=$usuario['nombreRol']?></td>
                    <td><?=$usuario['DuiUsuario']; ?> </td>
                    <td><?=$usuario['TelUsuario']; ?> </td>
                    <td><?=$usuario['CorreoUsuario']; ?> </td>
                    <td><?=$usuario['FechaNacimiento']; ?> </td>

                   
                    <td><a href="<?=base_url('usuario/editar/'.$usuario['IdUsuario']);?>" class="btn btn-primary" type="button">Editar</button> 
                    <a href="<?=base_url('usuario/borrar/'.$usuario['IdUsuario']);?>" class="btn btn-danger" type="button">Borrar</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>