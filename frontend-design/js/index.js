
$(document).ready(function(){
          /*-------------------------
    checkout one click toggle function
    --------------------------*/
    var checked = $( '.sin-payment input:checked' )
    if(checked){
        $(checked).siblings( '.payment-box' ).slideDown(900);
    };
	 $( '.sin-payment input' ).on('change', function() {
        $( '.payment-box' ).slideUp(900);
        $(this).siblings( '.payment-box' ).slideToggle(900);
    });
    
     /*-------------------------
    Create an account toggle
    --------------------------*/
    $('.checkout-toggle2').on('click', function() {
        $('.open-toggle2').slideToggle(1000);
    });
    
    $('.checkout-toggle').on('click', function() {
        $('.open-toggle').slideToggle(1000);
    });
    
        
           /*--- checkout toggle function ----*/
    $('.checkout-click1').on('click', function() {
        e.preventDefault();
        $('.checkout-login-info').slideToggle(900);
    });
    
    
    /*--- checkout toggle function ----*/
    $('.checkout-click3').on('click', function() {
        e.preventDefault();
        $('.checkout-login-info3').slideToggle(1000);
    });
        
    
 
    
    

         $(".trigger ").hover(function () {
             $(".drop").slideUp();
      $(this).parent().find(".drop").stop().slideToggle();
    });  
        
        
        $(".all_cat ").click(function () {
             $(".all_cat_data .category-menu").slideUp();
      $(".all_cat_data .category-menu").stop().slideToggle();
    });    
 


    
 
    
    
if ($(window).width() < 1023) {
   //alert('Less than 960');
    
      $(".all_cat_data .category-menu ul li").on("click", function () {
       $(".all_cat_data .category-menu ul li").removeClass("active");
    if($(".category-menu ul li").hasClass("has_dropdown")){
        $(this).toggleClass("active");
    }

});
    
    
    
}
else {
      $(".all_cat_data .category-menu ul li").mouseover(function () {
          $(".all_cat_data .category-menu ul li").removeClass("active");
    if($(".category-menu ul li").hasClass("has_dropdown")){
        $(this).toggleClass("active");
    }else {
          $(".all_cat_data .category-menu ul li").removeClass("active");
    };

});
       $(".all_cat_data .category-menu ul li").mouseleave(function () {
    if($(".category-menu ul li").hasClass("has_dropdown")){
        $(this).removeClass("active");
    }

});
}

    
   
    
    //
//    $(function() {
//  $(".all_cat_data .category-menu ul li").on("click", function(e) {
//   
//        $(".all_cat_data .category-menu ul li").removeClass("active");
//      
//        if($(".category-menu ul li").hasClass("has_dropdown")){
//        $(this).toggleClass("active");
//    }else {
//          $(".all_cat_data .category-menu ul li").removeClass("active");
//    };
//      
//  });
//  $(document).on("click", function(e) {
//    if ($(e.target).is("body") === false) {
//   $(".all_cat_data .category-menu ul li").removeClass("active");
//    }
//  });
//});
    
    
    
    
    $(".nav_menu ul li").hover( function (event) {
        //event.preventDefault();
       // $(".nav_menu ul li").toggleClass("active");
    if($(".nav_menu ul li").hasClass("has_subMenu")){
        $(this).toggleClass("active");
    }else {
         $(".nav_menu ul li").toggleClass("sactive");
    };

}); 
    
        
        
        $("ion-icon.home").click(function(){
           $(".mobile_side_nav").toggleClass("is-visible");
        });
          $("ion-icon.close_side_nav").click(function(){
          $(".mobile_side_nav").removeClass("is-visible");
        });

    
    
    
    
    
    
      // slider
    var swiper = new Swiper('.slider-container', {
        
        	speed: 600,
		autoplay: {
			delay: 4500,
			disableOnInteraction: false,
      	},
        	pagination: {
			el: '.pagination',
			type: 'fraction',
      	},
      	navigation: {
			nextEl: '.button-next',
			prevEl: '.button-prev',
      	},
    });
      
    
    
    
      
      
      
      // mobile search open
      
      $("#search_open").on("click", function(){
          $(".mobile_search").css({'transform':'translateY(0%)',});
      })
       $("#search_close").on("click", function(){
          $(".mobile_search").css({'transform':'translateY(-100%)',});
      })

      
      
      // cart open close
      document.getElementById("cart").addEventListener("click", function(){
          document.getElementsByClassName("cart_bar")
           var x = document.getElementsByClassName("cart_bar");
  x[0].classList.add("is-open");
      })
      
       document.getElementById("cls_cart").addEventListener("click", function(){
          document.getElementsByClassName("cart_bar")
           var x = document.getElementsByClassName("cart_bar");
  x[0].classList.remove("is-open");
      })
    
    
    
    
//             const collapse__link = document.querySelectorAll('.collapse__link')
// function colorLink(){
//   collapse__link.forEach(l=> l.classList.remove('active'))
//   this.addEventListener("click", function(){
  
//       this.classList.add('active')
//   })
// }
// collapse__link.forEach(l=> l.addEventListener('click', colorLink))
    
    
$(".collapse__link").on("click", function(){
    //$(".collapse__link").removeClass("active");
  $(this).toggleClass("active");
})
    
    
    
// range slider
    
      $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
    
    
    
    
   let dropDowns = Array.from(document.querySelectorAll('.main-menu-li_dropdown'));

const handleClick = (e) => {
  e.preventDefault();
  dropDowns.forEach(node => {
    node.classList.remove('active');
  });
  e.currentTarget.classList.add('active');
  
}

dropDowns.forEach(node => {
  node.addEventListener('click', handleClick)
});
    
    
    
    // filter sidebar
 
    document.querySelector("ion-icon.filter").addEventListener("click", function(){
            let x = document.getElementById("filter_mobile");
        x.classList.add("is-visible");
    }); 
    
    document.querySelector("ion-icon.mobile_fil_close").addEventListener("click", function(){
            let x = document.getElementById("filter_mobile");
        x.classList.remove("is-visible");
    });
  
    
    
    
    //  single product images multiple
   
    });
    
    
    
      
    
    
    

    
    
