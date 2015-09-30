$(document).ready(function(){
    var navHeight = $('.navbar').height();
    $(window).on('resize load', function() {
        $('body').css({"padding-top": navHeight + 'px'});
    });
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
})