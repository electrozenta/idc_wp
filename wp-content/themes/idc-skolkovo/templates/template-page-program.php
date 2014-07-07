<?php
/*
Template Name: Educational Program
Description: Child page for educational program
*/

get_header();
?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/eventCalendar.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/eventCalendar_theme_responsive.css">
<?php
get_template_part('/templates/template-part-color');
get_template_part('/templates/template-part-header');

?>
    <div class="row">
        <div class="col-sm-4 no-gutter-left">
            <?php
            wp_nav_menu(array(
                    'menu' => 'educational-program',
                    'theme_location' => 'educational-program',
                    'depth' => 0,
                    'container' => 'div',
                    'container_class' => 'la-nav-skew',
                    'menu_class' => 'list-unstyled la-nav-vertical',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
            );
            ?>
            <a href="http://wp.idc-skolkovo.ru/Регистрация на образовательные программы/" class="priyom_btn"><button type="button" class="btn btn-block btn-info">Регистрация на образовательные программы</button></a>
        </div>
        <div class="col-sm-8 no-gutter-right">
            <?php get_template_part('/templates/template-part-content'); ?>
            <?php if($cfs->get('hide_calendar') == 0) : ?>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#">
                        <img class="img-responsive text-center" src="<?php echo get_template_directory_uri();?>/assets/img/educational_programs.jpg" alt=""/>
                    </a>
                    <?php echo do_shortcode('[contact-form-7 id="355" title="Скачать"]'); ?>
                </div>
                <div class="col-sm-8 no-gutter">
                    <div id="eventCalendarDefault"></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

<?php

get_template_part('/templates/template-part-footer');
?>
    <script>
        (function ($) {
            jQuery(document).ready(function () {

                $("#eventCalendarDefault").eventCalendar({
                    eventsjson: '<?php echo get_template_directory_uri();?>/templates/events.json.php',
                    monthNames: [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
                        "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
                    dayNames: [ 'Воскресенье','Понедельник','Вторник','Среда',
                        'Четверг','Пятница','Суббота' ],
                    dayNamesShort: [ 'Вс','Пн','Вт','Ср', 'Чт','Пт','Сб' ],
                    txt_noEvents: "Нет трейнингов",
                    txt_SpecificEvents_prev: "",
                    txt_SpecificEvents_after: "трейнинги:",
                    txt_next: "след.",
                    txt_prev: "пред.",
                    txt_NextEvents: "Образавательные программы:",
                    txt_GoToEventUrl: "посмотреть трейнинг",
                    showDescription: true,
                    openEventInNewWindow: true,
                    jsonDateFormat: 'human'
                });

            });
        })(jQuery)

        function download() {
            window.location = "<?php echo $cfs->get('download_url'); ?>";
        }
    </script>
<?php
get_footer();
?>