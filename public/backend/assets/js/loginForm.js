$(document).ready(function(){
    $(".menu_icon a").click(function(){
        $(".side_navigation_bar").toggle();
    })
});


$(document).ready(function() {
    $("input:text:visible:first").focus();
});


/*sidebar start*/
$(document).ready(function(){
    $(".navigation_menu ul li").click(function(){
        $(this).children('.sidebar_submenu').toggle({"display":"block"});
    })
});
/*sidebar end*/

/*footer start*/
if ($(window).width() <= 774){
    $(".footer").removeClass("fixed-bottom");
}
/*footer end*/