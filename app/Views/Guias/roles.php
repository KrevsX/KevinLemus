<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>ROLES</title>
</head>
<body>
  <h1>Bienvenido a la pantalla para asignacion de ROLES</h1>

<p>
    PRUEBA ROLES CON CONTROLADOR
</p>
<br>
<select>
  <option value="op1">ROL 1</option>
  <option value="op2">ROL 2</option>
  <option value="op3">ROL 3</option>
</select>
<br><br>
    <?= anchor(base_url().route_to('/'), 'IR AL LAYOUT', ['class' => 'btn btn-success']) ?>
</body>
</html>