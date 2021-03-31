$(document).ready(function(){
    $(".menu_icon a").click(function(){
        $(".side_navigation_bar").toggle();
    })
});


$(document).ready(function() {
    $("input:text:visible:first").focus();
});


/*sidebar start*/

/*sidebar end*/

/*profile sidebar start*/
$(document).ready(function(){
    $(".profile_li").addClass("active_li");
});

$(document).ready(function(){
    $(".calls_li").mouseover(function(){
        $(".profile_li").toggleClass("active_li");
    });
});

$(document).ready(function(){
    $(".profile_li").mouseover(function(){
        $(".calls_li").toggleClass("active_li");
    });
});

$(document).ready(function(){
    $(".profile_li a").click(function(){
        $(".profile_li").addClass("active_li");
        $(".calls_li").removeClass("active_li");
    });
});

$(document).ready(function(){
    $(".calls_li a").click(function(){
        $(".calls_li").addClass("active_li");
        $(".profile_li").removeClass("active_li");
    });
});
/*profile sidebar end*/

/*footer start*/

/*footer end*/