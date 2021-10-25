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
        <table  class="table table-striped table-condensed">
            <thead>
                <th class="col-1"></th>
                <th class="col-1">NIA</th>
                <th class="col-3">Nom</td>
                <th class="col-1">Estat</td>
                <th class="col-2">Email</td>
            </thead>

            <?php foreach ($alumnes as $alumne): ?>
                <tr>
                    <td><img src="<?= base_url('images/alumnes/' . sprintf('%06d', $alumne['id']) . '.jpg') ?>" width="75px" class="rounded"></td>
                    <td><?= $alumne['NIA'] ?></td>
                    <td><?= $alumne['nombre_completo'] ?></td>
                    <td><?= $alumne['estado'] ?></td>
                    <td><?= $alumne['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <img src="../../../public/images/alumnes/000001.jpg" alt=""/>
       </div>
    </body>
</html>