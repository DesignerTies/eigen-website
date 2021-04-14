function showFunction() {
    document.querySelector(".hamburger-container").style.visibility = "visible";
    document.querySelector(".hamburger-container").style.animation = "drop .7s ease";
    document.getElementById("hamburger-knop").style.display = "none"; 
    document.getElementById("hamburger-kruis").style.display = "block";
} 

function dissapearFunction() {
    document.getElementById("hamburger-kruis").style.display = "none";
    document.getElementById("hamburger-knop").style.display = "block"; 
    document.querySelector(".hamburger-container").style.visibility = "hidden";
}
