<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $fich = $_POST['op'];
     
        echo "<CENTER>Daniel Bermeo Lectura de Ficheros</CENTER>";
        
        
        $fichero = fopen($fich,'r') or die('No encontrado');

        while(!feof($fichero)){
        
        
        
         while($ele = fgets($fichero, 4096) ){
          echo $ele; 
           echo "<BR>";
        }       
        
        }
       
        fclose($fichero);
        
               
        ?>

       
    </body>
</html>
