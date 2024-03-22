<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/styles.css">

    <title>Historias Clínicas</title>
</head>

<body>

    <nav class="navbar navbar-expand-xl navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logoEAIT.png" class="img-fluid">
            </a>

        </div>
    </nav>
    <form action="queryCreateUser.php" method="POST">

        <h4>Registrar Usuario</h4>
        <div class="container-sm">
             
                <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" name="lastname" placeholder="Apellidos" required/>
                <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" name="name"placeholder="Nombres" required/>
                <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" name="user"placeholder="Usuario" required/>
                <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" name="password"placeholder="Contraseña" required/>

        </div>

        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-success mb-3" type="submit" aria-label="btn-success">Crear</button>
        </div>
    </form>

    <form action="ABMUser.php" method="post">
        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-success mb-3" type="submit" aria-label="btn-success" name="volver" id="volver">Volver</button>
        </div>
    </form>

</body>

</html>