// Mudança de animaçao do plano de fundo
$("#bg-animation-check").on("change", function () {
    console.log("mudou");
    if ($(this).is(":checked")) {
        $("body").removeClass("nighty");
        $("body").addClass("nighty-animated");
    } else {
        $("body").removeClass("nighty-animated");
        $("body").addClass("nighty");
    }
});

function animation() {

    console.log('wow');

    $('#sun_yellow').animate({ 'top': '96%', 'opacity': 0.4 }, 12000, function () {
        $('#stars').animate({ 'opacity': 1 }, 5000, function () {
            $('#moon').animate({ 'top': '30%', 'opacity': 1 }, 5000, function () {
                $('#sstar').animate({ 'opacity': 1 }, 300);
                $('#sstar').animate({
                    'backgroundPosition': '0px 0px', 'top': '15%', 'opacity': 0
                }, 500);
            });
        });
    });

    $('#sun_red').animate({ 'top': '96%', 'opacity': 0.8 }, 12000);
    $('#sky').animate({ 'backgroundColor': '#4F0030' }, 18000);
    $('#clouds').animate({ 'backgroundPosition': '1000px 0px', 'opacity': 0 }, 30000);
    $('#night').animate({ 'opacity': 0.8 }, 20000);
};

// on page load
$(document).ready(function () {
    console.log("animation");
    animation();
});

