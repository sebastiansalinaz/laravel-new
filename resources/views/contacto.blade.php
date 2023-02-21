<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="{{ asset('/img/senaa.ico') }}">
    <link rel="stylesheet" href="{{ asset ('css/main.css') }}">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <header class="header">

        <a href="#" class="logo">
            <img src="img/Logo-sena-blanco-sin-fondo.png" alt="">
            
        </a>
    
        <nav class="navbar">
            <a href="">inicio</a>
            <a href="">acerca de</a>
            <a href="">menu</a>
            <a href="">productos</a>
            <a href="">opiniones</a>
            <a href="">contacto</a>
            <a href="">Recetas</a>
        </nav>
    
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
    
        <div class="search-form">
            <input type="search" id="search-box" placeholder="que estas buscando...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    
        
    
    </header>
    <br><br><br><br><br><br><br>
        <div class="content">
    
            <h1 class="logo">Tu <span>Contacto</span></h1>
    
            <div class="contact-wrapper animated bounceInUp">
                <div class="contact-form">
                    <h3>Contact us</h3>
                    <form action="">
                        <p>
                            <label>Tu Nombre</label>
                            <input type="text" name="fullname">
                        </p>
                        <p>
                            <label>Tu Correo Electronico</label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>Tu numero de Telefono</label>
                            <input type="tel" name="phone">
                        </p>
                        <p>
                            <label>Asunto</label>
                            <input type="text" name="affair">
                        </p>
                        <p class="block">
                           <label>Escribe tu Mensaje</label> 
                            <textarea name="message" rows="3"></textarea>
                        </p>
                        <p class="block">
                            <button>
                                Enviar
                            </button>
                        </p>
                    </form>
                </div>
                <div class="contact-info">
                    <h4>Mas informacion</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Popayán - Cauca</li>
                        <li><i class="fas fa-phone"></i> (+57) 111 111 111</li>
                        <li><i class="fas fa-envelope-open-text"></i> sena@website.com</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                    <p>Senakitch.com</p>
                </div>
            </div>
            <br><br><br><br><br><br><br>
        </div>
    
        
    <section class="footer">
        <div class="share">
            <a href="https://www.facebook.com/SENA" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/SENAComunica" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/senacomunica/" class="fab fa-instagram"></a>
            <a href="https://co.linkedin.com/school/servicio-nacional-de-aprendizaje-sena-/" class="fab fa-linkedin"></a>
            <a href="https://co.pinterest.com/senacomunica/" class="fab fa-pinterest"></a>
        </div>
   
        <div class="credit">creado por <span>Senakitch</span> | Todos los derechos reservados</div>
    
    </section>
</body>
</html>