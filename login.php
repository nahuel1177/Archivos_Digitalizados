<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "connection.php";
$sentencia = "SELECT * FROM usuarios";
$resultado = $conn->query($sentencia) or die(mysqli_error($connection));

$flag = 0;

while ($fila = $resultado->fetch_assoc()) {

    $user = $fila['usuario'];
    $password = $fila['password'];
    $type = 1;
  

    if ($user == $_POST['user'] && $password == sha1($_POST['password'])) {

        $flag = 1;

        if ($fila['type'] == $type) {

            header('Location: user.php');

        } else {

            header('Location: admin.php');

        }
    }
    echo "bandera: " . $flag;
}

if ($flag == 0) {

    header('Location: errorLogin.php');

}

mysqli_close($conn);
?>