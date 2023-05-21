<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <title>CRUD</title>
</head>
<body>
<div class="container-fluid">   
<h1>Bienvenido a la pantalla CRUD en ROLES</h1>
<table>
    <tr>
        <td>
            PARA CONSULTAR.
        </td>
        <td>
        <a href="<?php echo base_url('/CONSULTA'); ?>">AQUI</a>
        </td>
    </tr>
    <tr>
        <td>
            PARA LISTAR.
        </td>
        <td>
        <a href="<?php echo base_url('/LISTAR'); ?>">AQUI</a>
        </td>
    </tr>
    <tr>
        <td>
            PARA INSERTAR.
        </td>
        <td>
        <a href="<?php echo base_url('/INSERTAR'); ?>">AQUI</a>
        </td>
    </tr>
    <tr>
        <td>
            PARA ACTUALIZAR.
        </td>
        <td>
        <a href="<?php echo base_url('/ACTUALIZAR'); ?>">AQUI</a>
        </td>
    </tr>
    <tr>
        <td>
            PARA ELIMINAR.
        </td>
        <td>
        <a href="<?php echo base_url('/ELIMINAR'); ?>">AQUI</a>
        </td>
    </tr>
</table>
<br>
    <?= anchor(base_url().route_to('/'), 'IR AL LAYOUT', ['class' => 'btn btn-success']) ?>
    </div>
</body>
</html>