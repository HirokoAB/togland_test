//スライダーのJS
 $(document).ready(function() {
 
   $("#slider1").owlCarousel();
 
 });


$(window).on("load", function() {

  $(".owl-carousel").owlCarousel({

  	items:3,
    loop:true,
    margin:5,
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
                items : 3,
            }
          },
    autoplay:true,
    autoplayTimeout:9000,
    autoplayHoverPause:true,
    autoHeight : true,
    itemsScaleUp : true,//アイテムを自動的に大きくする



  })
});
