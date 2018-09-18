$(function() {
    if ($("#description").length === 0) {
        var footer_height = $('footer').height();
        if (footer_height > 24) {
            footer_height += 20;
            $("#container").css('height', 'calc(100% - ' + footer_height + 'px');
        }
    } else {
        $("#container").css('height', 'auto');
    }



    $('#menu-btn').click(function () {
        var menu = $('#nav-container');
        if (menu.hasClass('nav-container-activated')){
            $(this).removeClass("menu-btn-active");
            menu.removeClass('nav-container-activated');
        } else {
            $(this).addClass("menu-btn-active");
            menu.addClass('nav-container-activated');
        }
    });

    $('#container').click(function(e) {
        $(this).clearQueue();
        if (e.pageY > 150 && $(".menu-btn-active").length > 0) {
            $('#menu-btn').removeClass("menu-btn-active");
            $('#nav-container').removeClass('nav-container-activated');
        }
    });

});