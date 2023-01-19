
<html><link href="estilos.css" rel="stylesheet" type="text/css"></html>

<?php


 $usuario = $_POST['usuario'];
 $clave = $_POST["clave"];
 $tamClave = strlen($clave);

  if( ($tamClave > 4) && ($tamClave < 16) ){

        if( ($usuario == "usuario11") && ($clave == "password11") ){
            
            echo "Usuario identificado como: ". $usuario . "<br>";
            echo "Password: " . $clave ;
            
        }else{
            
            header("Location: https://localhost/PPS/ProyectoAlvaro/examen11/pagina1.php?error1=true");
        }

   }else{
         
        header("Location: https://localhost/PPS/ProyectoAlvaro/examen11/pagina1.php?error2=true");
     
   }
   
?>
