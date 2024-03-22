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

    if (empty($_POST['pd'])) {

        echo "Pro favor Ingrese PD";
    } else {

        $pd = $_POST['pd'];
    }
    ?>
    <div class="container">

        <h4>Proceso de Donación: <?php echo $pd ?></h4>

        <?php
        include "connection.php";
        $sentencia = "SELECT * FROM images where pd=$pd";
        $resultado = $conn->query($sentencia) or die(mysqli_error($connection));
        while ($fila = $resultado->fetch_assoc()) {

            $url2 = $fila['url'] . $fila['file'];
        ?>  
            
            <embed src="<?php echo $url2 ?>" type="image/tiff" negative=yes>
                <br>
                <br>
            <?php
        }

        mysqli_close($conn);
            ?>
    </div>
    <form action="user.php" method="post">
        <div class="d-grid gap-2 col-10 mx-auto">
            <button class="btn btn-success mb-3" type="submit" aria-label="btn-success" name="volver" id="volver">Volver</button>
        </div>
    </form>
</body>

</html>