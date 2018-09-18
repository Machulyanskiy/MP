if (
    navigator.userAgent.match(/Phone/i) ||
    navigator.userAgent.match(/DROID/i) ||
    navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPod/i) ||
    navigator.userAgent.match(/BlackBerry/) ||
    navigator.userAgent.match(/Windows Phone/i) ||
    navigator.userAgent.match(/ZuneWP7/i) ||
    navigator.userAgent.match(/IEMobile/i)
){ var mobile_device = true; }
if (
    navigator.userAgent.match(/Tablet/i) ||
    navigator.userAgent.match(/iPad/i) ||
    navigator.userAgent.match(/Kindle/i) ||
    navigator.userAgent.match(/Playbook/i) ||
    navigator.userAgent.match(/Nexus/i) ||
    navigator.userAgent.match(/Xoom/i) ||
    navigator.userAgent.match(/SM-N900T/i) || //Samsung Note 3
    navigator.userAgent.match(/GT-N7100/i) || //Samsung Note 2
    navigator.userAgent.match(/SAMSUNG-SGH-I717/i) || //Samsung Note
    navigator.userAgent.match(/SM-T330NU/i) //Samsung Tab 4

){ var tablet_device = true;}

$(window).on('load', function() {
    if($("body>div").length > 0) {
        $("body>div").each(function (index) {
            $(this).remove();
        });
    }

    if (mobile_device) {
        return false;
    }

    if($("#description").length == 0) {
        $('footer').css("margin-left", "-45px");
        $('#custom-cursor').remove();
        return false;
    }

    var title = $("#custom-cursor");
    if (tablet_device) {
        title.hide();
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


    var window_width = $(window).width();
    var percent = 0;
    var direction_text = 'THERE';
    var buffer_text = '';
    var slide_index = 0;
    var page_end = $("body")[0].scrollWidth;
    var scroll_left = 0;

    $("#container").mousemove(function(e){
        scroll_left = $("body").scrollLeft();

        if (page_end === scroll_left + window_width && e.pageX > window_width - 100) {
            return false;
        }
        percent = e.pageX * 100 / window_width;
        if (scroll_left === 0) {
            direction_text = 'THERE';
        } else if (page_end === scroll_left + window_width){
            direction_text = 'HERE';
        } else if (percent >= 50) {
            direction_text = 'THERE';
        } else {
            direction_text = 'HERE';
        }
        /*if (buffer_text !== direction_text){
            direction_text = buffer_text;
            title.text(direction_text);
        }*/
        title.text(direction_text);

        if (!tablet_device){
            title.offset({
                top: (e.pageY ? e.pageY : e.clientX),
                left: (e.pageX ? e.pageX : e.clientY)
            })
        }

    });

    var prev_slide = 0;
    var middle_screenX = window_width/2;
    var middle_slideX = 0;
    var clickX= 0;
    var slides = [];

    $("#home-album li").each(function (index) {
        index++;
        slides[index] = new Array(2);
        slides[index][0] = $(this).offset().left;
        slides[index][1] = $(this).width()/2;
    });

    slides[0] = new Array(2);
    slides[0][0] = middle_screenX;
    slides[0][1] = 0;
    var size = slides.length;
    var slide_part = 0;
    var first_slide = false;
    var last_slide = false;

    $("#container").click(function (event) {
        $("body").clearQueue();
        first_slide = false;
        last_slide = false;
        prev_slide = slide_index;
        scroll_left = $("body").scrollLeft();
        clickX = scroll_left + event.clientX;
        if (direction_text === 'THERE') {
            slide_index++;
            slide_part = slides[prev_slide][1];
            if(slide_index === size) {
                slide_index--;
                last_slide = true;
            }
        } else {
            slide_index--;
            slide_part = 0;
            if(slide_index < 0) {
                slide_index = 0;
                first_slide = true;
            }
        }
        if (page_end === scroll_left + window_width){
            last_slide = true;
            slide_index = size - 2;
        }

        if (!(clickX >= slides[slide_index][0] && clickX <= slides[slide_index][0] + slides[slide_index][1]*2) &&
            !(clickX >= slides[prev_slide][0] + slide_part && clickX <= slides[prev_slide][0] + slide_part + slides[prev_slide][1] ) &&
            !first_slide && !last_slide) {
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