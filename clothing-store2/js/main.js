function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
    } else {
        reveals[i].classList.remove("active");
    }
    }
}

window.addEventListener("scroll", reveal);






const prefersDarkMode = window.matchMedia('(prefers-color-scheme: white)').matches;

if (prefersDarkMode) {
document.documentElement.classList.add('dark-mode');
}

const toggleButton = document.querySelector('#toggle-button');
toggleButton.addEventListener('click', () => {
document.documentElement.classList.toggle('dark-mode');
});



var myWindow;
function openWin() {
myWindow = window.open("", "", "width=400 ,height=200");
}
