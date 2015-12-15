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
            $('.login').css('top', '75px');
        }
        else if($(window).scrollTop() <= 43) {
            $('nav').removeClass('navbar-fixed-top');
            $('nav').addClass('navbar-static-top');
            $('body').css({'padding-top': '0px'});
            $('.login').css('top', navHeight + 40 + 'px');
        }
    });
    $('.aboveslider--red > button.close').click(function(){
        $('.aboveslider--red').removeClass('on');
    });
    $('.comic-book-cover > img').click(function(){
        $(this).parent().addClass('display');
        var thisClicked = $(this).parent().attr('id');
        var dispImg = $('.comic-book-cover#' + thisClicked + ' img').attr('src');
        var dispTitle = $('comic-book-cover#' + thisClicked + ' .info .title').text();
        var dispGrade = $('comic-book-cover#' + thisClicked + ' + .info .grade').text();
        var dispPrice = $('comic-book-cover#' + thisClicked + ' + .info .price').text();
        var dispText = $('comic-book-cover#' + thisClicked + ' + .info .description').text();
        $('.comic-overlay').css('display' , 'table');
        $('.comic-overlay #comic-image img').attr('src',dispImg);
        $('.comic-overlay #comic-title').text(dispTitle);
        $('.comic-overlay #comic-grade').text(dispGrade);
        $('.comic-overlay #comic-price').text(dispPrice);
        $('.comic-overlay #comic-desc').text(dispText);
    });
    $('.comic-overlay > .close').click(function(){
        $(this).parent().removeClass('display');
        $('.comic-overlay').css('display' , 'none');
//        $('.comic-overlay #comic-image img').attr('src', "#");
//        $('.comic-overlay #comic-title').text(" ");
//        $('.comic-overlay #comic-grade').text(" ");
//        $('.comic-overlay #comic-price').text(" ");
//        $('.comic-overlay #comic-desc').text(" ");
    });
    $('.map-overlay').click(function(){
        $(this).addClass('deactive');
    })
});
