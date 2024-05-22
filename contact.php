<section id="contact">
    <div class="contact-left">
        <h2>Tienes dudas?</h2>
        <p>Contactanos si necesitas ayuda o tienes alguna pregunta.</p>
        <div class="contact-image">
            <img src="<?php echo get_template_directory_uri(); ?>/tu_imagen.jpg" alt="Imagen de contacto">
        </div>
    </div>
    <div class="contact-right">
        <div class="contact-form">
            <h2>Contacto</h2>
            <p>Ponte en contacto con nosotros para programar una consulta.</p>
            <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input type="hidden" name="action" value="custom_contact_form">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <!-- Botones de contacto adicionales -->
        <div class="contact-buttons">
            <a href="https://wa.me/TUNÚMERODEWHATSAPP" target="_blank">
                <button class="whatsapp-button">WhatsApp</button>
            </a>
            <a href="https://www.linkedin.com/in/TUPERFILDELINKEDIN" target="_blank">
                <button class="linkedin-button">LinkedIn</button>
            </a>
            <a href="tel:+TUNÚMERODTELÉFONO">
                <button class="call-button">Llamar</button>
            </a>
        </div>
    </div>
</section>
