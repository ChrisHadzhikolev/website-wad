var btn = $('#back_to_top');

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});

btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: 0}, '300');
});

function navigationDropdown() {
    var x = document.querySelector(".navigation")
    if (x.className === "navigation") {
        x.classList.add("responsive");
    } else {
        x.classList.remove("responsive");
    }
}
