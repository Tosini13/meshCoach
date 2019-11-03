
var lastColor;
function links_decoration() {
    $('nav li a').each(function () {
        $(this).mouseover(function () {
            lastColor = $(this).css('color');
            $(this).css('color', '#649EF3');
        });
        $(this).mouseout(function () {
            $(this).css('color', lastColor);
        });
    });
}