<?php


 $usuario = $_POST['usuario'];
 $clave = $_POST["clave"];

   
  if( ((strlen($clave)) > 4 && (strlen($clave)) < 16) ){
       
        echo "Tamaño de clave correcto <br>";
        
        if( ($_POST['usuario'] == "usuario11") && ($_POST['clave'] == "password11") ){
            
            echo "Usuario identificado como: ". $usuario ;
            
        }else{
            
            header("Location: https://localhost/PPS/ProyectoAlvaro/examen11/pagina1.php");
        }

   }else{
   
       echo "La clave debe tener entre 5 y 15 caracteres";   
     
   }
   
?>
