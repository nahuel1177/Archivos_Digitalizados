<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<link rel="stylesheet" href="styles/styles.css">

<title>ABM Usuarios</title>
</head>

<body>
    <?php require 'fragments/header.php';?>

    <table class="table table-striped table-hover">
        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">Usuario</th>
      <th scope="col">Password</th>
      <th scope="col">Tipo</th>
      <th scope="col">Activo</th>
    </tr>
  </thead>

    <?php
    include "connection.php";
    $sentencia = "SELECT * FROM images where pd=$pd";
    $resultado = $conn->query($sentencia) or die(mysqli_error($connection));
    while ($fila = $resultado->fetch_assoc()) {
    ?>

  <tbody>
    <tr>
      <td><?php echo $fila['id']?></td>
      <td><?php echo $fila['lastname']?></td>
      <td><?php echo $fila['name']?></td>
      <td><?php echo $fila['user']?></td>
      <td><?php echo $fila['password']?></td>
      <td><?php echo $fila['type']?></td>
      <td><?php echo $fila['active']?></td>
    </tr>
  <?php
    }
    ?>
  </tbody>
</table>

<form action="admin.php" method="post">
    <h4>ABM Usuario</h4>
    
    <?php
    
    ?>
        
        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-success mb-3" type="submit" aria-label="btn-success" name="volver" id="volver">Volver</button>
        </div>
    </form>

</body>

</html>
