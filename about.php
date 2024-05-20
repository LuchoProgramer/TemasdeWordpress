<?php
/*
 * Template Name: About Page
 * Description: A custom template for the About page.
 */

get_header();
?>

<section id="about">
    <div class="content">
        <div class="carousel-container">
            <div class="carousel">
                <div class="slide active"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Dr. Julio Sarango Ecuavisa.png" alt="Descripción de la imagen 1">
                </div>
                <div class="slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Dr. Julio Sarango Derecho penal.png" alt="Descripción de la imagen 2">
                </div>
                <div class="slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Dr. Julio Sarango entrevista medios televisivos.png" alt="Descripción de la imagen 3">
                </div>
                <!-- Agrega más imágenes según sea necesario -->
            </div>
            <div class="text">
                <h1>Dr. Julio Sarango</h1>
                <p>Defendiendo tus derechos, protegiendo tu futuro.</p>
            </div>
        </div>
    </div>
</section>

<style>
    .content {
        display: flex;
        justify-content: center; /* Alinea el contenido horizontalmente */
        background-color: #f0f0f0; /* Color de fondo */
        width: 80%; /* Ancho del 80% de la pantalla */
        margin: 0 auto; /* Centra el contenido horizontalmente */
        padding: 20px; /* Agrega espacio interno */
    }

    .carousel-container {
        display: flex;
        flex-direction: column; /* Organiza los elementos en columna */
        align-items: center; /* Alinea los elementos al centro horizontalmente */
    }

    /* Asegúrate de que el carrusel tenga un ancho máximo para que no se desborde */
    .carousel {
        max-width: 100%;
    }

    /* Asegúrate de que las imágenes del carrusel se ajusten al tamaño máximo del carrusel */
    .carousel img {
        max-width: 100%;
        height: auto;
    }

    .text {
        text-align: center; /* Centra el texto */
        margin-top: 20px; /* Agrega espacio entre el carrusel y el texto */
    }
</style>

<?php get_footer(); ?>
