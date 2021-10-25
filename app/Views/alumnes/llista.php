<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title><?= $titol ?></title>
    </head>
    <body>
        <div class="container-fluid">
        <h1 class="text-primary text-center"><?= $titol ?></h1>
        <a href="<?= site_url('grupsController') ?>" class="btn btn-primary">Tornar</a>
        <table class="table table-striped table-condensed">
            <thead>
                <th>1er Apellido</th>
                <th>2º Apellido</th>
                <th>Nombre</th>
            </thead>
            <?php foreach ($alumnes as $alumne): ?>
                <tr>
                    <td><?= $alumne['apellido1'] ?></td>
                    <td><?= $alumne['apellido2'] ?></td>
                    <td><?= $alumne['nombre'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </body>
</html>

