<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>REGISTRO-ESCUADRON</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
    <div id="wrapper">

        <h1>REGISTRO DE ESCUADRONES</h1>

        <form  method="post">
            
<div class="col-1">
    <label>
        <center><h1>DATOS DEL SOLDADO</h1></center>
        
            <?php
$conexion=mysqli_connect("localhost","root","","ejercito") or
    die("Problemas con la conexión");
    
		$sql="SELECT nombre, apellido from soldado where escuadron='$_REQUEST[escuadron]'";
		$result=mysqli_query($conexion,$sql);
         
		  while($reg=mysqli_fetch_array($result)){
      
		echo $reg['nombre']." ";
        echo $reg[''.'apellido']."<br>";
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