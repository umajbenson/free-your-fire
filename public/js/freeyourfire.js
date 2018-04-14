$(document).ready(function() {
    $('.main-nav-ul').smartmenus();
    $('.user-nav-ul').smartmenus();   
    
   /* $("input[type=checkbox]").checkboxradio();*/

    
    var pgurl1 = window.location.href.substr(window.location.href
    .lastIndexOf("/"));
    var pgurl2 = window.location.href.substr(window.location.href.lastIndexOf("/show"));
    $(".sm-mint a").each(function(){
        if($(this).attr("href") == pgurl1 || $(this).attr("href") == '') {
            $(this).addClass("current");
           
        }
        if($(this).attr("href") == pgurl2) {
            $(this).addClass("current");
            $(this).parent().parent().parent().children().addClass('current');
    }
       
        
        

          
    });

    $(".inline").colorbox({inline:true, width:"100%"});
   
});

