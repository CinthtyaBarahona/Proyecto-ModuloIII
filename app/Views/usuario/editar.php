
<?=$cabecera?>

<div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Editar Rol</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('usuario/actualizar')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$usuario['IdUsuario']?>">
<div class="form-group">
    <label for="nombre">Nombre Completo</label>
    <input id="nombre" value="$usuario['NombreUsuario']" class="form-control" type="text" name="nombre">
</div>
<div class="form-group">
    <label for="usuario">Usuario</label>
    <input id="usuario" class="form-control" type="text" name="usuario">
</div>


<div class="form-group">
    <label for="telefono">Telefono</label>
    <input id="telefono" value="$usuario['TelUsuario']" class="form-control" type="text" name="telefono">
</div>

<div class="form-group">
    <label for="correo">Correo Electronico</label>
    <input id="correo" value="$usuario['CorreoUsuario']" class="form-control" type="text" name="correo">
</div>
<div class="form-group">
    <label for="fnacimiento">Fecha de Nacimiento</label>
    <input id="fnacimiento" value="$usuario['nombre']" class="form-control" type="text" name="fnacimiento">
</div>
<div class="form-group">
    <label for="Contra" >Password </label>
    <input id="contra" value="$PASSWROD['PASSWORD']" class="form-control" type="text" name="contra">
</div>
<div>


<button class="btn btn-success" type="summit">Guardar</button>
</form>
</p>
    </div>
</div>


</form>
<?=$pie;?>