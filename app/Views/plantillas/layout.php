<!doctype html>
<html>
<head>
    <title>MY NAME IS KEVIN</title>
</head>
<body>
<?= $this->extend('default') ?>
<?= $this->section('content')?>

    <h1>GUIA PRACTICA #8</h1>

<?= $this->endSection()?>
<?= $this->section('content')?>
<p>
    PRUEBAS REDICIONAR A...
</p>

<a href="<?= base_url().route_to('show_inicio')?>"target="_blank">PAGINA PARA INICIO</a>
<br><br>
<a href="<?= base_url().route_to('show_crud')?>"target="_blank">PAGINA PARA CRUD</a>
<?= $this->endSection('content')?>

    
</body>
</html>