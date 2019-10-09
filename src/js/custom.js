( function($) {

      $.fn.RevealPinDescriptionOnHover = function(){

        
        var ID = {
            circle: function(div){
                return $(div).attr("data-id");
            }
        };

        $(this).hover(function(){
            var description = ID.circle(this);
            $("#" + description).toggle();
        });
        
    };



$('.circle').RevealPinDescriptionOnHover();

  $.fn.parallax = function() {
    var scrolled = $(window).scrollTop();
    this.css('top',-(scrolled*0.30)+'px');
};

  "use strict";
  var $body = $('body');
  var viewportWidth = $(window).width();
  var viewportHeight = $(window).height();

  $( document ).ready(function(){

    // Class phone-number on "a" link will create a phone link
    $body.find('.phone-number').each(function(){
      var $pnum = 'tel:' + $(this).text();
      $(this).attr('href', $pnum.replace(/-/g, "").replace(/\(|\)/g, "").replace(/ /g, ""));
    });

    // Add drop down Icon on
    $body.find('.main-navigation > div > ul > li > ul > li.current_page_item').prepend('<i class="fa fa-chevron-right" aria-hidden="true"></i>');

    if (viewportWidth > 1024) {
      stickyMenu();
    }

    var $mm = $body.find('#cbp-spmenu-s2')
    var $dm = $mm.find('ul > li')
    $dm.each(function(i) {
      $(this)
        .find('.sub-menu')
        .parent()
        .prepend(
          '<input type="checkbox" name="accordion" id="acc-' +
            i +
            '"/><label for="acc-' +
            i +
            '"></label>'
        )
    });
  }); // END of document ready

  $( window ).resize(function() {
    var viewportWidth = $(window).width();
    if (viewportWidth > 1024) {
      if ($body.find('#showRight').hasClass('is-active')) {
        $body.find('#showRight').click();
        $body.find('div.body-overlay').fadeOut('10')
      }
      stickyMenu();
    }
  });

  function stickyMenu() {
    // Sticky Navigation
    var $navWrapcontact = $body.find('.contact-container');
    var $navWrap = $body.find('.nav-container');
    var $darkNav = $body.find('.nav-container.dark-nav');
    var $headerWrap = $body.find('.banner, .white-bg').height();
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if (scroll <= $headerWrap){
          $navWrap.css({'position':'fixed','top': ('0' - scroll)});
          $darkNav.css({'position':'relative'})
          $navWrapcontact.removeClass('contact-info-header');
          $navWrap.removeClass('sticky');
        } else {
          $navWrap.css({'top':'0px'});
          $darkNav.css({'position':'fixed'});
          $navWrap.addClass('sticky');
          $navWrapcontact.addClass('contact-info-header');
        }
    });
    // Sticky Navigation - END
  }

  // Mobile Menu - START
  var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
  showRight = document.getElementById( 'showRight' ),
  body = document.body;

  var toggles = $body.find("#showRight");
  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  }

  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      if (this.classList.contains("is-active") === true){
        this.classList.remove("is-active");
        if ( $('#showRight').is(':visible') ) $body.find('div.body-overlay').fadeOut('10');
        $body.find('.nav-icon3').removeClass('open');
        $body.removeClass('noScroll');
      } else {
        this.classList.add("is-active");
        if ( $('#showRight').is(':visible') ) $body.find('div.body-overlay').fadeIn('10');
        $body.find('.nav-icon3').addClass('open');
        $body.addClass('noScroll');
      }
      classie.toggle( this, 'active' );
      classie.toggle( menuRight, 'cbp-spmenu-open' );
    });
  }

  $(window).scroll(function(e){
    // $('.banner-img').parallax();
  });

  var $status = $('.pagingInfo');
  var $slickElement = $('.slideshow');
  
  $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    if (i < 10) {
      $status.text("0" + i + ' / 0' + slick.slideCount);
    } else {
      $status.text(i + ' / ' + slick.slideCount);
    }
    
  });
  
  $slickElement.slick({
    autoplay: true,
    dots: false,
    arrows: true,
    autoplaySpeed: 5000,
    prevArrow:'<span class="slide-prev"></span>',
    nextArrow:'<span class="slide-next"></span>'
  });

  setTimeout(function(){
    // $('.group-01').fadeOut(300);
    // $('.group-04').delay(300).fadeIn(300);
    // $('.group-02').delay(5000).fadeOut(300);
    // $('.group-03').delay(6000).fadeIn(300);
    // $('.group-03').delay(4000).fadeOut(300);
    // $('.group-04').delay(11000).fadeIn(300);
  }, 9000);

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  function RemoveRedBorderEmail() {
    var input = document.getElementById("email");
    document.getElementById("email").placeholder = "Email";
    document.getElementById("email").classList.remove("box");
    input.classList.remove("wpcf7-not-valid");
  }
    function RemoveRedBorderPhone() {
    var input = document.getElementById("mobile-number");
    document.getElementById("mobile-number").placeholder = "Mobile Number";
    document.getElementById("mobile-number").classList.remove("box");
    input.classList.remove("wpcf7-not-valid");
  }
    function RemoveRedBorderName() {
    var input = document.getElementById("your-name");
    document.getElementById("your-name").placeholder = "Your Name";
    document.getElementById("your-name").classList.remove("box");
    input.classList.remove("wpcf7-not-valid");
  }

  function validateForEmail() {
    var email = document.getElementById("email").value;
    var inputForEmail = document.getElementById("email");

    if (validateEmail(email)) {

    } else {
    	inputForEmail.classList.add("wpcf7-not-valid");
      document.getElementById("email").placeholder = "The e-mail address entered is invalid";
      inputForEmail.classList.add("box");
      document.getElementById("email").onclick = function() {RemoveRedBorderEmail()};
    }
      
    return false;
  }

  function validateNumber(mobile) {

	  if (/^\d{10}$/.test(mobile)) {
		    return true
		} else {
		    
		    return false
		}
  }

    function validateForMobile() {
    var mobile = document.getElementById("mobile-number").value;
    var inputForMobile = document.getElementById("mobile-number");

    if (validateNumber(mobile) == false) {
    	inputForMobile.classList.add("wpcf7-not-valid");
    	document.getElementById("mobile-number").placeholder = "The Mobile Number entered is invalid";
    	inputForMobile.classList.add("box");
      document.getElementById("mobile-number").onclick = function() {RemoveRedBorderPhone()};
    }
      
    return false;
  }

   function validateName(name) {
   	var value = "Name is required";
   	var inputForName = document.getElementById("your-name");
   		if(name == null || name.length === 0){
   			return true
   		}else if (name == value) {
   			return true
   		}else{
   			return false
   		}
  	}

  function validateForName() {
    var name = document.getElementById("your-name").value;
    var inputForName = document.getElementById("your-name");

    if (validateName(name) == true) {
    	document.getElementById("your-name").placeholder = "Name is required";
    	inputForName.classList.add("box");
    	document.getElementById("your-name").onclick = function() {RemoveRedBorderName()};
    }
      
    return false;
  }

  var button_name = document.getElementById("submit");

  button_name.onclick = function() {validateForEmail(); validateForMobile(); validateForName();};



} )(jQuery);
