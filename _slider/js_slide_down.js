function slidedown(id) {
    id = "#".concat(id);
    $('html, body').animate({
        scrollTop: $(id).offset().top - $('.myheader').height()
    }, 1000);
}

function activate(id) {
    id++;
    if ($('html, body').scrollTop() > $("#4").offset().top - $('.myheader').height() - 20) {
        for (var i = 0; i < id; i++) {
            $(".".concat(i)).css('color', '#649EF3');
        }
        $('.4').css('color', '#818181');
    } else if ($('html, body').scrollTop() > $("#3").offset().top - $('.myheader').height() - 1) {
        for (var i = 0; i < id; i++) {
            $(".".concat(i)).css('color', '#649EF3');
        }
        $('.3').css('color', '#818181');
    } else if ($('html, body').scrollTop() > $("#2").offset().top - $('.myheader').height() - 1) {
        for (var i = 0; i < id; i++) {
            $(".".concat(i)).css('color', '#649EF3');
        }
        $('.2').css('color', '#818181');
    } else if ($('html, body').scrollTop() > $("#1").offset().top - $('.myheader').height() - 1) {
        for (var i = 0; i < id; i++) {
            $(".".concat(i)).css('color', '#649EF3');
        }
        $('.1').css('color', '#818181');
    }
}