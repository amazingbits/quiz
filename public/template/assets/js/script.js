if($("#start-quiz").length > 0) {
    $("#start-quiz").click(function(e) {
        e.preventDefault();
        let url = $(this).attr("url");
        window.location = url;
    });
}

if($(".opcoes div").length > 0) {
    $(".opcoes div").click(function(e) {
        e.preventDefault();
        $(this).find("input[type='radio']").prop("checked", true);
        $(this).parent().find("div").removeClass("active");
        $(this).addClass("active");
    });
}