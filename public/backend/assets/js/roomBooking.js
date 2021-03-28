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

/*form section start*/
$(document).ready(function(){
    var minDate = new Date();
    $("#start").datepicker({
        showAnim:'show',
        munberOfMonth:1,
        minDate: minDate,
        dateFormat:'dd-mm-yy',
        onClose:function(selectedDate){
            $('#end').datepicker("option" ,"minDate",selectedDate);
        }
    });
    $("#end").datepicker({
        showAnim:'show',
        munberOfMonth:1,
        minDate: minDate,
        dateFormat:'dd-mm-yy',
        onClose:function(selectedDate){
            $('#start').datepicker("option" ,"minDate",selectedDate);
        }
    });
});
/*form section end*/

/*disable a tag scrolling start*/
$('.stop_scrolling').click(function(e) {
    e.preventDefault();
    var user = $(this).data('user-code');
    $.ajax({
        // ajax settings...
    }); 
});
/*disable a tag scrolling end*/

/*footer start*/
if ($(window).width() <= 774){
    $(".footer").removeClass("fixed-bottom");
}
/*footer end*/