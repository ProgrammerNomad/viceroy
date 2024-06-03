 <!-- CART CSS STARTS -->
 <style>
     /* *,
  *::before,
  *::after {
    box-sizing: border-box;
  }
  html,
  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #0072ac;
    display: flex;
  } */

     .sidecart {
         z-index: 99999999;
         width: 100%;
         max-width: 450px;
         height: 100vh;
         background: #fff;
         position: fixed;
         right: 0;
         top: 0;
         display: flex;
         flex-direction: column;
         transition: all 0.3s ease;
         transition-delay: 0.2s;
     }

     .sidecart__overlay {
         position: absolute;
         width: 100%;
         height: 100%;
         z-index: 99999998;
         background: rgba(0, 0, 0, 0.5);
         visibility: visible;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         transition: all 0.3s cubic-bezier(0.77, 0.26, 0, 0.98);
     }

     .sidecart__overlay--hide {
         opacity: 0;
         visibility: hidden;
     }

     .sidecart__title {
         height: 70px;
         display: flex;
         justify-content: center;
         align-items: center;
         border-bottom: 1px solid #b0b0b0;
         background: #f6f6f6;
     }

     .sidecart__title-text {
         font-size: 34px;
         font-weight: 700;
     }

     .sidecart__close {
         position: absolute;
         left: 0;
         margin-left: 20px;
         font-size: 18px;
         color: grey;
         cursor: pointer;
     }

     .sidecart__items {
         width: 100%;
         display: flex;
         flex-direction: column;
         flex-grow: 1;
     }

     .sidecart__items--empty {
         justify-content: center;
     }

     .sidecart__empty-text {
         font-size: 18px;
         font-weight: 500;
         align-self: center;
         visibility: visible;
         transition: all 0.3s ease;
     }

     .sidecart__empty-text--hide {
         opacity: 0;
         visibility: hidden;
     }

     .sidecart__footer {
         height: 80px;
         display: flex;
         justify-content: center;
         align-items: center;
         border-top: 1px solid #b0b0b0;
         background: #f6f6f6;
     }

     .sidecart__checkout {
         width: 60%;
         height: 60px;
         border-radius: 10px;
         outline: none;
         box-shadow: none;
         color: white;
         background-color: #aa5a10;
         border: none;
         text-shadow: none;
         font-size: 30px;
         font-weight: 700;
         cursor: pointer;
         transition: all 0.1s ease-in-out;
     }

     .sidecart__checkout:hover {
         background: #e6b025;
         /* transform: skewX(-25deg); */
         transition: all linear .3s;
         -webkit-transition: all linear .3s;
         -moz-transition: all linear .3s;
         -ms-transition: all linear .3s;
         -o-transition: all linear .3s;
         /* -webkit-transform: skewX(-25deg);
    -moz-transform: skewX(-25deg);
    -ms-transform: skewX(-25deg);
    -o-transform: skewX(-25deg); */
     }

     .sidecart--close {
         transform: translateX(460px);
         opacity: 0.2;
     }

     .content {
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         position: absolute;
         width: 100%;
         height: 100%;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: end;
         z-index: -1;
     }

     .test-cart {
         width: 50px;
         height: 50px;
         /* background: #fff; */
         padding: 10px;
         border-radius: 50%;
         font-size: 20px;
         margin-bottom: 0px;
         cursor: pointer;
         text-align: left;
         transition: all 0.2s ease-in-out;
         color: #fff;
     }

     .test-cart:hover {
         color: #000000;
         background: #fff;
     }

     /* .test {
    cursor: pointer;
    margin: 20px;
    padding: 10px 20px;
    border-radius: 20px;
    border: none;
    width: 400px;
    height: 400px;
    outline: none;
    background: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
  } */
     /* .test__product {
    background-image: url("https://www.imobie.com/phoneclean/img/an_imgs_iphone.png");
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    width: 300px;
    margin: 0 auto;
    height: 300px;
  } */
     /* .test__btn {
    width: 300px;
    height: 60px;
    border-radius: 10px;
    border: none;
    background-color: #00b92c;
    font-size: 24px;
    font-weight: 700;
    color: #fff;
    outline: none;
    cursor: pointer;
    transition: all 0.1s ease-in-out;
  }
  .test__btn:hover {
    background: #05c305;
  } */
     .preview {
         width: 50%;
     }

     li.grid_4.item {
         display: flex;
         gap: 15px;
     }

     ul.items {
         display: flex;
         flex-direction: column;
         gap: 25px;
         justify-content: flex-start;
         width: 100%;
         height: 100%;
         padding-top: 25px;
     }
 </style>


 <!-- CART CSS ENDS -->
 <div class="sidecart__overlay sidecart__overlay--hide"></div>
 <div class="sidecart sidecart--close">
     <div class="sidecart__title">
         <a href="#" class="sidecart__close">
             <i class="fa fa-times" aria-hidden="true"></i>
         </a>
         <h1 class="sidecart__title-text">Cart</h1>
     </div>
     <div class="sidecart__items sidecart__items--empty">

         <ul class="items" id ="cartItems">


         </ul>
     </div>
     <div class="sidecart__footer">
         <a href="/checkout" class="common_btn">More Details</a>
     </div>
 </div>

 <!-- CART SCRIPT STARTS -->


 <script>
     var APP = APP || {};
     APP.sidecart = (function(APP, $) {
         var $test = $(".test"),
             $sidecart = $(".sidecart"),
             $closeCart = $(".sidecart__close"),
             $cartOverlay = $(".sidecart__overlay");

         function bindEvents() {
             console.log("sidecart init");

             $(".sidecart__close, .sidecart__overlay, .test-cart").on("click", function() {
                 toggleCart();
             });

             $test.find(".test__btn").on("click", function() {
                 addItemToCart();
             });
         }

         function toggleCart() {
             $sidecart.toggleClass("sidecart--close");
             $cartOverlay.toggleClass("sidecart__overlay--hide");
         }

         function addItemToCart() {
             var $items = $(".sidecart__items");
             var $emptyText = $(".sidecart__empty-text");
             $items.removeClass("sidecart__items--empty");
             $emptyText.addClass("sidecart__empty-text--hide");

             var $newItem = $("<div class='sidecart__item'>Item</div>");
             $items.append($newItem);
         }

         function init() {
             bindEvents();
         }

         return {
             init: init,
         };
     })(APP, jQuery);
     APP.sidecart.init();
 </script>

 <!-- CART SCRIPT ENDS -->
