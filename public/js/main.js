$(function() {
    var cont_offset = $("#container").offset().left - 50;
    var desc_offset = $("#description").offset().left;
    $("body").scroll(function(){
        var current = $('#container').offset().left;
        if(desc_offset > current) {
            $('#description').addClass('desc-hide');
        } else {
            $('#description').removeClass('desc-hide');
        }

        if(cont_offset > $("#container").offset().left) {
            $('#main-nav').addClass('main-nav-active');
        } else {
            $('#main-nav').removeClass('main-nav-active');
        }
    });

    $("body").mousewheel(function(event, delta) {

        this.scrollLeft -= (delta * 40);

        event.preventDefault();

    });

});