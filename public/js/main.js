$(function() {
    if($("#description").length == 0) {
        return false;
    }

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

    var title = $("#custom-cursor");
    var window_width = $(window).width();
    var percent = 0;
    var direction_text = 'THERE';
    var buffer_text = '';
    $("#container").mousemove(function(e){
        percent = e.pageX * 100 / window_width;
        if (percent >= 50) {
            buffer_text = 'THERE';
        } else {
            buffer_text = 'HERE';
        }
        if (buffer_text !== direction_text){
            direction_text = buffer_text;
            title.text(direction_text);
        }

        title.offset({
            top: (e.pageY ? e.pageY : e.clientX),
            left: (e.pageX ? e.pageX : e.clientY)
        })

    });

    //if($('.active-slide').length == 0)
    var slide_index = 0;
    var prev_slide = 0;
    var middle_screenX = window_width/2;
    var middle_slideX = 0;
    var scroll = '';
    var clickX= 0;
    //console.log(middle_screenX);
    var slides = [];

    $("#home-album img").each(function (index) {
        index++;
        slides[index] = new Array(2);
        slides[index][0] = $(this).offset().left;
        slides[index][1] = $(this).width()/2;
        //console.log($(this).offset().left, $(this).width()/2);
    });

    slides[0] = new Array(2);
    slides[0][0] = middle_screenX;
    slides[0][1] = 0;

    $("#container").click(function (event) {
        //console.log($('img').is(':active'));

       /* console.log($("body").scrollLeft());
        console.log(event.clientY);*/
        prev_slide = slide_index;
        clickX = $("body").scrollLeft() + event.clientX;
        if (direction_text === 'THERE') {
            slide_index++;
        } else {
            slide_index--;
        }
        console.log(!(clickX >= slides[slide_index][0] && clickX <= slides[slide_index][0] + slides[slide_index][1]));
        console.log(!(clickX >= slides[prev_slide][0] && clickX <= slides[prev_slide][0] + slides[prev_slide][1]));

        if (!(clickX >= slides[slide_index][0] && clickX <= slides[slide_index][0] + slides[slide_index][1]) &&
            !(clickX >= slides[prev_slide][0] && clickX <= slides[prev_slide][0] + slides[prev_slide][1])) {
            console.log('extra');
            slide_index = find_slide_index(slide_index, slides, clickX);
        }
        //console.log(slide_index);

        middle_slideX = slides[slide_index][0] + slides[slide_index][1];
        //console.log(point);
        /*console.log(middle_slideX);
        console.log(middle_screenX);*/
        $("body").animate({scrollLeft: middle_slideX - middle_screenX}, 800);
        //point = middle_slideX;

        //console.log(middle_screenX);
    });


});

function find_slide_index(slide_index, slides, clickX) {
    $.each(slides, function (key, value){
       if(clickX >= value[0] && clickX <= value[0] + value[1]) {
           slide_index = key;
           return false;
       }
    }, clickX);
    return slide_index;
}