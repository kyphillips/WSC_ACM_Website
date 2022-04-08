var upEvent01 = { title: "ACM MEeting seomth", bigDate: "Sept 1st", timeDate: "Sept 1st 2019 @ 11am", location: "Frey Student Center", imgSrc: "Resources/UpcomingEvents/Content/Images/Robots.jpg", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. ", contentLong: "LONG TEXT: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa." };
var upEvent02 = { title: "Game Festival 02", bigDate: "Sept 1st", timeDate: "Sept 1st 2019 @ 11am", location: "Frey Student Center", imgSrc: "Resources/UpcomingEvents/Content/Images/Robots.jpg", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. ", contentLong: "LONG TEXT: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa." };
var upEvent03 = { title: "Game Festival 03", bigDate: "Sept 1st", timeDate: "Sept 1st 2019 @ 11am", location: "Frey Student Center", imgSrc: "Resources/UpcomingEvents/Content/Images/Robots.jpg", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. ", contentLong: "LONG TEXT: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. " };
var upEvent04 = { title: "Game Festival 04", bigDate: "Sept 1st", timeDate: "Sept 1st 2019 @ 11am", location: "Frey Student Center", imgSrc: "Resources/UpcomingEvents/Content/Images/Robots.jpg", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. ", contentLong: "LONG TEXT: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. " };
var upEvent05 = { title: "Game Festival 05", bigDate: "Sept 1st", timeDate: "Sept 1st 2019 @ 11am", location: "Frey Student Center", imgSrc: "Resources/UpcomingEvents/Content/Images/Robots.jpg", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. ", contentLong: "LONG TEXT: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. " };
var upEvent06 = { title: "Game Festival 06", bigDate: "Sept 1st", timeDate: "Sept 1st 2019 @ 11am", location: "Frey Student Center", imgSrc: "Resources/UpcomingEvents/Content/Images/Robots.jpg", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. ", contentLong: "LONG TEXT: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. " };
var upEvent07 = { title: "Game Festival 07", bigDate: "Sept 1st", timeDate: "Sept 1st 2019 @ 11am", location: "Frey Student Center", imgSrc: "Resources/UpcomingEvents/Content/Images/Robots.jpg", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. ", contentLong: "LONG TEXT: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. " };

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

	var event = upEvents[x];
	divTitle.innerText = event.title;
	divTimeDate.innerText = event.timeDate;
	divLocation.innerText = event.location;
	divContent.innerText = event.contentLong;
	document.getElementById("eventOverlay").style.display = "block";
}

function overlayOff()
{
	document.getElementById("eventOverlay").style.display = "none";
}