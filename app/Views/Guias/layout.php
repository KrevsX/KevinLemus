<?= $this->extend('default') ?>
<?= $this->section('content')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>GUIAS</title>
</head>
<body>
<body>
<center>
<div class="container-fluid">
    <div>
        <h1 class="display-6">GUIAS PRACTICAS</h1>
        <h2 class="display-6">--KEVIN ARMANDO LEMUS ALAS--|--CARNET #170622--</h2>
    </div>
</div>
</center>
<br>
<div class="container text-center">
  <div class="row">
    <div class="col">
    <h2 class="display-6">Guia Practica #7</h2>
        <p>
        <b></b>PRUEBAS DE INTERFACES...
        </p>
             <a href="<?= base_url().route_to('show_inicio')?>"target="_blank">PAGINA PARA INICIO</a>
        <br>
             <a href="<?= base_url().route_to('show_crudI')?>"target="_blank">PAGINA PARA CRUD ROLES</a>
    </div>
    <div class="col">
    <h2 class="display-6">Guia Practica #8</h2>
        <p>
        <b></b>PRUEBAS DE REDIRECIONAMIENTO POR MEDIO DE CONTROLADORES...
        </p>
             <a href="<?= base_url().route_to('show_home')?>"target="_blank">PAGINA PARA HOME</a>
        <br>
             <a href="<?= base_url().route_to('show_roles')?>"target="_blank">PAGINA PARA ROLES</a>
    </div>
  </div>
</div>
<br>
<div class="container text-center">
  <div class="row">
    <div class="col">
        <h2 class="display-6">Guia Practica #9</h2>
            <p>
                PRUEBA DE CRUD POR MEDIO DE MODELS...
            </p>
            <a href="<?= base_url().route_to('show_crud')?>"target="_blank">PAGINA PARA CRUD</a>
    </div>
    <div class="col">
        <h2 class="display-6">Guia Practica #10</h2>
            <p>
            PRUEBA DEL LOGIN
            </p>
            <a href="<?= base_url().route_to('show_login')?>"target="_blank">INICIAR SESION.</a>
    </div>
  </div>
</div>
</body>    
</html>
<?= $this->endSection('content')?>