<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-MARKET | Carrito</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="./img/logo.png" sizes="16x16">

    <link rel="icon" type="image/png" href="./img/logo.png" sizes="32x32">

    <link rel="icon" type="image/png" href="./img/logo.png" sizes="64x64">

</head>

<body onload="carrito()">


    <aside id="left">
        <nav class="nav flex-column">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./img/imagotipo-blanco.png" alt="" height="35px"></a>
                <a class="nav-link active" href="#">Carrito de la compra <img src="./img/carrito.png" width="25px" height="25px" alt="carrito"></a>
                <a class="nav-link" href="productos.php">Productos <img src="./img/productos.png" width="20px" height="20px" alt="productos"> </a>
                <a class="nav-link" href="logout.php" >Cerrar sesión <img src="./img/logout.png" width="20px" height="20px" alt="logout"></a>
            </div>
        </nav>
    </aside>

    <div id="content">

        <div class="container-fluid col-md-11.5" style="height: fit-content;">
            <div id="productos" class="row justify-content-center">

                <div class="card" style="width: 100%; min-height: 50rem; ">
                    <h1 class="card-title">CARRITO DE LA COMPRA</h1>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col" style="text-align: right;">Cantidad</th>
                                    <th scope="col" style="text-align: right;">Precio</th>
                                </tr>
                            </thead>
                            <tbody id="cont-tabla">

                            </tbody>
                        </table>
                    </div>
                    <div class="linea"></div>
                    <div id="total" class="card-footer">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title" style="float: left;">PRECIO TOTAL</h1>
                                <h1 id="precio" class="card-subtitle" style="float: right;"></h1>
                                <a href='#' id="btn-fin" class='btn btn-primary'><b> FINALIZAR PEDIDO</b></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    aside {
        float: left;
    }
    
    #content {
        margin-left: 16rem;
        padding: 2rem
    }
    
    #btn-fin {
        background-color: transparent;
        color: #01A55C;
        border: #01A55C 2px solid;
        border-radius: 10px;
        margin-bottom: 0px;
        bottom: 0px;
        width: 100%;
    }
    
    #total {
        border-top: none;
    }
    
    nav .container {
        margin-top: 50%;
        text-align: center;
    }
    
    .active {
        font-weight: bold;
    }
    
    nav a {
        margin-top: 4rem;
        color: white;
        padding: 0.5rem;
    }
    nav a:nth-last-child(1):hover,
    nav a:nth-last-child(2):hover,
    nav a:nth-child(2):hover {
        color: white;
        background-color: none;
        border-radius: 5px;
        box-shadow: 0px 2px 5px 0px #FFF
    }
    

    
    .linea {
        background: rgb(255, 255, 255);
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(1, 165, 92, 1) 50%, rgba(255, 255, 255, 1) 100%);
        height: 1px;
    }
    
    #total .card {
        border: none;
    }
    
    #btn-fin:hover {
        float: right;
        background-color: #01A55C;
        color: #fff;
        border: #01A55C 2px solid;
    }
    
    body {
        background-image: url(./img/patron.jpg);
        background-color: lightgray;
        background-blend-mode: multiply;
    }
    
    nav {
        height: 62rem;
        position: fixed;
        background-color: #01a55b;
        color: #FFF;
    }
    
    .card:hover {
        box-shadow: 0px 2px 5px 0px #01a55ba2;
    }
    
    .card h1:first {
        font-family: 'Dosis', sans-serif;
    }
    
    .card h1 {
        margin-top: 2rem;
        color: #01A55C;
        text-align: center;
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
    var producto = new Array("Capitan Morgan", "Botella 0.75L", 5, 11.25);

    function carrito() {
        var precioT = 0;

        for (var i = 1; i < 10; i++) {


            document.getElementById("cont-tabla").innerHTML += ("<tr><td>" + i + "</td><td>" + producto[0] + "</td>" +
                "<td>" + producto[1] + "</td> <td style='text-align: right;'>" + i + "</td> <td style='text-align: right;'>" + producto[3] + "</td></tr>");
            precioT += i * producto[3];
        }

        document.getElementById("precio").innerHTML = precioT + " €";
    }


    function eliminarProductos() {
        document.getElementById("productos").innerHTML = "";
    }
</script>


</html>