//var allTriggers = document.querySelectorAll('.trigger');
//for (var i = 0; i < allTriggers.length; i++) {
//  allTriggers[i].addEventListener('click', function() {
//      this.nextElementSibling.classList.toggle('is-visible');
//  });
//}
    
    
    

          var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      thumbs: {
        swiper: galleryThumbs
      }
    }); 
    

var swiper = new Swiper('.rel_Swiper', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
             480: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      }
    });
    



//
//
//    document.getElementById("inc").addEventListener("click", function(){
//                             document.getElementById("num").stepUp(); 
//                        });
//                             document.getElementById("dec").addEventListener("click", function(){
//                             document.getElementById("num").stepDown(); 
//                        });


    $('.inc').on('click', function() {
		if ($(this).prev().val()) {
			$(this).prev().val(+$(this).prev().val() + 1);
		}
	});
	$('.dec').on('click', function() {
		if ($(this).next().val() > 1) {
			if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		}
	});

        
   
    /*--- checkout toggle function ----*/
    $('.checkout-click1').on('click', function(e) {
        e.preventDefault();
        $('.checkout-login-info').slideToggle(900);
    });
    
    
    /*--- checkout toggle function ----*/
    $('.checkout-click3').on('click', function(e) {
        e.preventDefault();
        $('.checkout-login-info3').slideToggle(1000);
    });



$('.myaccount-tab-menu a').each(function(){
    if(window.location.href == this.href){
        $(this).addClass('active');
    }
});

    
    $(".btn-dot").on("click", function(){
           $(".btn-dot").next(".dropdown_menu").removeClass("open");
    $(this).next(".dropdown_menu").addClass("open");
        
})
 

//$(".btn-dot").click(function(e) {
//  $(this).next(".dropdown_menu").toggleClass("open");
//if(e.target != $(".dropdown_menu") && $(".btn-dot")){
//    console.log('You clicked outside');
//   } else {
//      console.log('You clicked inside');
//  }
//});



   
    
