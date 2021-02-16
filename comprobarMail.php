<?php

    if(isset( $_POST['usuario'])) {

        $usuario =  $_POST['usuario'];

            if(compruebaUsuario($usuario)){
                echo"";
            } else{
                echo "El usuario no existe";

            }

        
    }
    function compruebaUsuario($usuario){

        $host = "localhost"; /* Host name */
        $user = "alexc"; /* User */
        $password = "21116"; /* Password */
        $dbname = "supermercado"; /* Database name */

        $con = mysqli_connect($host, $user, $password,$dbname);
       
        $query = "SELECT correo FROM `usuarios` WHERE correo='$usuario'";
         $result = mysqli_query($con,$query) or die(mysql_error());
         $encontrado = false;
         $rows = mysqli_num_rows($result);
                if($rows==1){
                    $encontrado=true;
                 }else{

                }
        return $encontrado;
    }
?>