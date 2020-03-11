//スライダーのJS
 $(document).ready(function() {
 
   $("#slider1").owlCarousel();
 
 });


$(window).on("load", function() {

  $(".owl-carousel").owlCarousel({

  	items:2,
    loop:true,
    margin:10,
    responsive: true,
    responsive : {　//レスポンシブ対応
            // ブレイクポイント 0以上
            0 : {
                items : 1,
            },
            // ブレイクポイント 480以上
            480 : {
                items : 2,
            },
            // ブレイクポイント 768以上
            768 : {
                items : 2,
            }
          },
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,


  })

   $('#content').InfiniteScroll({
   	itemsMobile : [479,1],
   })


});

