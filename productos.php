
<?php

session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-MARKET | Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

    <script src="./notificacion.js"></script>

    <link rel="icon" type="image/png" href="./img/logo.png" sizes="16x16">

    <link rel="icon" type="image/png" href="./img/logo.png" sizes="32x32">

    <link rel="icon" type="image/png" href="./img/logo.png" sizes="64x64">



</head>

<body onload="mostrarProductos()" >



    <nav class="navbar navbar-toggleable-md navbar-dark ">
        <button class="navbar-toggler custom-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="./img/imagotipo-blanco.png" alt="logo" height="35px"></a>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><img src="./img/productos.png" width="20px" height="20px" alt="productos"> Productos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carrito.php"><img src="./img/carrito.png" width="25px" height="25px" alt="carrito"> Carrito de la compra </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" ariaexpanded="false">
                   <img src="./img/filtro.png" width="20px" height="20px" alt="filtro">  Filtrar por Categorias 
        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color: #01A55C;">
                        <a class="dropdown-item" onclick="mostrarCongelados()" href="#"><img src="./img/congelado.png" width="20px" height="20px" alt="congelados"> Congelados</a>
                        <a class="dropdown-item" onclick="mostrarPescados()" href="#"><img src="./img/pescados.png" width="20px" height="20px" alt="pescaderia"> Pescadería</a>
                        <a class="dropdown-item" onclick="mostrarOtros()" href="#"><img src="./img/otros.png" width="20px" height="20px" alt="otros"> Otros productos</a>
                        <a class="dropdown-item" onclick="mostrarBebidas()" href="#"><img src="./img/bebidas.png" width="20px" height="20px" alt="bebidas"> Bebidas</a>
                        <a class="dropdown-item" onclick="mostrarProductos()" href="#"><img src="./img/todos.png" width="20px" height="20px" alt="todos"> Todos los productos</a>
                    </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php" ><img src="./img/logout.png" width="20px" height="20px" alt="logout"> Cerrar sesión </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid col-md-11.5" style="height: fit-content;">
        <div id="productos" class="row justify-content-center">
        </div>


        <a href="carrito.php" class="float">
            <i class="fa fa-plus my-float"><img src="./img/carrito.png" alt="" height="50px"></i>
        </a>


        <div class="toast" role="alert" aria-live="polite" aria-atomic="true" data-delay="5000" style="position: absolute; bottom:2rem; margin: 0 auto; border-radius:15px; color:#01A55C; min-width:20rem;">
            <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
                 <div class="toast-header">
                      <img src="./img/logo.png" class="rounded mr-2" alt="logo" style="height: 30px; width: 30px;">
                      <strong class="mr-auto">E-MARKET</strong>
                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                      </button>
                 </div>
                <div class="toast-body" style="font-family: 'Syne', sans-serif; ">
                     <h5> Bienvenido <?php echo $_SESSION['email']?></h5>
                </div>
            </div>
        </div>

</body>

<style>
    .custom-toggler.navbar-toggler {
        background-color: #f47320;
        border: solid 1px white;
    }
    
    body {
        background-image: url(./img/patron.jpg);
        background-color: lightgray;
        background-blend-mode: multiply;
    }
    
    .navbar {
        background-color: #01A55C;
    }
    
    .float {
        position: fixed;
        width: 100px;
        height: 70px;
        bottom: 40px;
        right: 40px;
        background-color: #01A55C;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
    }
    
    .float img {
        margin-top: 10px;
    }
    
    .my-float {
        margin-top: 22px;
    }
    
    .row .card {
        margin: 1rem;
    }
    
    .card:hover {
        cursor: pointer;
        box-shadow: 0px 2px 5px 0px #01a55ba2;
    }
    
    .card-title {
        font-family: 'Syne', sans-serif;
    }
    
    .card-text {
        font-family: 'Dosis', sans-serif;
    }
    
    .card-footer {
        background-color: transparent;
        border-color: #01A55C;
    }
    
    .card-footer h4 {
        float: left;
    }
    
    .card-footer a {
        float: right;
        background-color: transparent;
        color: #01A55C;
        border: #01A55C 2px solid;
        border-radius: 10px;
    }
    
    .card-footer a:hover {
        float: right;
        background-color: #01A55C;
        color: #fff;
        border: #01A55C 2px solid;
    }
    
    .card {
        border-radius: 20px;
    }
    
    .card img {
        margin-top: 0.75rem;
        max-height: 10rem;
        max-width: 20rem;
        object-fit: cover;
    }
