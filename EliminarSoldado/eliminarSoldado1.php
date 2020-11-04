<html>
<head>
<meta charset="utf-8">
<title>Bajas</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","ejercito") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion, "select * from soldado
                        where nombre='$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
  mysqli_query($conexion,"delete from soldado where nombre='$_REQUEST[nombre]'") or
    die("Problemas en el select:".mysqli_error($conexion));
   
    echo'<script type="text/javascript">
    alert("Eliminacion Exitosa");
    window.location.href="../index.html";
    </script>';
}
else
{
  echo'<script type="text/javascript">
    alert("No existe un soldado con ese nombre");
    window.location.href="eliminarSoldado.php";
    </script>';
}
mysqli_close($conexion);
?>
</body>
</html>