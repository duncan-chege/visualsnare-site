
<footer class="bg-[url('../assets/img/footer-background.jpg')] bg-cover grid md:grid-cols-2 grid-cols-1 gap-6 p-8 md:p-0" id="contacts">
    <img class="h-64 md:h-full object-contain self-center" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-man.png" alt="">

    <div>
        <h2 class="text-blue text-4xl font-bold pt-10 pb-4">Let’s Connect and Create Something Extraordinary.</h2>
        <p class="text-blue text-lg">We are also open to collaborate with other designers/developers</p>
        <div class="flex mt-8 gap-x-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-icon.svg">
            <a class="text-lg text-orange font-semibold underline underline-offset-4" href="https://www.linkedin.com/company/visualsnare/" target="_blank">Visualsnare</a>
        </div>
        <div class="flex mt-8 gap-x-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/email-icon.svg">
            <a class="text-lg text-orange font-semibold underline underline-offset-4" href="mailto:info@visualsnare.com" target="_blank">info@visualsnare.com</a>
        </div>
        <div class="flex mt-8 gap-x-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/location-icon.svg">
            <p class="text-lg text-orange font-semibold leading-tight">Nairobi - Kenya</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>