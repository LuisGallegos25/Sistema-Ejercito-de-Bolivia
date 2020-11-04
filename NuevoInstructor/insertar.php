<html>
<html>

<head>
    <title>Altas</title>
</head>

<body>
    <?php
   
$conexion=mysqli_connect("localhost","root","","ejercito") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into instructor(nombre,apellido,fechaN,telefono,tipoS,sexo,estatura,peso,grado,arma) values 
                       ('$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[fechaN]','$_REQUEST[phone]','$_REQUEST[sangre]','$_REQUEST[sexo]','$_REQUEST[estatura]','$_REQUEST[peso]',
                       '$_REQUEST[grado]','$_REQUEST[arma]')")
  or die('<script type="text/javascript">
    alert("Formulario Incompleto");
    window.location.href="index.php";
    </script>');

mysqli_close($conexion);

echo'<script type="text/javascript">
    alert("Insertado con Exito");
    window.location.href="index.php";
    </script>';
?>
</body>

</html>
