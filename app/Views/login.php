<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Gestion de Centros de Computo</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <h1>Login</h1>
          <form action="<?=base_url('/login') ?>" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" class="form-control" required="">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required="">
            <br>
            <button class="btn btn-primary">Iniciar Sesion</button>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>