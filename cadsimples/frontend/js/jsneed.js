//abrir o menu ao clicar no botao "menu-toglle"
$("#menu-toglle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");   
});

// Mudar o Z-index após clicar no botao menu
$("#menu-toglle").click(function() {
    setTimeout(function() {
        $("#sidebar-wrapper").toggleClass("zz-dex1");
        $("#sidebar-wrapper").toggleClass("zz-dex2");
    }, 150);
});

//
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});

