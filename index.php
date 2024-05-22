<?php get_header(); ?>

<body>

    <header>
        <!-- Contenido del encabezado -->
    </header>

    <main>
        <!-- Contenido principal de la página -->
        <section id="about">
            <!-- Contenido de la sección "Acerca de nosotros" -->
            <?php get_template_part('about'); ?> <!-- Incluye el contenido de la sección "Acerca de nosotros" si lo has separado en un archivo -->
        </section>
        <!-- Contenido principal de la página -->
        <section id="Sobrenosotros">
            <!-- Contenido de la sección "Acerca de nosotros" -->
            <?php get_template_part('Sobrenosotros'); ?> <!-- Incluye el contenido de la sección "Acerca de nosotros" si lo has separado en un archivo -->
        </section>

        <section id="services">
            <!-- Contenido de la sección "Servicios" -->
            <?php get_template_part('services'); ?> <!-- Incluye el contenido de la sección "Servicios" si lo has separado en un archivo -->
        </section>

        <section id="location">
            <!-- Contenido de la sección "Ubicación" -->
            <?php get_template_part('location'); ?> <!-- Incluye el contenido de la sección "Ubicación" si lo has separado en un archivo -->
        </section>

        <section id="contact">
            <!-- Contenido de la sección "Contacto" -->
            <?php get_template_part('contact'); ?> <!-- Incluye el contenido de la sección "Contacto" si lo has separado en un archivo -->
        </section>
    </main>

    <footer>
        <!-- Contenido del pie de página -->
    </footer>

</body>

<?php get_footer(); ?>

