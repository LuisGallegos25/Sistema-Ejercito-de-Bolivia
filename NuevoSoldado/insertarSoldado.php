<html>
<html>

<head>
    <title>Altas</title>
</head>

<body>
    <?php
$conexion=mysqli_connect("localhost","root","","ejercito") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into soldado(nombre,apellido,fechaN,telefono,colorOjos,tipoS,sexo,estatura,peso,escuadron,grado,escalon) values 
                       ('$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[fechaN]','$_REQUEST[telefono]','$_REQUEST[ojos]',   '$_REQUEST[sangre]','$_REQUEST[sexo]','$_REQUEST[estatura]','$_REQUEST[peso]','$_REQUEST[escuadron]','$_REQUEST[grado]','$_REQUEST[escalon]')")
  or die('<script type="text/javascript">
    alert("Formulario Incompleto");
    window.location.href="index.php";
    </script>');
mysqli_close($conexion);

 echo'<script type="text/javascript">
    alert("Registro Exitoso");
    window.location.href="../index.html";
    </script>';
?>
</body>

</html>
