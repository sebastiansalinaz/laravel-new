<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senakitch</title>
    <link rel="icon" href="../senakitch/res/senaa.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

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
    
    <section class="review" id="review">

        <br><br><br><br>
        <br><br><br><br>

        <h1 class="heading"> su <span>opinion</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Que meloooo, ojala pudieran haber mas paginas asi tan buenas, ojala las demas paginas puedan tomar ejemplo de paginas asi como estas.</p>
                <img src="images/anuel.jpg" class="user" alt="">
                <h3>la dobleAA</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
    
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>que buena web, puedo encontrar todo lo que busco tanto en recetas como en productos pero creo que le falta algo, aun pueden mejorar sigan asi que bendicion.</p>
                <img src="images/descarga.jpg" class="user" alt="">
                <h3>juan cruz</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
                <img src="images/fuicioso.jpg" class="user" alt="">
                <h3>fabian alberto</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>         
    
        </div>
    <br>
    </section><section class="review" id="review">
    
        <div class="box-container">
    
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Que meloooo, ojala pudieran haber mas paginas asi tan buenas, ojala las demas paginas puedan tomar ejemplo de paginas asi como estas.</p>
                <img src="images/westcol.jpeg" class="user" alt="">
                <h3>El West</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
    
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>que buena web, puedo encontrar todo lo que busco tanto en recetas como en productos pero creo que le falta algo, aun pueden mejorar sigan asi que bendicion.</p>
                <img src="images/jordi.jpeg" class="user" alt="">
                <h3>Jorge</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>esta muy buena la pagina trae muy buenas cosas pero le faltan algunos cambios y optimizarla pero de resto todo bello todo bonito.</p>
                <img src="images/yina.jpeg" class="user" alt="">
                <h3>Yina</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            
    
        </div>
    <br>
    </section>

<br><br><br><br><br><br><br>


<br>

<br><br><br><br><br><br><br><br><br><br><br>
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