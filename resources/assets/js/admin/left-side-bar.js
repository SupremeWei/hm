$(function() {
    $("li").removeClass("active");

    var pageLocation = $(location).attr('pathname');
    console.log(pageLocation);
    switch (pageLocation) {
        case '/admin/home':
            $('.home').addClass('active');
            break;
        case '/admin/about':
            $('.about').addClass('active');
            break;
        case '/admin/product':
            $('.product').addClass('active');
            break;
        case '/admin/contact':
            $('.contact').addClass('active');
            break;
    }
});