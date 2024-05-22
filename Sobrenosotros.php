<?php get_header(); ?>

<section id="Sobrenosotros" class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="texto">
                    <h2 class="mb-4">Sobre Nosotros</h2>
                    <p class="mb-4">Bienvenido al Consultorio Jurídico del Dr. Julio Sarango, un destacado abogado especializado en derecho penal con más de dos décadas de experiencia en Ecuador. Con nuestras oficinas ubicadas en la vibrante ciudad de Quito, ofrecemos servicios legales excepcionales que trascienden fronteras, extendiendo nuestra asistencia a lo largo y ancho del país.</p>
                    <p class="mb-4">El Dr. Sarango personifica la excelencia y la dedicación en cada caso que aborda. Su profundo conocimiento del sistema legal ecuatoriano, combinado con una pasión inquebrantable por la justicia, lo distingue como un referente en el campo del derecho penal.</p>
                    <p class="mb-4">En nuestro consultorio, no solo nos comprometemos a proteger los derechos de nuestros clientes, sino también a salvaguardar su futuro. Cada consulta, cada caso, es tratado con la máxima seriedad y profesionalismo, asegurando siempre un enfoque personalizado y eficaz.</p>
                    <p>Confíe en el Dr. Julio Sarango y su equipo para proporcionarle la representación legal experta que merece. Su satisfacción y tranquilidad son nuestra principal prioridad.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-nosotros">
                    <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Dr, Julio Cesar Sarango Selfie.jpg" alt="Selfie del Dr. Julio Cesar Sarango" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .texto {
        padding: 0 20px;
    }

    .img-nosotros img {
        width: 100%;
        height: auto;
    }

    /* Estilos adicionales para alinear horizontalmente */
    .row {
        display: flex;
    }
    .col-md-6 {
        flex: 1; /* Para que ambos elementos tengan el mismo tamaño */
    }
    /* Media query para pantallas de 550px */
@media (max-width: 550px) {
    .texto {
        padding: 0;
    }

    .img-nosotros img {
        width: 100%;
        height: auto;
    }

    /* Eliminar estilos adicionales para alinear horizontalmente */
    .row {
        display: block;
    }
    .col-md-6 {
        flex: none; /* Restablecer el tamaño a automático */
        margin-bottom: 20px; /* Agregar espacio entre columnas */
    }
}

</style>
