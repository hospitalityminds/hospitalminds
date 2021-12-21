

document.querySelector('#offers').addEventListener("click",function(){
         document.querySelector('#popUpMain').classList.add("active");
})

document.querySelector('#cancel').addEventListener("click",function(){
         document.querySelector('#popUpMain').classList.remove("active");
})


//   Start of Tawk.to Script

    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
     (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5ba9c352b156da713cb3c5f5/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();

    //  End of Tawk.to Script





function parallax (element, distance, speed) {
    const item = document.querySelector(element);

    // item.style.transform = `translateY(${distance * speed}px)`;
}

window.addEventListener('scroll', function(){
    parallax('header', window.scrollY, 0.5);
    $('.navbar').addClass('shadow');
})

//testimonial

jQuery(document).ready(function($) {
	//create the slider
	$('.cd-testimonials-wrapper').flexslider({
		selector: ".cd-testimonials > li",
		animation: "slide",
		controlNav: true,
		slideshow: false,
		smoothHeight: true,
		start: function() {
			$('.cd-testimonials').children('li').css({
				'opacity': 1,
				'position': 'relative'
			});
		}
	});
});


const Typewriter = function (txtElement, words, wait = 1000) {
	this.txtElement = txtElement;
	this.words = words;
	this.txt = '';
	this.wordIndex = 0;
	this.wait = parseInt(wait, 10);
	this.type();
	this.isDeleting = false;
}

// Type Method 
Typewriter.prototype.type = function () {
	// Current Index of Word
	const current = this.wordIndex % this.words.length;
	// Get full text of current word
	const fulltxt = this.words[current];

	// Check if Deleting
	if(this.isDeleting) {
		// Remove a character
		this.txt = fulltxt.substring(0, this.txt.length - 1);
	} else {
		// Add a character
		this.txt = fulltxt.substring(0, this.txt.length + 1);
	}

	// Insert txt into element
	this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

	// Initial Type Speed
	let typeSpeed = 300;

	if (this.isDeleting){
		typeSpeed /= 5;
	} 

	// If word is complete
	if (!this.isDeleting && this.txt === fulltxt) {
		// MAke psuse at end
		typeSpeed = this.wait;
		console.log(typeSpeed)
		// Set delete to true
		this.isDeleting = true;
	} else if(this.isDeleting && this.txt === '') {
		this.isDeleting = false;

		// Move to the next word
		this.wordIndex++;
		
		// Pause before start typing
		typeSpeed = 500;
	}

	setTimeout(() => this.type(), 150)
}

// Init on DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init () {
	const txtElement = document.querySelector('.txt-type');
	const words = JSON.parse(txtElement.getAttribute('data-words'));
	const wait = txtElement.getAttribute('data-wait');

	// Init Typewriter
	new Typewriter(txtElement, words, wait);
}

var TxtType = function(el, toRotate, period) {
	this.toRotate = toRotate;
	this.el = el;
	this.loopNum = 0;
	this.period = parseInt(period, 10) || 2000;
	this.txt = '';
	this.tick();
	this.isDeleting = false;
};

TxtType.prototype.tick = function() {
	var i = this.loopNum % this.toRotate.length;
	var fullTxt = this.toRotate[i];

	if (this.isDeleting) {
	this.txt = fullTxt.substring(0, this.txt.length - 1);
	} else {
	this.txt = fullTxt.substring(0, this.txt.length + 1);
	}

	this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

	var that = this;
	var delta = 200 - Math.random() * 100;

	if (this.isDeleting) { delta /= 10; }

	if (!this.isDeleting && this.txt === fullTxt) {
	delta = this.period;
	this.isDeleting = true;
	} else if (this.isDeleting && this.txt === '') {
	this.isDeleting = false;
	this.loopNum++;
	delta = 500;
	}

	setTimeout(function() {
	that.tick();
	}, delta);
};

window.onload = function() {
	var elements = document.getElementsByClassName('typewrite');
	for (var i=0; i<elements.length; i++) {
		var toRotate = elements[i].getAttribute('data-type');
		var period = elements[i].getAttribute('data-period');
		if (toRotate) {
		  new TxtType(elements[i], JSON.parse(toRotate), period);
		}
	}
	// INJECT CSS
	var css = document.createElement("style");
	css.type = "text/css";
	css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
	document.body.appendChild(css);
};
