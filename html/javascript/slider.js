const buttons = document.querySelector("[data-carousel-button]")
// utilizam atributul data in loc de clasa pentru a simplifica lucrul cu js
// astfel evitam ca js si clasele sa coincida
buttons.forEach( button =>){
    button.addeventListener("click", () => {
     const offset = button.dataset.carouselButton === "next" ? 1 : -1
     const slides = button
     .closest("[data-carousel]")
     .querySelector("[data-slides]")

     const activeSlide = slides.querySelector("[data-active]")
     let newIndex = [...slides.children].indexOf(activeSlide) + offset
     if(newIndex < 0) newIndex = slides.children.length - 1
     if(newIndex >= slides.children.length) newIndex = 0

     slides.children[newIndex].dataset.active = true
     delete activeSlide.dataset.active
     //se adauga si se sterge atributul activeslide la un slide
    }
}