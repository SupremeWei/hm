$(function() {
    $("li").removeClass("active");

    var pageLocation = $(location).attr('pathname');
    switch (pageLocation) {
        case '/home':
        case '/':
            $('.home').addClass('active');
            break;
        case '/about':
            $('.about').addClass('active');
            break;
        case '/contact':
            $('.contact').addClass('active');
            break;
    }
    
    if (pageLocation.includes("/product/show")) {
        $('.production').addClass('active');
    }
});