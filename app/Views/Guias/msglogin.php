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
<div class="container-fluid">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
    </svg>
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
    INGRESO POR VALIDACION DE DATOS INGRESADOS
    </div>
</div>
</div>
<div class="container text-center">
  <div class="row row-cols-3">
    <div class="col">
    
    </div>
    <div class="col">
    <?= anchor(base_url().route_to('show_login'), 'IR AL LOGIN', ['class' => 'btn btn-danger']) ?>
    <?= anchor(base_url().route_to('/'), 'IR AL LAYOUT', ['class' => 'btn btn-success']) ?>
    </div>
    <div class="col"></div>

  </div>
</div>
</body>
</html>
<?= $this->endSection() ?>    