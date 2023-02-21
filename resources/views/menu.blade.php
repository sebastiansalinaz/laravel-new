<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../senakitch/res/senaa.ico">
    <br><br><br><br>
    
    <title>Menu</title>

</head>
<body>

    
<header class="header">

    <a href="#" class="logo">
        <img src="res/sena.png" alt="">
        
    </a>

    <nav class="navbar">
            <a href="home">inicio</a>
            <a href="{{route('acercade')}}">acerca de</a>
            <a href="{{route('menu')}}">menu</a>
            <a href="{{route('productos')}}">productos</a>
            <a href="{{route('opiniones')}}">opiniones</a>
            <a href="{{route('contacto')}}">contacto</a>
            <a href="{{route('recetas')}}">Recetas</a>
        </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="Que estas buscando...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    

</header><br>



<br>




<section class="menu" id="menu">

<h1 class="heading"> nuestro <span>menu</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/sirloin.png" alt="">
        <h3>sirloin con salsa de chiplote</h3>
        <div class="price">$14,900 <span>21,000</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    <div class="box">
        <img src="images/tomate..png" alt="">
        <h3>tomate acordeon</h3>
        <div class="price">$16,300 <span>17,300</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    <div class="box">
        <img src="images/menu-3.png" alt="">
        <h3>cafe soluble de colombia</h3>
        <div class="price">$8,000 <span>13,900</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    <div class="box">
        <img src="images/rollo.png" alt="">
        <h3>rollo de carne relleno de jamon y queso</h3>
        <div class="price">$18,000 <span>20,900</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    <div class="box">
        <img src="images/pastel.png" alt="">
        <h3>Pastel con buttercream de chocolate</h3>
        <div class="price">$32,000 <span>46,100</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    <div class="box">
        <img src="images/hamburguesa.png" alt="">
        <h3>Hamburguesa</h3>
        <div class="price">$15,900 <span>21,000</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    <div class="box">
        <img src="images/donuts.png" alt="">
        <h3>Donuts</h3>
        <div class="price">$5,100 <span>5,900</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    <div class="box">
        <img src="images/hotdog.png" alt="">
        <h3>Hots Dogs</h3>
        <div class="price">$13,000 <span>15,400</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    <div class="box">
        <img src="images/sandwich.png" alt="">
        <h3>sandwich Especial</h3>
        <div class="price">$7,900 <span>8,800</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    <div class="box">
        <img src="images/empa.png" alt="">
        <h3>Empanadas de pipian</h3>
        <div class="price">$1,600 <span>1,700</span></div>
        <a href="#" class="btn">añadir al carrito</a>
    </div>

    

</div>

</section><br>
<br>


    
<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>


    <div class="credit">creado por <span>Senakitch</span> | Todos los derechos reservados</div>

</section>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>