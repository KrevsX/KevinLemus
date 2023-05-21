
<?= $this->extend('default') ?>
<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>LOGIN</title>

</head>
<body>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col-6">
          <h2 class="display-6">LOGIN</h2>
            <?= helper('form');?>
            <?= form_open(base_url('login/validacion')) ?>
            <?= form_label('Usuario', 'username') ?>
            <?= form_input('username', '', ['class' => 'form-control']) ?><br>
            <?= form_label('Contraseña', 'password') ?>
            <?= form_password('password', '', ['class' => 'form-control']) ?><br>
            <?= form_submit('mysubmit', 'Iniciar sesión', ['class' => 'btn btn-success']) ?>
            <?= form_close() ?>
      </div>
      <div class="col"> 
      </div>
    </div>
  </div> 
  <BR>
  <div class="container text-center">
    <div class="row">
      <div class="col">
     </div>
      <div class="col-6">
      <table class="table table-hover">
        <tr>
          <td>
            USUARIOS PERMITIDOS
          </td>
          <td>
            CONTRASENAS
          </td>
        </tr>
        <tr>
          <td>
          KEVIN
          </td>
          <td>
          123
          </td>
        </tr>
        <tr>
          <td>
          GUIA10
          </td>
          <td>
          123
          </td>
        </tr>
        <tr>
          <td>
          HOLA
          </td>
          <td>
          123
          </td>
        </tr>
      </table> 
      </div>
      <div class="col"> 
      </div>
    </div>
  </div> 
</body>
</html>
<?= $this->endSection() ?>    
