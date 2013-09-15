$(document).ready(function(){
    $(".promos").click(function(){
        if ($(this).css("width") == "200px") {
            $(this).css("width", "150px");
            $(this).css("height", "150px");
            $(this).css("z-index", -3);
        } else {
            $(this).css("width", "200px");
            $(this).css("height", "200px");
            $(this).css("z-index", +3);
        }
    });
})