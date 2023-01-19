<?php


 $usuario = $_POST['usuario'];
 $clave = $_POST["clave"];
 $tamClave = strlen($clave);

  if( ($tamClave > 4) && ($tamClave < 16) ){
       
        echo "Tamaño de clave correcto <br>";
        
        if( ($usuario == "usuario11") && ($clave == "password11") ){
            
            echo "Usuario identificado como: ". $usuario ;
            
        }else{
            
            header("Location: https://localhost/PPS/ProyectoAlvaro/examen11/pagina1.php");
        }

   }else{
         
       header("Location: https://localhost/PPS/ProyectoAlvaro/examen11/pagina1.php");
     
   }
   
?>
