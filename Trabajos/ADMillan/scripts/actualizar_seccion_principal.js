$(document).ready(function(){ 
$("#menu_nav a").each(function(){ 
var href = $(this).attr("href"); 
$(this).attr({ href: "#"}); 
$(this).click(function(){ 
$("#principal").load(href); 
}); 
}); 
});