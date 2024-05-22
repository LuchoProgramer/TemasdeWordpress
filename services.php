<section id="services">
    <h2>Servicios</h2>
    <div class="grid-container">
        <div class="grid-row">
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Asesoramiento legal.jpeg" alt="Asesoramiento legal">
                <p>Asesoramiento legal</p>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Representacion en Juicios.svg" alt="Representación en juicios">
                <p>Representación en juicios</p>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Consultoria en Temas legales.jpeg" alt="Consultoría en temas legales">
                <p>Consultoría en temas legales</p>
            </div>
        </div>
        <div class="grid-row">
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Derecho Laboral.svg" alt="Derecho laboral">
                <p>Derecho laboral</p>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Derecho tributario.jpeg" alt="Derecho tributario">
                <p>Derecho tributario</p>
            </div>
            <div class="grid-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagenes/Resolución de conflictos de propiedad y bienes raíces.jpeg" alt="Resolución de conflictos de propiedad y bienes raíces">
                <p>Resolución de conflictos de propiedad y bienes raíces</p>
            </div>
        </div>
    </div>
</section>

<style>
    #services {
        max-width: 80%;
        margin: 0 auto;
        text-align: center; /* Centra el título */
    }

    .grid-container {
        display: flex;
        flex-direction: column;
    }

    .grid-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px; /* Espacio entre filas */
    }

    .grid-item {
        flex-basis: calc(33.33% - 10px);
        background-color: #f2f2f2;
        padding: 20px;
        text-align: center; /* Centra el contenido */
    }

    .grid-item img {
        max-width: 50%;
        height: auto;
        display: block;
        margin: 0 auto;
        padding: 10px; /* Espacio alrededor de cada imagen */
    }

    /* Estilo para los elementos de la segunda fila */
    .grid-row:last-child .grid-item {
        background-color: #eaeaea; /* Cambia el color de fondo para diferenciar la segunda fila */
    }

    /* Media query para pantallas de 550px */
@media (max-width: 550px) {
    .grid-row {
        flex-direction: column; /* Cambiar a una disposición de columna para pantallas pequeñas */
        margin-bottom: 10px; /* Reducir el espacio entre filas */
    }

    .grid-item {
        flex-basis: 100%; /* Hacer que los elementos ocupen todo el ancho en pantallas pequeñas */
        margin-bottom: 10px; /* Agregar espacio entre elementos */
    }

    .grid-item img {
        max-width: 100%; /* Asegurar que las imágenes se ajusten al ancho del contenedor */
        padding: 0; /* Eliminar el espacio alrededor de las imágenes */
    }
}

</style>