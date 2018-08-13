$(function() {
    console.log($("#container").offset().left);
    var cont_offset = $("#container").offset().left - 70;
    var desc_offset = $("#description").offset().left;
    $("body").scroll(function(){
        var current = $('#container').offset().left;
        if(desc_offset > current) {
            $('#description').addClass('desc-hide');
            $('#main-nav').addClass('main-nav-mini');
        } else {
            $('#description').removeClass('desc-hide');
            $('#main-nav').removeClass('main-nav-mini');
        }

        /*console.log(cont_offset);
        console.log(current);

        if(desc_offset - 100 > current) {
            $('#main-nav').addClass('main-nav-mini');
        } else {
            $('#main-nav').removeClass('main-nav-mini');
        }*/
    });

    $("body").mousewheel(function(event, delta) {

        this.scrollLeft -= (delta * 40);

        event.preventDefault();

    });

});