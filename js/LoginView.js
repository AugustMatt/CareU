// Mudança de animaçao do plano de fundo
$("#bg-animation-check").on("change", function() {
    console.log("mudou");
    if ($(this).is(":checked")) {
        $("body").removeClass("nighty");
        $("body").addClass("nighty-animated");
    } else {
        $("body").removeClass("nighty-animated");
        $("body").addClass("nighty");
    }
});

