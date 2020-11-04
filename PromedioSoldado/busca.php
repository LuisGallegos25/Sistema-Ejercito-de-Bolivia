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

        <form method="post">

            <div class="col-1">
                <label>
                    <center>
                        <h1>EDAD DEL SOLDADO</h1>
                    </center>

                    <?php
   $conexion=mysqli_connect("localhost","root","","ejercito") or
                    die("Problemas con la conexión");
                    $registros=mysqli_query($conexion,"select fechaN from soldado where nombre='$_REQUEST[nombre]'") or
    die("Problemas en el select:".mysqli_error($conexion));
while ($reg=mysqli_fetch_array($registros))
{
    echo "fecha de Nacimiento del soldado: "; 
    echo $_REQUEST['nombre']." : ";
    echo $reg['fechaN']."<br>";
    function calculaedad($fechanacimiento){
	list($ano,$mes,$dia) = explode("-",$fechanacimiento);
	$ano_diferencia  = date("Y") - $ano;
	$mes_diferencia = date("m") - $mes;
	$dia_diferencia   = date("d") - $dia;
	if ($dia_diferencia < 0 || $mes_diferencia < 0)
		$ano_diferencia--;
	return $ano_diferencia;
}
// Modo de uso
    echo "EDAD DEL SOLDADO"." : ";
echo calculaedad ($reg['fechaN'])." AÑOS DE EDAD"; // Imprimirá: 30Ñ
}


            
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
