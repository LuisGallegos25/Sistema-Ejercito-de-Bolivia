<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>LISTAR-ESCUADRONES</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>REGISTRO DE ESCUADRONES</h1>

        <form action="listarEscuadron1.php" method="post">
            
<div class="col-1">
    <label>
        <center>Seleccione un Escuadron</center>
        <select tabindex="4" name="escuadron">
            <?php
                $conexion=mysqli_connect("localhost","root","","ejercito") or
                    die("Problemas con la conexión");
                    $registros=mysqli_query($conexion,"select escuadron from escuadrones") or
    die("Problemas en el select:".mysqli_error($conexion));
while ($reg=mysqli_fetch_array($registros))
{
  echo "<option value=\"$reg[escuadron]\">$reg[escuadron]</option>";
}
?>
        </select>
    </label>
</div>


            <center><input class="botonn" type="submit" value="BUSCAR"></center>

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