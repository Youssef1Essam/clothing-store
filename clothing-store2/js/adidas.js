const stars = document.querySelectorAll(".stars i");

stars.forEach((star, index1) => {

star.addEventListener("click", () => {

    stars.forEach((star, index2) => {
    
    index1 >= index2 ? star.classList.add("active") : star.classList.remove("active");
    });
});
});


const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

if (prefersDarkMode) {
document.documentElement.classList.add('dark-mode');
}

const toggleButton = document.querySelector('#toggle-button');
toggleButton.addEventListener('click', () => {
document.documentElement.classList.toggle('dark-mode');
});

