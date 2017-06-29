jQuery(document).ready(function($) {

    // Labels Effects 
    $(window).load(function(){
        $(".form-group .label-effect").val("");
        
        $(".form-group .label-effect").focusout(function(){
            if($(this).val() != ""){
                $(this).addClass("has-content");
            }else{
                $(this).removeClass("has-content");
            }
        })
    });


    //Owl-Carousel
    $('.owl-carousel').owlCarousel({
        margin: 40,
        autoplay: true,
        autoplayHoverPause: true,
        rewind: true,
        autoplayTimeout:8000,
        nav: true,
        navText: ["<i class='glyphicon glyphicon-chevron-left'></i>", "<i class='glyphicon glyphicon-chevron-right'></i>"],
    	responsive: {
            0: {
                items: 1,
                dots: true,
                nav: false
            },
            768: {
                items: 2,
                dots: true,
                nav: false
            },
            1024: {
                items: 2
            }
        }
    	
    });

    $('.gallerybox').gallerybox();


    $(window).on('scroll', function () {
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();

        // console.log(scrollHeight);
        // console.log(scrollPosition);

        if ((scrollHeight - scrollPosition) / scrollHeight > 0.12) {
            $('.social-networks-right').removeClass('fadeOut').addClass('fadeIn');
            $('.back-to-top').addClass('show fadeOut');
        } else {
            $('.back-to-top').removeClass('show fadeOut').addClass('fadeIn');
            $('.social-networks-right').addClass('animated fadeOut');

            // $('.footer-social-networks').fadeOut('slow/400/fast');
        }
    });

    var backToTop = $('.back-to-top');
    backToTop.on("click", function() {
      $("body").velocity("scroll", { 
        duration: 2000,
        easing: "easeInBack"
      });
    });
    $icon = $('.arrow-header i');
    $icon.velocity({
      translateY: "10px"
    }, {
      loop: true
    }).velocity("reverse");

});