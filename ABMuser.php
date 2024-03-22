<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<link rel="stylesheet" href="styles/styles.css">
<script src="https://kit.fontawesome.com/bb20e308ce.js" crossorigin="anonymous"></script>

<title>ABM Usuarios</title>
</head>

<body>

    <?php require 'fragments/header.php'; ?>



    <h4>ABM Usuario</h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Usuario</th>
                <th scope="col">Tipo</th>
                <th scope="col">Activo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <?php
        include "connection.php";
        $sentencia = "SELECT * FROM usuarios";
        $resultado = $conn->query($sentencia) or die(mysqli_error($connection));
        while ($fila = $resultado->fetch_assoc()) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $fila['id'] ?></td>
                    <td><?php echo $fila['lastname'] ?></td>
                    <td><?php echo $fila['name'] ?></td>
                    <td><?php echo $fila['usuario'] ?></td>
                    <td><?php echo $fila['type'] ?></td>
                    <td><?php echo $fila['active'] ?></td>
                    <td class="table-action">
                        <a ref="" class="action-icon">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a ref="" class="action-icon">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>

                </tr>
            <?php
        }
            ?>
            </tbody>
    </table>

    <form action="createUser.php" method="post">
        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-success mb-3" type="submit" aria-label="btn-success" name="nuevo" id="nuevo">Nuevo</button>
        </div>
    </form>

    <form action="admin.php" method="post">
        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-success mb-3" type="submit" aria-label="btn-success" name="volver" id="volver">Volver</button>
        </div>
    </form>


</body>

</html>