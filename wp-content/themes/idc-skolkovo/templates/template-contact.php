<?php
/*
Template Name: Contact page
Description: Contact page template
*/

get_header();
?>
    <div class="row contact">
        <div class="col-md-6">
            <?php get_template_part('/templates/template-part-content'); ?>
        </div>
        <div class="col-md-6">
            <h3><?php echo $cfs->get('map_title'); ?></h3>
            <?php echo $cfs->get('map_iframe'); ?>
        </div>
    </div>
<?php
$code = $cfs->get('contact_form_shortcode');
if (trim($code) != "") {
    echo do_shortcode($code);
}
?>
<?php
get_template_part('/templates/template-part-footer');
get_footer();
?>