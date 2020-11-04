<!doctype html>
<html lang="en-US">

<head>
    meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>NUEVOS-DATOS-SOLDADO</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>REGISTRO DE SOLDADOS</h1>

        <form  action="modificarSoldado2"method="post">   
        <?php

$conexion=mysqli_connect("localhost","root","","ejercito") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select * from soldado where nombre='$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?> 
            <div class="cold-1"><label>
        <center>Ingrese nuevo telefono:</center>
<input type="text" name="nuevotelefono" value="<?php echo $reg['telefono'] ?>">
<br>
<input type="hidden" name="telefonoviejo" value="<?php echo $reg['telefono'] ?>">
                </label></div>
             <div class="cold-1"><label>
Ingrese nuevo Peso:
<input type="text" name="nuevopeso" value="<?php echo $reg['peso'] ?>">
<br>
<input type="hidden" name="pesoviejo" value="<?php echo $reg['peso'] ?>">
                    </label></div>
                  <div class="cold-1"><label>
Ingrese nuevo Estatura:
<input type="text" name="nuevoestatura" value="<?php echo $reg['estatura'] ?>">
<br>
<input type="hidden" name="estaturaviejo" value="<?php echo $reg['estatura'] ?>">
                    </label></div>
                       <div class="cold-1"><label>
    Ingrese nuevo Grado:
    <select tabindex="4" name="nuevogrado">
            <?php
                $conexion=mysqli_connect("localhost","root","","ejercito") or
                    die("Problemas con la conexión");
                    $registros=mysqli_query($conexion,"select grado from grado") or
    die("Problemas en el select:".mysqli_error($conexion));
while ($reg=mysqli_fetch_array($registros))
{
  echo "<option value=\"$reg[grado]\">$reg[grado]</option>";
}
?>
        </select>
                </label></div>

<?php
}
else{
  echo'<script type="text/javascript">
    alert("No existe un soldado con ese nombre");
    window.location.href="modificarSoldado0.php";
    </script>';}
?> 
        
        
        
      
    

<br>
            <center> <input class="botonn" type="submit" value="ACTUALIZAR DATOS" ></center>

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