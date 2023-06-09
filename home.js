$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 550) {
            $('.navbar').addClass('visible');
            $('.back-to-top').addClass('visible');
        }

        else{
            $('.navbar').removeClass('solid');
            $('.back-to-top').removeClass('visible');
        }

      });
});

$(document).ready(function(){
    //add smooth scroolling to all links

    $("a").on('click', function (event){
        //make sure this. hash has a value brfore overriding default behaviour
        if (this.hash !== "") {
            //prevent default
            event.preventDefault();

            //store hash
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
              });
        } //end if
    });

});