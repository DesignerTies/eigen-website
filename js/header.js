var tweedeElement = document.querySelector("#services-container1");
var witNav = tweedeElement.offsetTop;

window.onscroll = function () { scrollFunction() };


function scrollFunction() {
  if (window.pageYOffset >= witNav) {
    document.getElementById("header").style.backgroundColor = "white";
    document.getElementById("h1-nav").style.color = "black";
    document.getElementById("projecten").style.color = "black";
    document.getElementById("prijzen").style.color = "black";
    document.getElementById("contact").style.color = "black";
  } else {
    document.getElementById("header").style.backgroundColor = "";
    document.getElementById("h1-nav").style.color = "white";
    document.getElementById("projecten").style.color = "white";
    document.getElementById("prijzen").style.color = "white";
    document.getElementById("contact").style.color = "white";
  }
}

scrollFunction();