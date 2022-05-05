const buttons = document.querySelector("[data-carousel-button]")
// utilizam atributul data in loc de clasa pentru a simplifica lucrul cu js
// astfel evitam ca js si clasele sa coincida

buttons.forEach( button =>){
    button.addeventListener("click", () => {
     const offset = button.dataset.carouselButton === "next" ? 1 : -1
     const slides = button.closest("[data-carousel]")
    }
}