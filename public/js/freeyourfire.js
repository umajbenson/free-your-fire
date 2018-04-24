$(document).ready(function() {
    $('.main-nav-ul').smartmenus();
    $('.user-nav-ul').smartmenus();   
    
   /* $("input[type=checkbox]").checkboxradio();*/

    addCurrentClass();

    if ($(".inline").length > 0) {
        $(".inline").colorbox({inline:true, width:"100%"});
    }
    

    //alert($('#main-nav').scrollTop());

    $(window).scroll(function () { 

      /* alert($('#main-nav').scrollTop());*/
    
        if ($(window).scrollTop() > 157) {
          $('#main-nav').addClass('navbar-fixed');
        }
    
        if ($(window).scrollTop() < 158) {
          $('#main-nav').removeClass('navbar-fixed');
        }
      });
   
});

function addCurrentClass () {

    var pgurl1 = window.location.href.substr(window.location.href.lastIndexOf("/"));
    var pgurl2 = window.location.href.substr(window.location.href.lastIndexOf("/show"));
    var pgurl3 = window.location.href.substr(window.location.href.lastIndexOf("/admin"));

    $(".sm-mint a").each(function(){
        if($(this).attr("href") == pgurl1 || $(this).attr("href") == '' || $(this).attr("href") == pgurl2 || $(this).attr('href') == pgurl3) {
            $(this).addClass("current");
            $(this).parent().parent().parent().children().addClass('current');                
        
             if ($(this).attr('href').endsWith('admin')) {
                 $('.admin-home').addClass('current');
             }
        }
    });
}