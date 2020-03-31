  

 $(document).ready(function() {
 
   $("#slider").owlCarousel();
 
 });


$(window).on("load", function() {

  $("#about_owl").owlCarousel({

  	items:1,
    animateOut: 'fadeOut',
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
                items : 1,
            },
            // ブレイクポイント 768以上
            768 : {
                items : 1,
            }
          },
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    autoHeight : false,



  })

var biggestHeight = "0";
      
      $(" .owl-item ").each(function(){
          if ($(this).width() > biggestHeight ) {
              biggestHeight = $(this).width()*0.3
          }
      });
      $(".owl-item > img ").css( 'height' , biggestHeight );


      console.log(biggestHeight);
    




});

// function get_owl_height(){

//     $(window).on( "load",function(){
//       var biggestHeight = "0";
//       console.log('biggestHeight');
//       $(" .owl-item ").each(function(){
//           if ($(this).width() > biggestHeight ) {
//               biggestHeight = $(this).width()*0.75
//           }
//       });
//       $(".owl-carousel > img ").css( 'height' , biggestHeight );
//       });

//  console.log('biggestHeight');     
//   }



// $(document).ready(function() {
  
//   $("#about_owl").owlCarousel({
//     autoPlay : 5000,//自動でスライドするスピード。例：5000の場合、5秒
//     stopOnHover : true,//マウスオンでストップ
//     singleItem : true,//アイテムを1つにする
//     transitionStyle:"fade",//ふわっとする
//         paginationNumbers: true,//ページネーションを番号にする
//   });
  
// });

// $('#about_owl').owlCarousel({
//     animateOut: 'slideOutDown',
//     animateIn: 'flipInX',
//     items:1,
//     margin:30,
//     stagePadding:30,
//     smartSpeed:450
// });
