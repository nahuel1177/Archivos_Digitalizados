<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/styles.css">

    <title>Historias Clínicas</title>
</head>

<body>
    <?php require 'fragments/header.php' ?>

    <form method="POST" action="queryPD.php">

        <h4>Consultar PD</h4>
        <input class="form-control form-control-mb" type="text" placeholder="Ingrese PD" name="pd" aria-label="form-control-mb" >

        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-success mb-3" type="submit" aria-label="btn-success" name="consulta" id="consulta" >Consultar</button>
            <!-- <button class="btn btn-success mb-3" type="submit" aria-label="btn-success">Cerra Sesión</button> -->
        </div>

    </form>
</body>

</html>