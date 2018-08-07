$(function() {
    /*console.log(11);
    window.addEventListener('scroll', function(){
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

    $("body").mousewheel(function(event, delta) {

        this.scrollLeft -= (delta * 40);

        event.preventDefault();

    });

});