$(document).ready(function(){
    
    var navHeight = $('.navbar').height();
//    $(window).on('resize load', function() {
//        $('body').css({"padding-top": navHeight + 'px'});
//    });
    $('.login__button').click(function(){
        var loginText = $(this).text();
        if(loginText == "Login"){
            $('.login__button a').text("Close");
        }
        else {
            $('.login__button a').text("Login");
        };
        $('.login, .overlay').toggleClass('active');
    });
    $('.login').css('top', navHeight + 10 + 'px');
    $(window).load(function(){
        setTimeout(function(){
            $('.aboveslider--red').slideDown('slow');
            setTimeout(function(){
                $('.aboveslider__text p').fadeIn('slow');    
            }, 500);
        }, 2500);
    });
    $(window).scroll(function() {
        if($(window).scrollTop() >= 44){
            $('nav').addClass('navbar-fixed-top');
            $('nav').removeClass('navbar-static-top');
        }
        else if($(window).scrollTop() <= 43) {
            $('nav').removeClass('navbar-fixed-top');
            $('nav').addClass('navbar-static-top');
        }
    });
    
});
