$(document).ready(function(){
    
    var navHeight = $('.navbar').height();
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
    $('.login').css('top', navHeight + 40 + 'px');
    $(window).load(function(){
        setTimeout(function(){
            $('.aboveslider--red').addClass('on');
            setTimeout(function(){
                $('.aboveslider__text p').addClass('active');    
            }, 500);
        }, 2500);
    });
    $(window).scroll(function() {
        if($(window).scrollTop() >= 44){
            $('nav').addClass('navbar-fixed-top');
            $('nav').removeClass('navbar-static-top');
            $('body').css({'padding-top': navHeight + 'px'});
        }
        else if($(window).scrollTop() <= 43) {
            $('nav').removeClass('navbar-fixed-top');
            $('nav').addClass('navbar-static-top');
            $('body').css({'padding-top': '0px'});
        }
    });
    $('.aboveslider--red > button.close').click(function(){
        $('.aboveslider--red').removeClass('on');
    });
    $('.comic-book-cover > img').click(function(){
        $(this).parent().addClass('display');
        $('.comic-overlay').css('display' , 'table');
        var dispImg = $('.comic-book-cover.display > img');
        $('comic-overlay #comic-img').append('.comic-book-cover.display > img');
    });
    
});
