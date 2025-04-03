
const carousel = document.querySelector('.carousel');

// Add event listener to carousel
carousel.addEventListener('scroll', () => {
    // Get the current scroll position
    const scrollPosition = carousel.scrollLeft;

    // Get the width of the carousel
    const carouselWidth = carousel.offsetWidth;

    // Calculate the number of cards that can fit in the carousel
    const numCards = Math.floor(carouselWidth / 200);

    // Calculate the current card index
    const currentIndex = Math.floor(scrollPosition / 200);

    // Log the current card index
    console.log(`Current card index: ${currentIndex}`);
});

const contactInfo = document.querySelector('.contact-info');

contactInfo.addEventListener('mouseover', () => {
    contactInfo.style.opacity = 1;
});

contactInfo.addEventListener('mouseout', () => {
    contactInfo.style.opacity = 0.5;
});

// Get the cart button
const cartBtn = document.querySelector('.cart-btn');

// Add event listener to the cart button
cartBtn.addEventListener('click', () => {
    // Add item to cart logic here
    console.log('Item added to cart');
});


const carouselitems= document.querySelector('.carousel');
const carouselItems = document.querySelectorAll('.carousel-item');
let currentCarouselItem = 0;

carouselItems[currentCarouselItem].classList.add('active');

setInterval(() => {
    carouselItems[currentCarouselItem].classList.remove('active');
    currentCarouselItem = (currentCarouselItem + 1) % carouselItems.length;
    carouselItems[currentCarouselItem].classList.add('active');
}, 3000);





// Add districts to the dropdown
const districts = [
    "Kampala",
    "Wakiso",
    "Mukono",
    "Luweero",
    "Mpigi",
    "Mityana",
    "Nakaseke",
    "Nakasongola",
    // Add more districts here
];

const districtsDropdown = document.getElementById("districts");

districts.forEach((district) => {
    const option = document.createElement("option");
    option.value = district;
    option.text = district;
    districtsDropdown.appendChild(option);
});

// Add event listener to the search button
const searchButton = document.querySelector(".search-button");

searchButton.addEventListener("click", () => {
    const searchTerm = document.getElementById("search").value;
    // Add logic to search for districts here
    console.log(`Searching for: ${searchTerm}`);
});




