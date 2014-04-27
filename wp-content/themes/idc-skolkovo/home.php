<?php
/*
Template Name: Home Page
Description: The main page
*/
?>

<?php get_header(); ?>

<main>
    <header>
        <div id="owl-idc" class="owl-carousel owl-theme hidden-xs">
            <div class="item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/header-1.jpg" alt="" class="img-responsive">

                <h2>Стоматологический Центр</h2>
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/header-2.jpg" alt="" class="img-responsive">

                <h2>Учебный Центр</h2>
            </div>
        </div>
    </header>
    <article>
        <p>Международный Стоматологический Центр IDC Skolkovo – это совместный проект российской международной
            стоматологической элиты, широко известных клиницистов, ученых и лекторов ведущих университетов и
            престижных академий мира.</p>
    </article>

    <div class="row">
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
            <a href="doctors-experts.html">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/page-1.jpg" alt="">

                <h3>Врачи/Эксперты</h3>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
            <a href="service-price.html">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/page-2.jpg" alt="">

                <h3>Услуги/Цены</h3>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
            <a href="gallery.html">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/page-3.jpg" alt="">

                <h3>Галерея работ</h3>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
            <a href="appointment.html">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/page-4.jpg" alt="">

                <h3>Записаться на прием</h3>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
            <a href="lecturers-experts.html">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/page-5.jpg" alt="">

                <h3>Лекторы/Эксперты</h3>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
            <a href="educational-programs.html">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/page-6.jpg" alt="">

                <h3>Образовательные программы</h3>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
            <a href="location.html">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/page-7.jpg" alt="">

                <h3>Расположение</h3>
            </a>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 la-page">
            <a href="registration.html">
                <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/page-8.jpg" alt="">

                <h3>Регистрация</h3>
            </a>
        </div>
    </div>
</main>

<script>
    (function($){
        jQuery(document).ready(function () {

            $("#owl-idc").owlCarousel({

                autoPlay : 3000,
                stopOnHover : true,
                navigation:true,
                pagination: false,
                paginationSpeed : 3000,
                slideSpeed: 3000,
                goToFirstSpeed : 3000,
                singleItem : true,
                transitionStyle:"fade",
                navigationText: [
                    '<span class="glyphicon glyphicon-chevron-left"></span>',
                    '<span class="glyphicon glyphicon-chevron-right"></span>']

            });

        });
    })(jQuery)
</script>

<?php get_footer(); ?>