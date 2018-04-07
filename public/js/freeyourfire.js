$(document).ready(function() {
    $('#main-nav ul').smartmenus();
    $('#user-nav ul').smartmenus();
    $('#admin-nav ul').smartmenus();
    
    
   /* $("input[type=checkbox]").checkboxradio();*/

    
    var pgurl = window.location.href.substr(window.location.href
    .lastIndexOf("/"));
    $(".sm-mint a").each(function(){
            if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
            $(this).addClass("current");
    });

   
	$(function() {
		$('#main-nav ul').smartmenus({
			subMenusSubOffsetX: 6,
			subMenusSubOffsetY: -8
		});
	});

   
});