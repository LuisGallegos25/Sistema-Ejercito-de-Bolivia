<html>

<head>
    meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>INSTRUCTOR-ACTUALIZADO</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>ACTUALIZAR DATOS DE INSTRUCTOR</h1>

        <form action="#" method="post">
            <div class="col-1">
                <label>
                    <?php
                    $conexion=mysqli_connect("localhost","root","","ejercito") or
                        die("Problemas con la conexión");

                    mysqli_query($conexion, "update instructor
                          set telefono='$_REQUEST[telefononuevo]', estatura='$_REQUEST[estaturanueva]', peso='$_REQUEST[pesonuevo]', grado='$_REQUEST[grado]' where telefono='$_REQUEST[telefonoviejo]'") or
                        die("Problemas en el select:".mysqli_error($conexion));
                   echo'<script type="text/javascript">
                        alert("Se modifico con exito");
                        window.location.href="modIns.php";
                        </script>';
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
