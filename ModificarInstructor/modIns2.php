<!doctype html>
<html lang="en-US">

<head>
    meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>NUEVOS-DATOS-INSTRUCTOR</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>ACTUALIZAR DATOS DE INSTRUCTOR</h1>

        <form action="modIns3.php" method="post">
            <div class="col-1">
                <label>
                   <?php

                    $conexion=mysqli_connect("localhost","root","","ejercito") or
                        die("Problemas con la conexión");

                    $instructor=mysqli_query($conexion,"select * from instructor
                        where nombre='$_REQUEST[nombre]'") or
                        die("Problemas en el select:".mysqli_error($conexion));
                    if ($reg=mysqli_fetch_array($instructor))
                    {
                    ?>
                    Ingrese nuevo telefono:
                    <input type="text" name="telefononuevo" value="<?php echo $reg['telefono'] ?>">
                    <br>
                    <input type="hidden" name="telefonoviejo" value="<?php echo $reg['telefono'] ?>">
                    <br>
                    Ingrese nueva estatura:
                    <input type="text" name="estaturanueva" value="<?php echo $reg['estatura'] ?>">
                    <br>
                    <input type="hidden" name="estaturavieja" value="<?php echo $reg['estatura'] ?>">
                    <br>
                    Ingrese nuevo peso
                    <input type="text" name="pesonuevo" value="<?php echo $reg['peso'] ?>">
                    <br>
                    <input type="hidden" name="pesoviejo" value="<?php echo $reg['peso'] ?>">
                    <br>
                    Ingrese nuevo grado
                     <select tabindex="4" name="grado">
                        <?php
                        $conexion=mysqli_connect("localhost","root","","ejercito") or
                            die("Problemas con la conexión");

                        $gradoins=mysqli_query($conexion,"select gradoins from gradoins") or
                            die("Problemas en el select:".mysqli_error($conexion));
                        while ($reg=mysqli_fetch_array($gradoins))
                        {
                            echo "<option value=\"$reg[gradoins]\">$reg[gradoins]</option>";
                        }
                        ?>
                    </select>
                    
                   
                     <?php
                    }
                    else
                        echo '<script type="text/javascript">
    alert("No existe instructor con ese nombre");
    window.location.href="modIns.php";
    </script>';
                    ?>
                </label>
            </div>

            <center> <input class="botonn" type="submit" value="Modificar"> </center>
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
