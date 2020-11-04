
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>SELECCIONE-SOLDADO</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>REGISTRO DE SOLDADOS</h1>

        <form action="../ModificarSoldado/modificarSoldado1.php" method="post">
            
<div class="col-1">
    <label>
        
        Ingrese el nombre del Soldado:
        <input type="text" name="nombre"><br>
       
        
            
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