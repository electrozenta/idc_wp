<?php
/*
Template Name: Contact page
Description: Contact page template
*/

get_header();
?>
    <div class="row contact">
        <div class="col-md-4">
            <?php get_template_part('/templates/template-part-content'); ?>
        </div>
        <div class="col-md-6 col-md-offset-2">
            <h3>Карта проезда</h3>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2249.576628964946!2d37.38614399999999!3d55.678961999999906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54e05049191e5%3A0xb0eda4de07922be6!2sIDC-Skolkovo!5e0!3m2!1sen!2s!4v1399552209021" frameborder="0" style="border:0;height:340px;width:100%"></iframe>
        </div>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="216" title="Обратная Связь"]'); ?>
<?php
get_template_part('/templates/template-part-footer');
get_footer();
?>