<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
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
        <nav class="main-nav">
            <ul>
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

