$(document).ready(function(){
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
     items : 10,
     
// Пагинация
    pagination : true,
    paginationNumbers: false,
    responsiveClass:true,
    
    navText:["<span class='glyphicon glyphicon-menu-left' aria-hidden='true'></span>","<span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span>"],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})
});

