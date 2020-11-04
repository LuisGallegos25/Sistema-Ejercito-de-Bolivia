<!doctype html>
<html lang="en-US">

<head>
    meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>NUEVO-INSTRUCTOR</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>REGISTRO DE INSTRUCTORES</h1>

        <form action="insertar.php" method="post">
            <div class="col-2">
                <label>
                    Nombres
                    <input placeholder="Nombres" id="name" name="nombres" tabindex="1">
                </label>
            </div>
            <div class="col-2">
                <label>
                    Apellidos
                    <input placeholder="Apellidos" id="company" name="apellidos" tabindex="2">
                </label>
            </div>
            <div class="col-2">
                <label>
                    Fecha de Nacimiento
                    <input placeholder="AA/MM/DD" id="company" name="fechaN" tabindex="2">
                </label>
            </div>

            <div class="col-2">
                <label>
                    Telefono
                    <input placeholder="Numero de contacto" id="phone" name="phone" tabindex="3">
                </label>
            </div>
            <div class="col-2">
                <label>
                    Tipo de sangre
                    <select tabindex="5" name="sangre">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </label>
            </div>
            <div class="col-2">
                <label>
                    Sexo
                    <select tabindex="5" name="sexo">
                        <option>Hombre</option>
                        <option>Mujer</option>
                    </select>
                </label>
            </div>

            <div class="col-2">
                <label>
                    Estatura
                    <input placeholder="Estatura en centimetros" id="skills" name="estatura" tabindex="6">
                </label>
            </div>
            <div class="col-2">
                <label>
                    Peso
                    <input placeholder="En Kilogramos" id="experience" name="peso" tabindex="7">
                </label>
            </div>
            <div class="col-2">
                <label>
                    Grado
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
                </label>
            </div>
             <div class="col-2">
                <label>
                   Arma
                    <select tabindex="4" name="arma">
                        <?php
                        $conexion=mysqli_connect("localhost","root","","ejercito") or
                            die("Problemas con la conexión");

                        $arma=mysqli_query($conexion,"select arma from arma") or
                            die("Problemas en el select:".mysqli_error($conexion));
                        while ($reg=mysqli_fetch_array($arma))
                        {
                            echo "<option value=\"$reg[arma]\">$reg[arma]</option>";
                        }
                        ?>
                    </select>
                </label>
            </div>


            <center><input class="botonn" type="submit" value="Insertar"></center>
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
