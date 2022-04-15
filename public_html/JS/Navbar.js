var currentURL = window.location.href;

var homeNav = document.getElementById("homeNav");
var eventsNav = document.getElementById("eventsNav");
var aboutNav = document.getElementById("aboutNav");
var joinNav = document.getElementById("joinNav");
var contactNav = document.getElementById("contactNav");

homeNav.classList.remove("active");
eventsNav.classList.remove("active");
aboutNav.classList.remove("active");
joinNav.classList.remove("active");
contactNav.classList.remove("active");

if (currentURL.includes("Home")) {
	homeNav.classList.add("active");
}
if (currentURL.includes("Event")) {
	eventsNav.classList.add("active");
}
if (currentURL.includes("About")) {
	aboutNav.classList.add("active");
}
if (currentURL.includes("Index")) {
	aboutNav.classList.add("active");
}
if (currentURL.includes("Join")) {
	joinNav.classList.add("active");
}
if (currentURL.includes("Contact")) {
	contactNav.classList.add("active");
}