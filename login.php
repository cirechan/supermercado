<?php

    session_start();


    $_SESSION['email'] =  $_POST['email'];
    $_SESSION['contraseña'] =  $_POST['contraseña'];

            if(compruebaUsuario($_SESSION['email'], $_SESSION['contraseña'])){

               header("Location: productos.php");
            } else{

                 header ("Location: error-login.html");
            }

    
    function compruebaUsuario($usuario, $passw){

        $host = "localhost"; /* Host name */
        $user = "alexc"; /* User */
        $password = "21116"; /* Password */
        $dbname = "supermercado"; /* Database name */

        $con = mysqli_connect($host, $user, $password,$dbname);
       
        $query = "SELECT * FROM `usuarios` WHERE correo='$usuario' and contraseña='$passw';";
         $result = mysqli_query($con,$query) or die(mysqli_connect_error());
         $encontrado = false;
         $rows = mysqli_num_rows($result);
                if($rows==1){
                    $encontrado=true;
                 }else{
                
                }
        return $encontrado;
            }
?>