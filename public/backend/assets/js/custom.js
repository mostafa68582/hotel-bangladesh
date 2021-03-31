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

/*add hotel and room start*/

$(document).ready(function(){
    $(".cuntinue_1").click(function(){
        $(".content_display_none_1").css({"display":"block"});
        $(".content_display_none_2").css({"display":"block"});
        $(".continue_btn_1").css({"display":"none"})
    });
});

$(document).ready(function(){
    $(".cuntinue_2").click(function(){
        $(".content_display_none_3").css({"display":"block"});
        $(".continue_btn_2").css({"display":"none"})
    });
});

$(document).ready(function(){
    $(".cuntinue_3").click(function(){
        $(".content_display_none_4").css({"display":"block"});
        $(".continue_btn_3").css({"display":"none"})
    });
});

$(document).ready(function(){
    $(".cuntinue_4").click(function(){
        $(".content_display_none_5").css({"display":"block"});
        $(".continue_btn_4").css({"display":"none"})
    });
});

$(document).ready(function(){
    $(".cuntinue_5").click(function(){
        $(".content_display_none_6").css({"display":"block"});
        $(".continue_btn_5").css({"display":"none"})
    });
});

/*add hotel and room end*/