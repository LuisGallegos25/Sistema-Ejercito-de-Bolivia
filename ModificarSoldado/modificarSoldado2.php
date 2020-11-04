<html>

<head>
    <title>Modificar3</title>
</head>

<body>
   
    <?php
$conexion=mysqli_connect("localhost","root","","ejercito") or
    die("Problemas con la conexión");

mysqli_query($conexion, "update soldado
                          set telefono='$_REQUEST[nuevotelefono]', peso='$_REQUEST[nuevopeso]', estatura='$_REQUEST[nuevoestatura]', grado='$_REQUEST[nuevogrado]'
                        where telefono='$_REQUEST[telefonoviejo]'")
    or die('<script type="text/javascript">
    alert("Formulario Incompleto");
    window.location.href="modificarSoldado0.php";
    </script>');
mysqli_close($conexion);
 echo'<script type="text/javascript">
    alert("Modificacion Exitosa");
    window.location.href="../index.html";
    </script>';
?>
</body>

</html>
