$(document).ready(function() {
	console.log("dziala");
    var mobile_menu = $(".mobile_container"),
        pos_doc = null;
    nav_elemnt = $("nav");

    // menu mobile
    $("#nav-icon4").click(function() {
        $(this).toggleClass("open");
        mobile_menu.toggleClass("active");
    });
    mobile_menu.find("#mobile_menu a").click(function(event) {
        event.preventDefault();
        $("#nav-icon4").removeClass("open");
        mobile_menu.removeClass("active");
        var section = $("." + $(this).attr("data-scroll"));
        var section_position = section.position().top - $("nav").height();
        var pos_doc = $(window).scrollTop();
        if (pos_doc > section_position) {
            var time = (pos_doc - section_position);
        } else {
            var time = (section_position - pos_doc);
        }
        $("html, body").stop().animate({
            scrollTop: section_position
        }, time, function() {});
    });

    // scroll menu
    $(window).scroll(function(event) {
        drawLine();
        pos_doc = $(window).scrollTop();
        if (pos_doc > 50) {
            nav_elemnt.addClass("active");
        } else {
            nav_elemnt.removeClass("active");
        }
    });

    function findMenu() {
        pos_doc = $(window).scrollTop();
        if (pos_doc > 50) {
            nav_elemnt.addClass("active");
        } else {
            nav_elemnt.removeClass("active");
        }
    }
    findMenu();

    //scroll to section
    $("#deskop a").on("click", function(event) {
        event.preventDefault();
        var section = $("." + $(this).attr("data-scroll"));
        var section_position = section.position().top - $("nav").height();
        var pos_doc = $(window).scrollTop();
        if (pos_doc > section_position) {
            var time = (pos_doc - section_position);
        } else {
            var time = (section_position - pos_doc);
        }
        $("html, body").stop().animate({
            scrollTop: section_position
        }, time, function() {});

    });

    //scroll down img
    $(".scroll_down").on("click", function(event) {
        $("html, body").stop().animate({
            scrollTop: $(".ofert").position().top - $("nav").height()
        }, 2000, function() {});
    });

    // rysowanie lini w h2
    function drawLine() {
        var pos_doc = $(window).scrollTop();
        var h2_element = $("h2.title");
        h2_element.each(function(index) {
            if (pos_doc > ($(this).position().top - $("nav").height() - ($( window ).height() / 3))) {
                $(this).addClass("active");
            }
        });
    }
    drawLine();

});
