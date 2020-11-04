<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>MOSTRAR-SOLDADO</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>REGISTRO DE SOLDADOS</h1>

        <form  method="post">
            
<div class="col-1">
    <label>
        <center><h1>DATOS DEL SOLDADO</h1></center>
        
            <?php
$conexion=mysqli_connect("localhost","root","","ejercito") or
    die("Problemas con la conexión");
    
    $registros=mysqli_query($conexion,"select *from soldado where nombre='$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));


if ($reg=mysqli_fetch_array($registros))
{
  echo "Nombres: ".$reg['nombre']."<br>";
  echo "Apellidos: ".$reg['apellido']."<br>";
  echo "Fecha de Nacimiento: ".$reg['fechaN']."<br>";
  echo "Telefono: ".$reg['telefono']."<br>";
  echo "Color de ojos: ".$reg['colorOjos']."<br>";
  echo "Tipo de sangre: ".$reg['tipoS']."<br>";
  echo "Estatura en cm: ".$reg['estatura']."<br>";
  echo "Sexo: ".$reg['sexo']."<br>";
  echo "Peso en KG: ".$reg['peso']."<br>";
  echo "Escuadron: ".$reg['escuadron']."<br>";
  echo "Grado: ".$reg['grado']."<br>";
  echo "Escalon: ".$reg['escalon']."<br>";
}
else
{
  echo "No existe un alumno con ese nombre.";
}
mysqli_close($conexion);
?>
      </label>
</div>


            

        </form>
       
    </div>  
    <script type="text/javascript">
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });
    </script>
</body>

</html>