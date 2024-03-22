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
    <form action="login.php" method="POST">

        <h4>Iniciar sesión</h4>
        
        <input class="form-control form-control-mb" type="text" placeholder="Usuario" name="user" aria-label=".form-control-mb">
        <input class="form-control form-control-mb" type="password" placeholder="Contraseña" name="password" aria-label=".form-control-mb">
        

        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-success mb-3" type="submit" aria-label="btn-success">Acceder</button>
        </div>


    </form>
</html>