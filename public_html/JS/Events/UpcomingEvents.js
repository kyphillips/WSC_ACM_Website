var upEvent01 = { title: "Project Night", bigDate: "April 14th", timeDate: "April 14th 2022, @5:00pm", location: "Gardner Hall RM 115", imgSrc:"Content/Active/Images/Events/ProjectNight.jpg", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. ", contentLong: "Throughout the school year, ACM has students get involve with multiple different projects for them to tinker and explore their interests with technology. (This very website is one of those projects!)There is a wide range of projects for the students to explore, we frequently have meetings for students to get in their groups and work on the project they want. We call them project nights." };

var upEvent02 = { title: "Certificate Ceremony", bigDate: "April 21st", timeDate: "April 21st 2022, @5:00pm", location: "Gardner Hall RM 115", imgSrc: "Content/Active/Images/Events/TorchCeremony.jpg", content: "We recognize the hard work of the members with dinner and awards. ", contentLong: "For our final offical meeting every year, we hold a certificate ceremony to award the students who put a lot of time and effort into our organization. Dinner and drinks are provided." };

var upEvent03 = { title: "Study Night", bigDate: "April 28th", timeDate: "April 28th 2022, @5:00pm", location: "Frey Student Center", imgSrc: "Content/Active/Images/Logos/DiamondLogoBG.png", content: "ACM will have its last meeting for the semester during dead week.", contentLong: "During Dead Week, ACM will be having one last optional meeting. This meeting is a study night for members who would like some help preparing or studying for their upcoming finals. It will also serve as a place to relax in a calm enviroment from all the chaos that is dead week." };

var upEvent04 = { title: "Finals Week", bigDate: "May 5th", timeDate: "May 5th 2022", location: "No meeting", imgSrc: "Content/Active/Images/Logos/DiamondLogoBG.png", content:"There will be no meeting during finals week. ", contentLong: "We are done with our meetings for the semester by finals week. We wish everyone the best of luck on their finals, and hope everyone has a fantastic summer! See you in the fall! "};

var upEvent05 = { title: "Club Fair", bigDate: "Aug 22nd", timeDate: "Week of Aug 22nd, TBD", location: "Frey Student Center", imgSrc: "Content/Active/Images/Events/ClubFair.jpg", content: "We kick off the fall semester with an appearance at the club fair! ", contentLong: "Welcome back students! During the first week of school, Wayne State College has it's annual club fair. Here ACM has the oppurtunity to show off what we do and who we are to people all around campus to invite them to join our club. " };

var upEvent06 = { title: "Fall Meeting", bigDate: "Aug TBD", timeDate: "Aug 2022, TBD", location: "Gardner Hall RM 115", imgSrc: "Content/Active/Images/Logos/DiamondLogoBG.png", content: "Meeting not planned yet", contentLong: "Meeting agenda is still in the works. Stay tuned for whats next for ACM next fall!" };

var upEvent07 = { title: "Fall Meeting", bigDate: "Sept TBD", timeDate: "Sept 2022, TBD", location: "Gardner Hall RM 115", imgSrc: "Content/Active/Images/Logos/DiamondLogoBG.png", content: "Meeting not planned yet", contentLong: "Meeting agenda is still in the works. Stay tuned for whats next for ACM next fall!" };

const upEvents = [upEvent01, upEvent02, upEvent03, upEvent04, upEvent05, upEvent06, upEvent07];

var mainEventRow = document.getElementById("mainEventRow");
var eventsListRow = document.getElementById("eventsListRow");

var mainEventTemplate = document.querySelector('#mainEventTemplate');
var mainEventClone = mainEventTemplate.content.cloneNode(true);

mainEventClone.querySelector('#mainEventImg').src = upEvent01.imgSrc;
mainEventClone.querySelector("#mainEventTitle").innerText = upEvent01.title;
mainEventClone.querySelector("#bigDate").innerText = upEvent01.bigDate;
mainEventClone.querySelector("#mainEventDate").innerText = upEvent01.timeDate;
mainEventClone.querySelector("#mainEventLocation").innerText = upEvent01.location;
mainEventClone.querySelector("#mainEventContentLong").innerText = upEvent01.contentLong;
mainEventClone.querySelector("#mainEventContent").innerText = upEvent01.content;
mainEventClone.querySelector('[class*="event-container"]').id = "eventNode" + 0;
mainEventRow.appendChild(mainEventClone);


var eventTemplate = document.querySelector('#listEventTemplate');


for (let i = 1; i < upEvents.length; i++)
{
	var eventClone = eventTemplate.content.cloneNode(true);

	eventClone.querySelector('#eventImg').src = upEvents[i].imgSrc;
	eventClone.querySelector('#eventTitle').innerText = upEvents[i].title;
	eventClone.querySelector('#eventTime').innerText = upEvents[i].timeDate;
	eventClone.querySelector('#eventLocation').innerText = upEvents[i].location;
	eventClone.querySelector('#eventContent').innerText = upEvents[i].content;
	eventClone.querySelector('[class*="event-container"]').id = "eventNode" + i;


	eventsListRow.appendChild(eventClone);
}


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
	
	

	var divTitle = document.getElementById("overlayTitle");
	var divTimeDate = document.getElementById("overlayTimeDate");
	var divLocation = document.getElementById("overlayLocation");
	var divContent = document.getElementById("overlayContent");
	var divImg = document.getElementById("overlayImg");
	

	var event = upEvents[x];
	divTitle.innerText = event.title;
	divTimeDate.innerText = event.timeDate;
	divLocation.innerText = event.location;
	divImg.src = event.imgSrc;
	divContent.innerText = event.contentLong;
	document.getElementById("eventOverlay").style.display = "block";
}

function overlayOff()
{
	document.getElementById("eventOverlay").style.display = "none";
}