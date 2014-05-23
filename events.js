/**
 * Created by shoot on 21.05.2014.
 *
 */

$(document).ready(function(){

    var $target = $('html,body');
    var x = $(window).height();

    $('.next-page').click(function(){

        $target.animate({scrollTop: x}, 1000);
        x += x;
        var clientHeight = document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight;
        var documentHeight = document.documentElement.scrollHeight ? document.documentElement.scrollHeight : document.body.scrollHeight;
        var scrollTop = window.pageYOffset ? window.pageYOffset : (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);
        if((documentHeight - clientHeight) <= scrollTop)
        {
//            alert('Достигнут конец документа');
            $('.next-page').fadeOut()
        }
        else{
            $('.next-page').fadeIn()
        }

    });





//         даем классы дропдаун меню
    $('.deeper>a').attr('data-toggle', 'dropdown').addClass("btn btn-default dropdown-toggle").append('<span class="glyphicon glyphicon-align-justify"></span>');
    $('.deeper>ul').addClass("dropdown-menu");


//        Убираем лишние элементы
    var url = document.URL;
    if(url.indexOf('home-nm') + 1 ){
                $('.wrapper').animate({'margin-top': 0},400)
    }
    else{}


    if( url.indexOf('/ru/') +1){
        $('#ru-ru').remove();

    }
    else{
        $('#en-en').remove();
    }

});
