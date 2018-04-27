$(document).ready(function() {
    
    smartMenus('.main-nav-ul');

    smartMenus('.user-nav-ul');
     
   /* $("input[type=checkbox]").checkboxradio();*/

    addCurrentClass('.sm-mint a', '/', '/show', '/admin', '/admin', '.admin-home');

    stickyNav1('#main-nav', 160);

    stickyNav2('#admin-nav', 256);

    lightbox('.inline'); 
});

function smartMenus(ulClass) {
    $(ulClass).smartmenus();
}

function addCurrentClass(anchorSelector, param1, param2, param3, param4, duplicateNavItem) {

    var pgurl1 = window.location.href.substr(window.location.href.lastIndexOf(param1));
    var pgurl2 = window.location.href.substr(window.location.href.lastIndexOf(param2));
    var pgurl3 = window.location.href.substr(window.location.href.lastIndexOf(param3));

    $(anchorSelector).each(function() {
        if($(this).attr("href") == pgurl1 || $(this).attr("href") == '' || $(this).attr("href") == pgurl2 || $(this).attr('href') == pgurl3) {
            $(this).addClass("current");
            $(this).parent().parent().parent().children().addClass('current');                
        
            if ($(this).attr('href').endsWith(param4)) {
                 $(duplicateNavItem).addClass('current');
            }
        }
    });
}

function stickyNav1(navID, scrollAmt) {
    $(window).scroll(function () { 
      
        if ($(window).scrollTop() > scrollAmt) {
            $(navID).addClass('navbar-fixed');
        }
      
        if ($(window).scrollTop() < (scrollAmt+1)) {
            $(navID).removeClass('navbar-fixed');
        }
    });
}

function stickyNav2(navID, scrollAmt) {
    $(window).scroll(function () { 
      
        if ($(window).scrollTop() > scrollAmt) {
            $(navID).addClass('navbar2-fixed');
        }
      
        if ($(window).scrollTop() < (scrollAmt+1)) {
            $(navID).removeClass('navbar2-fixed');
        }
    });
}

function lightbox(imageAnchorClass) {
    if ($(imageAnchorClass).length > 0) {
        $(imageAnchorClass).colorbox({inline:true, width:"100%"});
    }
}