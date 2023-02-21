<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="../senakitch/res/senaa.ico">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    
    <title>Document</title>
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

    

</header>

<br><br>

<section class="blogs" id="blogs">

<br><br><br><br>
<br><br><br><br>

    <h1 class="heading"> nuestras <span>recetas </span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog-1.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">cafe delicioso y refrescante</a>
                <span>by  Daniel García / 21 mayo, 2022</span>
                <p>Nada más delicioso que disfrutar de una deliciosa tacita de café a cualquier hora, puedes estar en la oficina o en la casa.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/empandas.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">empanadas de queso</a>
                <span>by Ferran Adriá Acosta / 09 agosto, 2022</span>
                <p>Un clásico de la cocina tradicional colombiana, empanadas de queso. Es una receta super fácil, rápida y quedan increíbles y muy jugosas!.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/raspao.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">cholado del valle del cauca</a>
                <span>by Joan Roca / 13 septiembre, 2022</span>
                <p>El Cholado es un cruce entre un postre helado, cóctel de frutas, y una bebida, y es popular en la región de El Valle de Colombia. </p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/arroz.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Arroz con pollo</a>
                <span>by  Daniel García / 21 mayo, 2022</span>
                <p>El arroz con pollo es un plato típico de América Latina y España ​ con variaciones regionales según el país. Consiste en arroz cocinado con pollo, en presas o desmechado, verduras, y sazonado con especias.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/tamal.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Tamal de pipian</a>
                <span>by Ferran Adriá Acosta / 09 agosto, 2022</span>
                <p> Los tamales de pipián son los más pequeños en la diversidad de tamales colombianos. Estos se rellenan con una mezcla de papa, maní y cerdo.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/buñuelo.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Buñuelos colombianos</a>
                <span>by Joan Roca / 13 septiembre, 2022</span>
                <p>Buñuelos colombianos Estas bolitas hechas con queso y harina de maíz, son probablemente uno de los pasabocas favoritos de mi paisanos.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

    </div>
    <br><br><br>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/bandeja.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Bandeja Paisa</a>
                <span>by  Daniel García / 21 mayo, 2022</span>
                <p>La bandeja paisa es uno de los platos más representativos de Colombia y la insignia de la gastronomía antioqueña, y es propio de esta región, Antioquia.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ajiaco.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Ajiaco</a>
                <span>by Ferran Adriá Acosta / 09 agosto, 2022</span>
                <p>El ajiaco es el plato típico de Colombia específicamente de la ciudad de Santa Fe de Bogotá, de ahí su “apellido”. Consiste en una sopa elaborada con las papas que se cultivan en sus tierras.</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arepa.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Arepa rellena de carne y pollo</a>
                <span>by Joan Roca / 13 septiembre, 2022</span>
                <p>La arepa es un alimento de origen precolombino, hecho a base de masa de maíz seco molido o de harina de maíz precocida, de forma circular y aplanada. Es conocida bajo ese nombre en Bolivia, Colombia y Venezuela.​​​​</p>
                <a href="#" class="btn">leer mas</a>
            </div>
        </div>

    </div>

</section>
<br><br><br>

<br>

<br>
<br>
<br>
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