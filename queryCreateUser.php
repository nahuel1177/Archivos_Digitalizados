<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<link rel="stylesheet" href="styles/styles.css">

<title>Historias Clínicas</title>
</head>

<body>
    <?php require 'fragments/header.php';

    if (empty($_POST['lastname'] || $_POST['name'] || $_POST['user'] || $_POST['password'])) {

        echo "Ingresar todos los datos";

    } else {

        $lastname = $_POST['lastname'];
        $name = $_POST['name'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $pass_c = sha1($password);
        
    }

    ?>
    <div class="container">

        <?php
        include "connection.php";
        $sentencia = "INSERT INTO `usuarios`(`lastname`, `name`, `usuario`, `password`, `type`, `active`) VALUES ('$lastname','$name','$user','$pass_c','1','1')";
        $resultado = $conn->query($sentencia) or die(mysqli_error($connection));

        mysqli_close($conn);
        ?>

        <h4>El usuario se dió de alta exitosamente</h4>

    </div>
    <form action="CreateUser.php" method="post">
        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-success mb-3" type="submit" aria-label="btn-success" name="volver" id="volver">Volver</button>
        </div>
    </form>
</body>

</html>