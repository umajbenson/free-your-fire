$(document).ready(function() {
    $('#main-nav ul').smartmenus();
    $('#user-nav ul').smartmenus();
    
    
   /* $("input[type=checkbox]").checkboxradio();*/

    
    var pgurl = window.location.href.substr(window.location.href
    .lastIndexOf("/"));
    $(".sm-mint a").each(function(){
            if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
            $(this).addClass("current");
    });
   
});