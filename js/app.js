(function($){	
	$(document).ready(function() {		


// keep this for later improvements
// possible autoload some functions after window resizing
// example: (scale-down-text css props are jQuery driven. Won't change on resize, only after reload)
window.onresize = function() {
	
}


var is_mobile = $(window).width() < 400 ? true : false;
var is_landscape = ($(window).width() > 400 && $(window).width() < 767) ? true : false;




/**
*
* Type out effect 
*
*/

var i = 0;
var message = 'A MARKETING AGENCY ';
var message2 = 'THAT\'S MORE THAN';
var message3 = "AWESOME";
var speed = 60;



function typeWriter1() {			 
	  if (i < message.length) {
	    document.getElementById("type-writer-text-1").innerHTML += message.charAt(i);
	    i++;
	    setTimeout(typeWriter1, speed);
	  }
	  else {			  	
	  	i = 0;	  	
	  	typeWriter2();
	  }
}

function typeWriter2() {		  
  if (i < message2.length) {
    document.getElementById("type-writer-text-2").innerHTML += message2.charAt(i);
    i++;
    setTimeout(typeWriter2, speed);
  }
  else {
	  i = 0;
	  typeWriter3();
	}
}

function typeWriter3() {		  
  if (i < message3.length) {		  
    document.getElementById("type-writer-text-3").innerHTML += message3.charAt(i);    
    i++;
    setTimeout(typeWriter3, speed);		    
  }
  else {
  	// add an outstanding dot to text
  	document.getElementById("type-writer-text-3").innerHTML += '<span id="dot">.</span>';
  	$('#dot').css('position', 'absolute')
	  i = 0;	 
	  
	  setTimeout(function() {
	  	// hide first message
	  	$('#type-writer-text-1,#type-writer-text-2,#type-writer-text-3').hide()
	  	
	  	// Start Slide in effect Now!!!
	  	slideInNow();
	  	  	
	  }, 2000);
	  
	}
}

// **** Start first animation
typeWriter1();


/**
*
* Slide in Effect
*
**/
function slideInNow() {	

	// first slide start
	now($('#slide-in-text-1'));

	// delay each slide
	setTimeout(function() {
		now($('#slide-in-text-2'));
	}, 1600)
	setTimeout(function() {
		now($('#slide-in-text-3'));
	}, 3200)
	
	setTimeout(function() {		
		$('#slide-in-text-1,#slide-in-text-2,#slide-in-text-3').hide()
		$('#slide-up-text-1, #slide-up-text-2').css('display', 'block'); 		
		
		// Start slide in from bottom animation		
		slideFromBotton();

	}, 5500)
	
}

function now(e) {
	e.css('display', 'block')
	e.animate({left: 0, right: 0, opacity: 1}, 1000);	
}


/**
*
* Slide up Effect
*
**/
function slideFromBotton() {

	up($('#slide-up-text-1'));

	// delay second slide up text
	setTimeout(function() {
		up($('#slide-up-text-2'));
	}, 1200)
	setTimeout(function() {
		$('#slide-up-text-1, #slide-up-text-2').hide()
	}, 4000)

	setTimeout(function() {
		
		// Start scaling down effect`
		scaleDown();
	
	}, 5000)
	
}

function up(e) {	
	e.animate({bottom: 0, opacity: 1}, 1000);
	
}

/**
*
* Scale down Effect
*
**/
function scaleDown() {
	
	let font_size = is_mobile == true ? '48px' : (is_landscape === true) ? '57px' : '130px';
	
	if (is_mobile) {
		$('#scale-down-text').css({'display': 'block', 'text-align': 'left','padding-bottom': '40px', 'margin-top': '40px'})
	} 
	else if(is_landscape) {
		$('#scale-down-text').css({'display': 'block', 'text-align': 'left','padding-left': '60px', 'padding-bottom': '20px', 'margin-top': '20px'})
	}
	else {		
		$('#scale-down-text').css({'display': 'block', 'text-align': 'left', 'padding-left': '120px', 'margin-top': '80px'})
	}
	
	$('.button-header-container').css('display', 'block')
	$('#scale-down-text').animate({fontSize: font_size, width: '100%', opacity: 1 }, 700);
	

	setTimeout(function() {
		$('.flashing-dot').css('visibility', 'visible');
		$('.flashing-dot').addClass('flashing-dot-animation');
		setTimeout(function() {
			$('.header-arrow-container').css('opacity', '1')
			$('.as-button--header').css('opacity', '1')
			
		}, 1800)
		
	}, 1000)
}

//Anchor Buttons
let ignore_observer = false;
$('.to_services').on('click', function() {
	autoScrollDown('services-block');
})
// recent change, this button have to scroll to contact form instead of Team section
$('.to_team').on('click', function() {
	ignore_observer = true	
	autoScrollDown('contact-block');	
})
$('.to_contact').on('click', function() {
	autoScrollDown('contact-block');
})
		


/**
*
* Auto Scroll down/up when the block 
* comes in to view at least for 0.3(30%)
*
*/

if ($(window).width() > 755) {
	

	let options_block = {
	    root: null,
	    rootMargin: '0px',
	    threshold: 0.3
	};
	let options_services = {
	    root: null,
	    rootMargin: '0px',
	    threshold: 0.4
	};


	// watch Service Block
	let observer_services_block = new IntersectionObserver(servicesBlockCallbackFunc, options_block);
		observer_services_block.observe(document.getElementById('services-block'));

	let observer_services = new IntersectionObserver(servicesCallbackFunc, options_services);
		observer_services.observe(document.getElementById('service-1'));
		observer_services.observe(document.getElementById('service-2'));
		observer_services.observe(document.getElementById('service-3'));

	// watch Team Block
	let observer_team = new IntersectionObserver(teamCallbackFunc, options_block);
		observer_team.observe(document.getElementById('team-block'));

	// watch Contact Block
	let observer_contact = new IntersectionObserver(contactCallbackFunc, options_block);
		observer_contact.observe(document.getElementById('contact-block'));



	// Services Block callback
	function servicesBlockCallbackFunc(entries, observer) {	

	  	entries.forEach(entry => {
		   
		    if (entry.isIntersecting) {
		    	
		    	autoScrollDown('services-block');
		    		    	
		    }    
	  });
	}

	// Services DIVS callback
	function servicesCallbackFunc(entries, observer) {	

	  	entries.forEach(entry => {	   

		    if (entry.isIntersecting) {
		    	$('#'+entry.target.id).css('opacity', '1')
		    	
		    	if (entry.target.id === 'service-1') {
		    		
		    		$('#'+entry.target.id).animate({left: 0}, 1000);	    		 
		    		
		    	}
		    	if (entry.target.id === 'service-2') {
		    		$('#'+entry.target.id).animate({bottom: 0}, 800);
		    	}
		    	if (entry.target.id === 'service-3') {
		    		$('#'+entry.target.id).animate({right: 0}, 1000);
		    		// animate the button
		    		$('.services-button-container > button').animate({opacity: 1}, 2000);
		    	}		    	
		    }   
	    
	  });
	}

	// Team Block callback
	function teamCallbackFunc(entries, observer) {	

	  	entries.forEach(entry => {		   
		    
		    // when scrolling by clicking change the final scroll destination
		    if (entry.isIntersecting && ignore_observer) {
		    	autoScrollDown('contact-block');
		    	// reset ignoring
		    	ignore_observer = false;
		    }
		    else if (entry.isIntersecting) {
		    	autoScrollDown('team-block');
		    }
	  });
	}

	// Contact Block callback
	function contactCallbackFunc(entries, observer) {	

	  	entries.forEach(entry => {
		   
		    if (entry.isIntersecting) {		    	
		    	autoScrollDown('contact-block');		    	
		    }    
	  });
	}	
}
// Landscape Mode
else if($(window).width() > 400 && $(window).width() < 860) {
	
	let options_block = {
	    root: null,
	    rootMargin: '0px',
	    threshold: 0.3
	};
	let options_services = {
	    root: null,
	    rootMargin: '0px',
	    threshold: 0.3
	};	

	let observer_services = new IntersectionObserver(servicesCallbackFunc, options_services);
		observer_services.observe(document.getElementById('service-1'));
		observer_services.observe(document.getElementById('service-2'));
		observer_services.observe(document.getElementById('service-3'));

	// watch Team Block
	let observer_team = new IntersectionObserver(teamCallbackFunc, options_block);
		observer_team.observe(document.getElementById('team-block'));

	// watch Contact Block
	let observer_contact = new IntersectionObserver(contactCallbackFunc, options_block);
		observer_contact.observe(document.getElementById('contact-block'));



	// Services DIVS callback
	function servicesCallbackFunc(entries, observer) {	

	  	entries.forEach(entry => {	   

		    if (entry.isIntersecting) {
		    	$('#'+entry.target.id).css('opacity', '1')
		    	
		    	if (entry.target.id === 'service-1') {		    		
		    		$('#'+entry.target.id).animate({left: 0}, 1000);
		    		autoScrollDownServices('service-1');
		    		
		    	}
		    	if (entry.target.id === 'service-2') {
		    		autoScrollDownServices('service-2');		    		
		    		$('#'+entry.target.id).animate({left: 0}, 1000);
		    	}
		    	if (entry.target.id === 'service-3') {		    		
		    		autoScrollDownServices('service-3');
		    		$('#'+entry.target.id).animate({left: 0}, 1000);
		    		// animate the button
		    		$('.services-button-container > button').animate({opacity: 1}, 2000);
		    	}		    	
		    }   
	    
	  });
	}

	// Team Block callback
	function teamCallbackFunc(entries, observer) {	

	  	entries.forEach(entry => {
		   
		    if (entry.isIntersecting && ignore_observer) {
		    	autoScrollDown('contact-block');
		    	ignore_observer = false;
		    }
		    else if (entry.isIntersecting) {
		    	autoScrollDown('team-block');
		    }
	  });
	}

	// Contact Block callback
	function contactCallbackFunc(entries, observer) {	

	  	entries.forEach(entry => {
		   
		    if (entry.isIntersecting) {

		    	autoScrollDown('contact-block');		    		    	
		    }    
	  });
	}

	function autoScrollDownServices(block_name) {

		let this_height = $('#'+block_name).offset().top;
		let scrollTop = this_height;	

		$('html, body').animate({scrollTop}, 'slow');

	}
}
// Mobile res
else {
	let options_block = {
	    root: null,
	    rootMargin: '0px',
	    threshold: 0.3
	};
	let options_services = {
	    root: null,
	    rootMargin: '0px',
	    threshold: 0.3
	};	

	// watch Services blocks
	let observer_services = new IntersectionObserver(servicesCallbackFunc, options_services);
		observer_services.observe(document.getElementById('service-1'));
		observer_services.observe(document.getElementById('service-2'));
		observer_services.observe(document.getElementById('service-3'));

	// watch Team Block
	let observer_team = new IntersectionObserver(teamCallbackFunc, options_block);
		observer_team.observe(document.getElementById('team-block'));

	// watch Contact Block
	let observer_contact = new IntersectionObserver(contactCallbackFunc, options_block);
		observer_contact.observe(document.getElementById('contact-block'));



	// Services DIVS callback
	function servicesCallbackFunc(entries, observer) {	

	  	entries.forEach(entry => {	   

		    if (entry.isIntersecting) {
		    	$('#'+entry.target.id).css('opacity', '1')
		    	
		    	if (entry.target.id === 'service-1') {		    		
		    		$('#'+entry.target.id).animate({left: 0}, 1000);
		    		autoScrollDownServices('service-1');
		    		
		    	}
		    	if (entry.target.id === 'service-2') {
		    		autoScrollDownServices('service-2');		    		
		    		$('#'+entry.target.id).animate({left: 0}, 1000);
		    	}
		    	if (entry.target.id === 'service-3') {		    		
		    		autoScrollDownServices('service-3');
		    		$('#'+entry.target.id).animate({left: 0}, 1000);
		    		// animate the button
		    		$('.services-button-container > button').animate({opacity: 1}, 2000);
		    	}
		    }	    
	  	});
	}

	// Team Block callback
	function teamCallbackFunc(entries, observer) {

	  	entries.forEach(entry => {
		   
		    if (entry.isIntersecting && ignore_observer) {
		    	autoScrollDown('contact-block');
		    	ignore_observer = false;
		    }
		    else if (entry.isIntersecting) {
		    	autoScrollDown('team-block');
		    }

	  	});
	}

	// Contact Block callback
	function contactCallbackFunc(entries, observer) {	

	  	entries.forEach(entry => {
		   
		    if (entry.isIntersecting) {
		    	
		    	autoScrollDown('contact-block');
		    		    	
		    }
	  	});
	}

	function autoScrollDownServices(block_name) {

		let this_height = $('#'+block_name).offset().top;
		let scrollTop = this_height;	

		$('html, body').animate({scrollTop}, 'slow');
	}
}

function autoScrollDown(block_name) {

	let this_height = $('#'+block_name).position().top;
	let scrollTop = this_height;	

	$('html, body').animate({scrollTop}, 'slow');
}


/*
*
* Lightbox effect
*
*/

// # hack to avoid double clicks for iPhones on mobile screen( window < 860px removed hover effect from images in css file)
if ($(window).width() < 860) {

	$('.team-image-title-1').on('click', function() {
		$('#lightbox1').css('display', 'flex')
		$('html, body').css('overflow', 'hidden')
	})

	$('.team-image-title-2').on('click', function() {	
		$('#lightbox2').css('display', 'flex')
		$('html, body').css('overflow', 'hidden')
	})
}

$('#lightbox1').on('click', function() {
	$(this).css('display', 'none')
	$('html, body').css('overflow', 'auto')
})
$('#lightbox2').on('click', function() {
	$(this).css('display', 'none')
	$('html, body').css('overflow', 'auto')
})

/*
*
* Logo Click
*
*/
$('.logo').on('click', function() {
	window.location.href='http://awesome-souce.vps.buzztestserver.co.uk';
})













	})
}(jQuery))