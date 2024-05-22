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
                    <div class="image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Dr. Julio  Sarango Ecuavisa.png" alt="Descripción de la imagen 1">
                    </div>
                </div>
                <div class="slide">
                    <div class="image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Dr. Julio Sarango Derecho penal.png" alt="Descripción de la imagen 2">
                    </div>
                </div>
                <div class="slide">
                    <div class="image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Dr. Julio Sarango entrevista medios televisivos.png" alt="Descripción de la imagen 3">
                    </div>
                </div>
                <!-- Agrega más imágenes según sea necesario -->
            </div>
            <div class="text">
                <h1 style="text-align: center;">Dr. Julio Sarango</h1>
                <p style="text-align: center;">Defendiendo tus derechos, protegiendo tu futuro.</p>
            </div>
            <!-- Flechas de navegación -->
            <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
            <a class="next" onclick="moveSlide(1)">&#10095;</a>
        </div>
    </div>
</section>


<style>
    /* Estilos para el carrusel */

    .carousel-container {
        width: 80%; /* Ajusta al 80% de la pantalla */
        max-width: 600px; /* Ancho máximo para el carrusel */
        margin: 5px auto 0; /* Margen de 5px arriba, centrado horizontalmente */
        overflow: hidden; /* Evita el desbordamiento */
        position: relative; /* Establece el contexto para los slides */
    }

    .carousel {
        display: flex; /* Muestra los slides en línea */
        transition: transform 0.5s ease; /* Transición suave entre slides */
    }

    .slide {
        flex: 0 0 auto; /* No crece, no se reduce, ancho automático */
        width: 100%; /* Ancho del slide */
    }

    .image-wrapper {
        width: 100%; /* Ajusta la imagen al 100% del contenedor */
        overflow: hidden; /* Evita que la imagen se desborde */
    }

    .image-wrapper img {
        width: 100%; /* Ajusta la imagen al 100% del contenedor */
        height: auto; /* Altura automática para mantener la proporción */
    }

    .active {
        opacity: 1; /* Hace visible el slide activo */
    }

    /* Estilos para las flechas de navegación */
    .prev, .next {
        position: absolute; /* Posiciona las flechas de navegación */
        top: 50%; /* Alinea verticalmente al centro */
        transform: translateY(-50%); /* Ajusta la posición vertical */
        cursor: pointer; /* Cambia el cursor al pasar sobre las flechas */
        padding: 16px; /* Agrega espaciado interno */
        background-color: rgba(0, 0, 0, 0.5); /* Color de fondo semi-transparente */
        color: white; /* Color del texto */
        border: none; /* Sin borde */
        z-index: 1; /* Asegura que las flechas estén sobre las imágenes */
    }

    .prev {
        left: 0; /* Posiciona la flecha izquierda a la izquierda */
    }

    .next {
        right: 0; /* Posiciona la flecha derecha a la derecha */
    }

</style>

<script>
    // Función para desplazar los slides
    let slideIndex = 1;

    function moveSlide(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        let slides = document.getElementsByClassName("slide");

        if (n > slides.length) {
            slideIndex = 1;
        }

        if (n < 1) {
            slideIndex = slides.length;
        }

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex - 1].style.display = "block";
    }

    // Mostrar el primer slide al cargar la página
    showSlides(slideIndex);
</script>

