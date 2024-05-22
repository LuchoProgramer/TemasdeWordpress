
<section id="Ubicación" style="text-align: center; background-color: #333; color: white; padding: 20px;">
    <h1>Ubicación</h1>

    <!-- Contenedor del mapa al 80% del ancho de la pantalla con sombra paralela -->
    <div id="map-container" style="display: inline-block; width: 80%; margin-bottom: 20px; box-shadow: 0px 0px 60px rgba(255, 255, 255, 0.4);">
        <!-- Aquí se incrusta el iframe proporcionado -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249.36203251509923!2d-78.4960920058312!3d-0.20604971205576325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sec!4v1716007330656!5m2!1ses-419!2sec" width="100%" height="380" style="border:0;"></iframe>
    </div>

    <!-- Llamado a la acción para indicar cómo llegar -->
    <div>
        <button id="directionsButton" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
            Cómo llegar
        </button>
    </div>
    <style>
        /* Media query para pantallas de 550px */
@media (max-width: 550px) {
    #map-container {
        width: 100%; /* Hacer que el mapa ocupe todo el ancho disponible */
        margin-bottom: 10px; /* Reducir el espacio inferior del mapa */
        box-shadow: none; /* Eliminar la sombra en pantallas pequeñas */
    }

    #directionsButton {
        font-size: 14px; /* Reducir el tamaño del botón en pantallas pequeñas */
    }
}

    </style>