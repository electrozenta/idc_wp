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

            <div id="ymap" class="yandex-map"></div>
        </div>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="216" title="Обратная Связь"]'); ?>
    <script type="text/javascript" charset="utf-8"
            src="http://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ddfw4S6S-ghgi9hiVCwtiNGlU93ARNkz&id=ymap"></script>
<?php
get_template_part('/templates/template-part-footer');
get_footer();