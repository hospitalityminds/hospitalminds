

function parallax (element, distance, speed) {
    const item = document.querySelector(element);

    item.style.transform = `translateY(${distance * speed}px)`
}

window.addEventListener('scroll', function(){
    parallax('header', window.scrollY, 0.5);
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
		typeSpeed /= 2;
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