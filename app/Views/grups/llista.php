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
            <a href="<?= site_url('alumnosController')?>" class="btn btn-primary">
                Tot l'alumnat
            </a>
            <table class="table table-striped table-condensed">
                <thead>
                    <th>Codi</th>
                    <th>Grup</th>
                    <th>Alumnes</th>
                </thead>
                <?php foreach ($grups as $grup): ?>
                    <tr>
                        <td><?= $grup->codigo ?></td>
                        <td><?= $grup->nombre ?></td>
                        <td>
                            <a href="<?= site_url('alumnosController/grup/' . $grup->codigo) ?>" class="btn btn-primary"> 
                                alumnes 
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>
</html>

