$(window).on("load", function() {
    window.headerOffsetTop = $(".main-header").offset().top;
    window.headerOuterHeight = $(".main-header").outerHeight();
    window.scrollTop = $(window).scrollTop();

    $("#main-header_btn").on("click", function(){
        toggleMenuButton();
        toggleMenu();
    })

    $(window).scroll(function (){
        fixHeader();
    })

    fixHeader();

    $(window).resize(function(){
        setMenuCenter();
        window.headerOuterHeight = $(".main-header").outerHeight();
    })

    $('.main-nav a').on("click", function(e){
        let href = $(this).attr("href");
        if(href.charAt(0) === "#") {
            e.preventDefault();
            let block = $(href);
            if(block.length > 0) {
                toggleMenuButton();
                toggleMenu();
                setTimeout(function () {
                    let scroll = window.headerOffsetTop;
                    if (Math.round(block.offset().top) > Math.round(window.headerOffsetTop + window.headerOuterHeight)) {
                        fixHeader(true);
                        scroll = Math.round(block.offset().top - $(".main-header").outerHeight()) + 1;
                    }
                    $("html, body").animate({
                        scrollTop: scroll
                    }, 500);
                }, 100)
            }
        }
    })

    $(".open-popup-btn").each(function(){
        let href = $(this).attr("href");
        if(href === "#popup-product") {
            $(href).find("input[name=your-product]").val($(this).data("title"));
        }

        $(this).magnificPopup({
            type: "inline"
        });
    })
})

function fixHeader(force) {
    let header = $(".main-header");
    if(force || $(window).scrollTop() > window.headerOffsetTop) {
        header.addClass("fixed");
        $("body").css("padding-top", window.headerOuterHeight);
    } else {
        header.removeClass("fixed");
        $("body").css("padding-top", 0);
    }
}

function toggleMenu() {
    let menu = $(".main-nav");
    if(menu.hasClass("show")) {
        if(window.scrollTop > window.headerOffsetTop) {
            fixHeader(true);
        }
        enableScrollBar();
        setTimeout(function(){
            menu.removeClass("show");
        }, 100);
    } else {
        menu.addClass("show")
        setMenuCenter();
        disableScrollBar();
    }
}

function toggleMenuButton() {
    $("#main-header_btn").toggleClass("active");
}

function disableScrollBar() {
    window.scrollTop = $(window).scrollTop();
    console.log(window.scrollTop);
    $("body").css("overflow-y", "hidden");
}

function enableScrollBar() {
    $("body").css("overflow-y", "");
    setTimeout(function(){
        $(window).scrollTop(window.scrollTop);
    }, 100);
    console.log(window.scrollTop);
}

function setMenuCenter() {
    let menu = $(".main-nav");
    if(menu.find("ul").outerHeight() < menu.height())
        menu.addClass("center");
    else
        menu.removeClass("center");
}