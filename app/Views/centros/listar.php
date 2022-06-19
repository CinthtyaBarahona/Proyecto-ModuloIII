

<?=$cabecera?>

<a class="btn btn-success" href="<?=base_url('centros/crear')?>">Crear un nuevo centro  </a>
    

    <div class="container">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones </th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($centros as $centro): ?>
                <tr>
                    <td><?=$centro['IdCentro']; ?></td>
                    <td><?=$centro['nombreCentro']; ?></td>
                    <td><?=$centro['descripcionCentro']; ?> </td>
                   
                    <td><a href="<?=base_url('centros/editar/'.$centro['IdCentro']);?>" class="btn btn-primary" type="button">Editar</button> 
                    <a href="<?=base_url('centros/borrar/'.$centro['IdCentro']);?>" class="btn btn-danger" type="button">Borrar</button>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
        </table>

        <!----?php echo $paginador->simpleLinks(); ?--->
    </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


