<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        /* Estilos globales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center; /* Para centrar el logo */
            align-items: center;
            max-width: 80%; /* Limitando el ancho al 80% */
            margin: 0 auto; /* Centrar el contenedor en la pantalla */
            margin-bottom: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 5px 0; /* Reducir el padding en la parte superior e inferior */
            margin-bottom: 0; /* Reducir el margen inferior */
        }

        .logo {
            float: left;
        }
        .logo img {
            max-width: 150px; /* Ancho máximo del logo */
            display: block;
            margin: 0 auto; /* Centrar el logo */
            border-radius: 20%;
        }
        
        nav ul {
            list-style-type: none;
            margin: 1rem;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .abrir-menu,
        .cerrar-menu {
            display: none;
            }

        /* Estilos para el menú hamburguesa */
        @media screen and (max-width: 550px) {
            .main-nav {
                display: none;
            }

            .abrir-menu,
            .cerrar-menu {
                display: block;
                border: 0;
                font-size: 1.25rem;
                background-color: transparent;
                cursor: pointer;
            }

            .abrir-menu {
                color: #ffffff;
                margin-top: .5rem;
            }

            .cerrar-menu {  
                color: #ececec;
            }

            .main-nav.visible {
                display: block;
                position: absolute;
                top: 1.5rem;
                right: 0;
                bottom: 0;
                background-color: #1c1c1c;
                padding: 1.5rem;
                z-index: 1000;
                box-shadow: 0 0 0 100vmax rgba(0, 0, 0, .5);
            }
            .nav-list {
                display: flex;
                flex-direction: column;
                align-items: flex-end; /* Alinea los items al final */
            }

            .main-nav.visible ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .main-nav.visible ul li {
                margin-bottom: 1rem;
            }

            .main-nav.visible ul li a {
                text-decoration: none;
                color: #ececec;
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="logo">
            <!-- Logo del consultorio jurídico - Dr. Julio Sarango -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Logo - Dr Julio Sarango.png" alt="Logo del consultorio jurídico - Dr. Julio Sarango">
            </a>
        </div>
        
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>

        <nav class="main-nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a></li>
                <li><a href="#about">Sobre nosotros</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#blog">Blog o Noticias</a></li>
                <li><a href="#location">Ubicación</a></li>
                <li><a href="#contact">Contacto</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const nav = document.querySelector("#nav");
    const abrir = document.querySelector("#abrir");
    const cerrar = document.querySelector("#cerrar");

    abrir.addEventListener("click", function() {
        nav.classList.add("visible");
        // Agregar event listener a cada enlace del menú
        const enlacesMenu = document.querySelectorAll(".main-nav.visible ul li a");
        enlacesMenu.forEach(function(enlace) {
            enlace.addEventListener("click", function() {
                nav.classList.remove("visible");
            });
        });
    });

    cerrar.addEventListener("click", function() {
        nav.classList.remove("visible");
    });
});
</script>

</body>
</html>