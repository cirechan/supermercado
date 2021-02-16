
<?php



    $usuario =  $_POST['email'];
    $passw =  $_POST['contraseña'];


    $host = "localhost"; /* Host name */
    $user = "alexc"; /* User */
    $password = "21116"; /* Password */
    $dbname = "supermercado"; /* Database name */

    $con = mysqli_connect($host, $user, $password,$dbname);

    $sql = "INSERT INTO usuarios VALUES ('$usuario', '$passw')";
        if (mysqli_query($con, $sql)) {
            header("Location: login.html");
        } else {
            header ("Location: error-login.html");
        }
        mysqli_close($con);
        
?>