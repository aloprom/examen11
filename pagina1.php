<?php
    error_reporting(0);
    $credencial = $_GET['error1'];
    $tamClave = $_GET['error2'];
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>
		<meta charset = "UTF-8">
                <link href="estilos.css" rel="stylesheet" type="text/css">
	</head>
	<body>	
		<?php
                
                    if(isset($credencial)){

                        if ($credencial=='true'){
                        
                            echo "<p class=aviso>Credenciales no válidas</p>";
                            
                        }

                    }
                    
                    
                    if(isset($tamClave)){

                        if ($tamClave=='true'){

                            echo "<p class=aviso>La clave debe tener entre 5 y 15 caracteres</p>";

                        }

                    }
                   

                    
                
		?>
            
		<form action = 'pagina2.php' method = "POST">
			<label for = "usuario">Usuario</label> 
			<input value = "<?php ?>"
			id = "usuario" name = "usuario" type = "text">		
			<label for = "clave">Clave</label> 
			<input id = "clave" name = "clave" type = "password">					
			<input type = "submit">
		</form>
	</body>
</html>
