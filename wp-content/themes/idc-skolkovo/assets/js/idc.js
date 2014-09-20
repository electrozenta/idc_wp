(function ($) {
    jQuery(document).ready(function () {



        var $owlCarouselHeader = $("#owl-idc");

        if($owlCarouselHeader.length) {
            $owlCarouselHeader.owlCarousel({
                singleItem: true,
                autoPlay: 3000,
                stopOnHover: true,
                navigation: true,
                pagination: false,
                paginationSpeed: 3000,
                slideSpeed: 6000,
                goToFirstSpeed: 3000,
                transitionStyle: "fade",
                navigationText: [
                    '<span class="glyphicon glyphicon-chevron-left"></span>',
                    '<span class="glyphicon glyphicon-chevron-right"></span>']
            });
        }


        var $owlCarouselFooter = $("#owl-idc-footer");

        if($owlCarouselFooter.length) {
            $("#owl-idc-footer").owlCarousel({
                autoPlay: 3000,
                stopOnHover: true,
                navigation: true,
                pagination: false,
                paginationSpeed: 2000,
                slideSpeed: 1000,
                goToFirstSpeed: 1000,
                items : 3,
                itemsDesktop : [1200,3],
                itemsDesktopSmall : [992,3],
                itemsTablet: [768,2],
                itemsMobile : [480,1],
                navigationText: [
                    '<span class="glyphicon glyphicon-chevron-left"></span>',
                    '<span class="glyphicon glyphicon-chevron-right"></span>']
            });
        }


        var $eventCalendar = $("#eventCalendarDefault");

        if($eventCalendar.length) {
            $("#eventCalendarDefault").eventCalendar({
                eventsjson: templateDirectory + '/templates/events.json.php',
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
        }


    });
})(jQuery)



