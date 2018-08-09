$(function() {
    /*window.addEventListener('scroll', function(e) {
        console.log(1);
        var navbar = document.getElementById('main-nav');
        if (window.scrollX > 0) {
            console.log(2);
            navbar.classList.add('main-nav-active');
        } else {
            console.log(3);
            navbar.classList.remove('main-nav-active');
        }
    });*/

   /* $("body").scroll(function(){
       console.log('bibka');

    });
*/
    var offset = $("#container").offset().left - 50;
    $("body").scroll(function(){
        if(offset > $("#container").offset().left) {
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