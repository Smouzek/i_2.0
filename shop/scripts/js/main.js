$(document).ready(function() {
    $(".page").hide();
    $(".page1").show();
    $(".page1").addClass("checked_page");
    $(".paginator__item[value=1]").addClass("checked_page");

    $(".paginator__item").click(function() {
        let page = $(this).attr('value');
        page = ".page" + page;
        $(".page").hide();
        $(page).show();
        $(".checked_page").removeClass("checked_page");
        $(this).addClass("checked_page");
    });
});