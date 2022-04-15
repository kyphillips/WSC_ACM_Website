var pastEvent01 = {
	title: "Game Night", bigDate: "April 6th", timeDate: "April 6th 2022 @ 5:00pm-7:00pm", location: "Frey Student Center - Niobrara/Elkorn Rooms", imgSrc: "Content/Active/Images/PastEvents/GameNight2021/GameNight01.jpg", content: "Every semester we host a game night. Card games, board games, video games, etc.", contentLong: "LONG TEXT: Every semester, ACM hosts a game night for all students to attend. People are allowed to bring their own consoles and how many friends they would like. we had our last one on April 6th, 2022, we cant wait for the next year!",
	imgArr: ["Content/Active/Images/PastEvents/GameNight2021/GameNight01.jpg", "Content/Active/Images/PastEvents/GameNight2021/GameNight02.jpg", "Content/Active/Images/PastEvents/GameNight2021/GameNight03.jpg"]
};
var pastEvent02 = {
	title: "Guest Speaker: Tim Wuringer", bigDate: "March 24th", timeDate: "March 24th 2022 @ 5:00pm", location: "Gardner Hall RM 115", imgSrc: "Content/Active/Images/PastEvents/GuestSpeakerTimWuringer2022/Flyer.png", content: "Tim Wurninger, founder of ORAB Games and created of the game TailGate Party, came and spoke with the group about coding for thr NES system. ", contentLong: "LONG TEXT: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa.",
	imgArr: ["Content/Active/Images/PastEvents/GuestSpeakerTimWuringer2022/Game01.jpg", "Content/Active/Images/PastEvents/GuestSpeakerTimWuringer2022/Game02.jpg", "Content/Active/Images/PastEvents/GuestSpeakerTimWuringer2022/Flyer.png"]
};
var pastEvent03 = {
	title: "ACM Bowling Night", bigDate: "Feb 24th", timeDate: "Feb 24th 2022 @ 5:00pm", location: "Wildcat Lanes", imgSrc: "Content/Active/Images/PastEvents/BowlingNight2021/Bowling01.jpg", content: "ACM had their yearly bowling night during the month of Feburary.", contentLong: "LONG TEXT: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa.",
	imgArr: ["Content/Active/Images/PastEvents/BowlingNight2021/Bowling01.jpg", "Content/Active/Images/PastEvents/BowlingNight2021/Bowling02.jpg", "Content/Active/Images/PastEvents/BowlingNight2021/Bowling03.jpg"]
};

const pastEvents = [pastEvent01, pastEvent02, pastEvent03];

var eventsListRow = document.getElementById("eventsListRow");

var eventTemplate = document.querySelector('#listEventTemplate');

for (let i = 0; i < pastEvents.length; i++)
{
	var eventClone = eventTemplate.content.cloneNode(true);

	eventClone.querySelector('#eventImg').src = pastEvents[i].imgSrc;
	eventClone.querySelector('#eventTitle').innerText = pastEvents[i].title;
	eventClone.querySelector('#eventTime').innerText = pastEvents[i].timeDate;
	eventClone.querySelector('#eventLocation').innerText = pastEvents[i].location;
	eventClone.querySelector('#eventContent').innerText = pastEvents[i].content;
	eventClone.querySelector('[class*="event-container"]').id = "eventNode" + i;

	eventsListRow.appendChild(eventClone);
}

let slideIndex = 1;

function overlayOn(e)
{
	var id = e.parentNode.id;
	var x;

	if (id.length == 10)
	{
		x = id.substring(id.length - 1, id.length);
	}
	if (id.length == 11)
	{
		x = id.substring(id.length - 2, id.length);
	}

	
	var slideshowImgDiv = document.getElementById("slideshowContainer");
	var slideshowDotsDiv = document.getElementById("slideshowDots");

	slideshowImgDiv.innerText = "";
	slideshowDotsDiv.innerText = "";

	var mySlidesTemplate = document.querySelector('#mySlidesDiv');
	var mySlideDotsTemplate = document.querySelector('#mySlidesDots');

	var mySlideArrowsTemplate = document.querySelector('#mySlideArrows');
	var mySlideArrowsClone = mySlideArrowsTemplate.content.cloneNode(true);

	for (let i = 0; i < pastEvents[x].imgArr.length; i++)
	{
		var mySlidesClone = mySlidesTemplate.content.cloneNode(true);
		var mySlideDotsClone = mySlideDotsTemplate.content.cloneNode(true);

		mySlidesClone.querySelector('#mySlidesImg').src = pastEvents[x].imgArr[i];
		slideshowImgDiv.appendChild(mySlidesClone);

		mySlideDotsClone.querySelector('[class*="dot"]').id = "dot" + (i + 1);
		slideshowDotsDiv.appendChild(mySlideDotsClone);

	}

	slideshowImgDiv.appendChild(mySlideArrowsClone);

	document.getElementById("eventOverlay").style.display = "block";

	
	showSlides(slideIndex);
}

function overlayOff()
{
	document.getElementById("eventOverlay").style.display = "none";
}

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(e) {

	var id = e.id;
	var n;

	if (id.length == 4) {
		n = id.substring(id.length - 1, id.length);
	}
	if (id.length == 5) {
		n = id.substring(id.length - 2, id.length);
	}

	showSlides(slideIndex = n);
}

function showSlides(n)
{
	let i;
	let slides = document.getElementsByClassName("mySlides");
	let dots = document.getElementsByClassName("dot");

	if (n > slides.length) { slideIndex = 1 }

	if (n < 1) { slideIndex = slides.length }

	for (i = 0; i < slides.length; i++)
	{
		slides[i].style.display = "none";
	}

	for (i = 0; i < dots.length; i++)
	{
		dots[i].className = dots[i].className.replace(" active", "");
	}

	slides[slideIndex - 1].style.display = "block";
	dots[slideIndex - 1].className += " active";
}