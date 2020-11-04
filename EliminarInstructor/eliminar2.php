<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>INSTRUCTOR-ELIMINADO</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>ELIMINAR REGISTRO DE INSTRUCTOR</h1>

        <form action="eliminar2.php" method="post">
            <div class="col-2">
                <label>
                    <?php
                    $conexion=mysqli_connect("localhost","root","","ejercito") or
                        die("Problemas con la conexión");

                    $instructor=mysqli_query($conexion, "select * from instructor
                        where nombre='$_REQUEST[nombre]'") or
                        die("Problemas en el select:".mysqli_error($conexion));
                    if ($reg=mysqli_fetch_array($instructor))
                    {
        mysqli_query($conexion,"delete from instructor where nombre='$_REQUEST[nombre]'") or
            die("Problemas en el select:".mysqli_error($conexion));
            echo'<script type="text/javascript">
    alert("Se elimino Correctamente");
    window.location.href="eliminar.php";
    </script>';
                    }
                    else
                    {
                        echo'<script type="text/javascript">
    alert("No existe un instructor con ese nombre");
    window.location.href="eliminar.php";
    </script>';
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
