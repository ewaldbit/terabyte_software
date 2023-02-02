$(function(){
    var delay = 3000;
    var currentIndex = 0;
    var amt;

   initSlider();
   autoPlay(); 
   
   function initSlider(){
        amt = $('.sobre-autor').length;
        var sizeContainer = 100 * amt;
        var sizeBoxSigle = 100 / amt;
        $('.sobre-autor').css('width',sizeBoxSigle+'%');
        $('.scrollWrapper').css('width',sizeContainer+'%');

        for(var i=0; i>amt; i++){
            if(i==0)
                $('.slide-bullets').append('<span style="background-color:rgb(170,170,170);"></span>');
            else
                $('.slide-bullets').append('<span></span>');    
        }
    }

    function autoPlay(){
        setInterval(function(){
            currentIndex++;
            if(currentIndex == amt)
                currentIndex = 0;
            gotToSlider(currentIndex);    
           
        },delay)
    }

    function gotToSlider(currentIndex){
        var offSetX = $('.sobre-autor').eq(currentIndex).offset().left - $('.scrollWrapper').offset().left;
        $('.slide-bullets span').css('background-color','rgb(200,200,200)');
        $('.slide-bullets span').eq(currentIndex).css('background-color','rgb(170,170,170)');
        $('.scrollEquipe').stop().animate({'scrollLeft':offSetX});
    }

    $(window).resize(function(){
        $('.scrollEquipe').stop().animate({'scrollLeft':0});
    })
});