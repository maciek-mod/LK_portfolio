$(document).ready(function() {
    var mobile_menu = $(".mobile_container"),
        pos_doc = null,
        pos_doc2 = null,
        nav_elemnt = $("nav"),
        main_page = $(".main_page"),
        button_section = $(".button_section"),
        section_main = $("body.home").find("section"),
        bottom_position = null,
        lastScrollTop = 0;

    // menu mobile
    $("#nav-icon4").click(function() {
        $(this).toggleClass("open");
        mobile_menu.toggleClass("active");
    });
    if (main_page.length) {
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
        //buttony w headerze, scrolowanie
        button_section.find("a").click(function(event) {
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


        function showSection() {
            pos_doc2 = $(window).scrollTop();
            bottom_position = pos_doc2 + $(window).height();
            section_main.each(function(index) {
                if (bottom_position > ($(this).position().top + 300)) {
                    $(this).addClass("show_section");
                }
            });
        }
        // showSection();
    }

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
    if (main_page.length) {
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
    }

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
            if (pos_doc > ($(this).position().top - $("nav").height() - ($(window).height() / 3))) {
                $(this).addClass("active");
            }
        });
    }
    drawLine();

    //ukrywanie powyzej 3 postówarn

    function showButtonMore() {
        if ($(".portfolio_inner").find(".item_flex").length > 3) {
            $(".show_all").show();
            $(".show_all").on("click", function(event) {
                event.preventDefault();
                $(this).hide();
                $(".portfolio_inner").find(".item_flex").each(function(index) {
                    if ($(this).css("display") == "none") {
                        $(this).slideDown();
                        $(this).css("display", "flex");
                    }
                });
            });
        }
    }
    showButtonMore();

    var positionY,
        positionX,
        paralaxImg = $("#paralax"),
        widthEl,
        heightEl,
        positionLeft,
        positionTop;
    $('#main_page').mousemove(function(event) {
        widthEl = $(this).outerWidth();
        heightEl = $(this).outerHeight();
        positionX = event.clientX;
        positionY = event.clientY;
        positionLeft = ((((widthEl / 2) - positionX) * 100) / widthEl) / 15;
        positionTop = ((((heightEl / 2) - positionY) * 100) / heightEl) / 15;
        paralaxImg.css({
            "left": -10 + positionLeft + "%",
            "top": -10 + positionTop + "%"
        });
    });


    // chowajace sie menu
    var header_element = $("header"),
        header_height = header_element.outerHeight() + header_element.position().top;
    $(window).scroll(function(event) {
        // showSection();
        var st = $(this).scrollTop();
        if (st > header_height) {
            if (st > lastScrollTop) {
                nav_elemnt.addClass("hide_up");
            } else {
                nav_elemnt.removeClass("hide_up");
            }
        }

        lastScrollTop = st;
    });


});
