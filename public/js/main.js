$(function() {
    if($("#description").length == 0) {
        $('#custom-cursor').remove();
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
    var slide_index = 0;
    $("#container").mousemove(function(e){
        percent = e.pageX * 100 / window_width;
        if (percent >= 50 || $("body").scrollLeft() === 0) {
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

    var prev_slide = 0;
    var middle_screenX = window_width/2;
    var middle_slideX = 0;
    var clickX= 0;
    var slides = [];

    $("#home-album img").each(function (index) {
        index++;
        slides[index] = new Array(2);
        slides[index][0] = $(this).offset().left;
        slides[index][1] = $(this).width()/2;
    });

    slides[0] = new Array(2);
    slides[0][0] = middle_screenX;
    slides[0][1] = 0;
    var slide_part = 0;
    var first_slide = false;

    $("#container").click(function (event) {
        first_slide = false;
        prev_slide = slide_index;
        clickX = $("body").scrollLeft() + event.clientX;
        if (direction_text === 'THERE') {
            slide_index++;
            slide_part = slides[prev_slide][1];
        } else {
            slide_index--;
            slide_part = 0;
            if(slide_index < 0) {
                slide_index = 0;
                first_slide = true;
            }
        }

        if (!(clickX >= slides[slide_index][0] && clickX <= slides[slide_index][0] + slides[slide_index][1]*2) &&
            !(clickX >= slides[prev_slide][0] + slide_part && clickX <= slides[prev_slide][0] + slide_part + slides[prev_slide][1] ) &&
            !first_slide) {
            slide_index = find_slide_index(slide_index, slides, clickX);
            if (direction_text === 'THERE' && slide_index < prev_slide) {
                slide_index++;
            } else if (direction_text === 'HERE' && slide_index > prev_slide) {
                slide_index--;
            }

        }

        middle_slideX = slides[slide_index][0] + slides[slide_index][1];
        $("body").animate({scrollLeft: middle_slideX - middle_screenX}, 800);
    });


});

function find_slide_index(slide_index, slides, clickX) {
    $.each(slides, function (key, value){
       if(clickX >= value[0] && clickX <= value[0] + value[1]*2) {
           slide_index = key;
           return false;
       }
    }, clickX);
    return slide_index;
}