</style>


<script>
    var productos = new Array(
        ["Almendra Natural", "Paquete de 200G", 2.30, "./img/productos/almendra.jpg", "otros"], ["Atun claro", "En aceite de oliva 360G", 3.90, "./img/productos/atun.jpg", "otros"], ["Lomo cerdo", "Bandeja 900G", 5.50, "./img/productos/lomo.jpg", "congelado"], ["Hamburguesa Vacuno", "Bandeja de 180G", 1.76, "./img/productos/hamburguesa.jpg", "congelado"], ["Hamburguesa Vacuno", "Paquete de 240G", 2.30, "./img/productos/hamburguesa2.jpg", "congelado"], ["Nuez Mondada Natural", "Paquete de 200G", 2.60, "./img/productos/nuez.jpg"], ["Tofu", "Tarrina de 400G", 2.00, "./img/productos/tofu.jpg", "otros"], ["Helado 3 Gustos", "Chcocolate, Vainilla, Fresa 1.5L", 2.00, "./img/productos/helado.jpg", "congelado"], ["Tarta Helada Caramelo", "Caja 1L", 4.00, "./img/productos/helado2.jpg", "congelado"], ["Agua Mineral Natural", "BRONCHALES, Botella 1L", 0.48, "./img/productos/agua.jpg", "bebida"], ["Coca Cola", "Lata 330ML", 0.75, "./img/productos/lata-cocacola.jpg", "bebida"], ["Coca Cola", "Botella 2L", 1.80, "./img/productos/botella-cocacola.jpg", "bebida"], ["Cerveza Ambar", "PACK Botellines 12 X 330ML", 6.65, "./img/productos/ambar.jpg", "bebida"], ["Zumo Naranja", "BRICK 1L", 0.61, "./img/productos/zumo.jpg", "bebida"], ["Vino Blanco", "Rueda Verdejo Botella 750ML", 2.00, "./img/productos/vino.jpg", "bebida"], ["Almeja Japonesa", "Malla 500G", 7.55, "./img/productos/almeja.jpg", "pescaderia"], ["Berberecho", "Malla 500G", 5.70, "./img/productos/berberechos.jpg", "pescaderia"], ["Cigala Descongelada", "Unidad 250G (aprox)", 4.95, "./img/productos/cigala.jpg", "pescaderia"], ["Mejillon Fresco", "Malla 500G", 1.95, "./img/productos/mejillon.jpg", "pescaderia"], ["Gamba Fresca", "Malla 500G", 8.95, "./img/productos/gambas.jpg", "pescaderia"]
    );

    function mostrarProductos() {
        eliminarProductos();

        for (var i = 0; i < productos.length; i++) {

            document.getElementById('productos').innerHTML += "<div class='card col-md-2' style='width: 20rem;'>" +
                "<img class='card-img-top w-100' src='" + productos[i][3] + "' alt='Card image cap'>" +
                "<div class='card-body'>" +
                "<h5 class='card-title'>" + productos[i][0] + "</h5>" +
                "<p class='card-text'>" + productos[i][1] +"</p></div>"  
                + "<input class='form-control' style='text-align:center; border-color:#01a55c; color:#01a55c; width: 55px; border-radius: 5px; margin: 1rem; margin-left: 72.5%; right: 0%;' type='number' value='1' min='1'; step='1'></input>"+
                "<div class='card-footer' >" +
                "<h4>" + productos[i][2] + "€</h4>" +
                "<a href='#' class='btn btn-primary'>Añadir al carrito</a></div></div>";

        }

    }

    function mostrarCongelados() {

        eliminarProductos();

        for (var i = 0; i < productos.length; i++) {

            if (productos[i][4] == "congelado") {

                document.getElementById('productos').innerHTML += "<div class='card col-md-2' style='width: 20rem;'>" +
                "<img class='card-img-top w-100' src='" + productos[i][3] + "' alt='Card image cap'>" +
                "<div class='card-body'>" +
                "<h5 class='card-title'>" + productos[i][0] + "</h5>" +
                "<p class='card-text'>" + productos[i][1] +"</p></div>"  
                + "<input class='form-control' style='text-align:center; border-color:#01a55c; color:#01a55c; width: 55px; border-radius: 5px; margin: 1rem; margin-left: 72.5%; right: 0%;' type='number' value='1' min='1'; step='1'></input>"+
                "<div class='card-footer' >" +
                "<h4>" + productos[i][2] + "€</h4>" +
                "<a href='#' class='btn btn-primary'>Añadir al carrito</a></div></div>";

            }
        }
    }

    function mostrarBebidas() {

        eliminarProductos();

        for (var i = 0; i < productos.length; i++) {

            if (productos[i][4] == "bebida") {

                document.getElementById('productos').innerHTML += "<div class='card col-md-2' style='width: 20rem;'>" +
                "<img class='card-img-top w-100' src='" + productos[i][3] + "' alt='Card image cap'>" +
                "<div class='card-body'>" +
                "<h5 class='card-title'>" + productos[i][0] + "</h5>" +
                "<p class='card-text'>" + productos[i][1] +"</p></div>"  
                + "<input class='form-control' style='text-align:center; border-color:#01a55c; color:#01a55c; width: 55px; border-radius: 5px; margin: 1rem; margin-left: 72.5%; right: 0%;' type='number' value='1' min='1'; step='1'></input>"+
                "<div class='card-footer' >" +
                "<h4>" + productos[i][2] + "€</h4>" +
                "<a href='#' class='btn btn-primary'>Añadir al carrito</a></div></div>";
            }
        }
    }

    function mostrarPescados() {

        eliminarProductos();

        for (var i = 0; i < productos.length; i++) {

            if (productos[i][4] == "pescaderia") {
                document.getElementById('productos').innerHTML += "<div class='card col-md-2' style='width: 20rem;'>" +
                "<img class='card-img-top w-100' src='" + productos[i][3] + "' alt='Card image cap'>" +
                "<div class='card-body'>" +
                "<h5 class='card-title'>" + productos[i][0] + "</h5>" +
                "<p class='card-text'>" + productos[i][1] +"</p></div>"  
                + "<input class='form-control' style='text-align:center; border-color:#01a55c; color:#01a55c; width: 55px; border-radius: 5px; margin: 1rem; margin-left: 72.5%; right: 0%;' type='number' value='1' min='1'; step='1'></input>"+
                "<div class='card-footer' >" +
                "<h4>" + productos[i][2] + "€</h4>" +
                "<a href='#' class='btn btn-primary'>Añadir al carrito</a></div></div>";
            }
        }
    }

    function mostrarOtros() {

        eliminarProductos();

        for (var i = 0; i < productos.length; i++) {

            if (productos[i][4] == "otros") {

                document.getElementById('productos').innerHTML += "<div class='card col-md-2' style='width: 20rem;'>" +
                "<img class='card-img-top w-100' src='" + productos[i][3] + "' alt='Card image cap'>" +
                "<div class='card-body'>" +
                "<h5 class='card-title'>" + productos[i][0] + "</h5>" +
                "<p class='card-text'>" + productos[i][1] +"</p></div>"  
                + "<input class='form-control' style='text-align:center; border-color:#01a55c; color:#01a55c; width: 55px; border-radius: 5px; margin: 1rem; margin-left: 72.5%; right: 0%;' type='number' value='1' min='1'; step='1'></input>"+
                "<div class='card-footer' >" +
                "<h4>" + productos[i][2] + "€</h4>" +
                "<a href='#' class='btn btn-primary'>Añadir al carrito</a></div></div>";
            }
        }
    }

    function eliminarProductos() {
        document.getElementById("productos").innerHTML = "";
    }

    $(document).ready(function(){
            $('.toast').toast('show');
        });
</script>


</html>


