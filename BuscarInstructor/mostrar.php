<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>MOSTRAR-INSTRUCTORES</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>MOSTRAR DATOS DE INSTRUCTOR</h1>

        <form action="buscar.php" method="post">
            <div class="col-1">
                <label>
                    <?php
$conexion=mysqli_connect("localhost","root","","ejercito") or
    die("Problemas con la conexión");

$instructor=mysqli_query($conexion,"select * from instructor where nombre='$_REQUEST[instructor]'") or
  die("Problemas en el select:".mysqli_error($conexion));
            
            if ($reg=mysqli_fetch_array($instructor))
{
                echo "Nombre: ".$reg['nombre']."<br>";
                echo "Apellidos: ".$reg['apellido']."<br>";
                echo "Fecha de Nacimiento: ".$reg['fechaN']."<br>";
                echo "Telefono: ".$reg['telefono']."<br>";
                echo "Tipo de Sangre: ".$reg['tipoS']."<br>";
                echo "Sexo: ".$reg['sexo']."<br>";
                echo "Estatura en CM: ".$reg['estatura']."<br>";
                echo "Peso en KG: ".$reg['peso']."<br>";
                echo "Grado: ".$reg['grado']."<br>";
                echo "Arma: ".$reg['arma']."<br>";
 
}
else
{
  echo "No existe un alumno con ese nombre.";
}
            ?>

                </label>
            </div>

<center> <input class="botonn" type="submit" value="Volver"> </center>
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
