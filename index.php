 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Login</title>
</head>
<body>
    <img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
        <div class="login-content">    
        <form method="post" action="">
            <img src="img/avatar.svg">
            <h1 class="title">Inicia Sección</h1>
            <?php
            include ("conexion.php");
            include ("controlador.php");
            ?>
                <div class="input-div one">
                    <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
                   <div class="div">
                     <h5>Usuario</h5>
                     <input type="text" name="usuario" class="input" id="usuario">
                   </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="password" class="input" id="input">
                    </div>
                </div>  
                <input name="btningresar" class="btn" type="submit" value="Iniciar Sesion">
            </form>
        </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>