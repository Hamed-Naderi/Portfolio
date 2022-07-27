
class Quotes {
    constructor(slideIndex) {
        this.quotesSlides = document.querySelectorAll('.quotesSlides')
        this.quotesDot = document.querySelectorAll('.quotesDot')
        this.faAnglesLeft = document.querySelector('.fa-angles-left')
        this.faAnglesRight = document.querySelector('.fa-angles-right')
        this.slideIndex = 1
        this.showSlidesQuotes(slideIndex)
        this.events()
    }

    events() {
        if(this.faAnglesLeft) {this.faAnglesLeft.addEventListener('click', () => this.showSlidesQuotes(this.slideIndex -= 1))}    
        if(this.faAnglesRight) {this.faAnglesRight.addEventListener('click', () => this.showSlidesQuotes(this.slideIndex += 1))}
        if(this.quotesDot[0]) {this.quotesDot[0].addEventListener('click', () => this.showSlidesQuotes(this.slideIndex = 1))}
        if(this.quotesDot[1]) {this.quotesDot[1].addEventListener('click', () => this.showSlidesQuotes(this.slideIndex = 2))}
        if(this.quotesDot[2]) {this.quotesDot[2].addEventListener('click', () => this.showSlidesQuotes(this.slideIndex = 3))}
        if(this.quotesDot[3]) {this.quotesDot[3].addEventListener('click', () => this.showSlidesQuotes(this.slideIndex = 4))}
        if(this.quotesDot[4]) {this.quotesDot[4].addEventListener('click', () => this.showSlidesQuotes(this.slideIndex = 5))}
    }

    showSlidesQuotes(n) {
        this.i
        if(n > this.quotesSlides.length) {this.slideIndex = 1}    
        if(n < 1) {this.slideIndex = this.quotesSlides.length}
        for(this.i = 0; this.i < this.quotesSlides.length; this.i++) {
            this.quotesSlides[this.i].style.display = "none";  
        }
        for(this.i = 0; this.i < this.quotesDot.length; this.i++) {
            this.quotesDot[this.i].classList.remove("activeDot")
        }
        if(this.quotesSlides[this.slideIndex-1]) {this.quotesSlides[this.slideIndex-1].style.display = "block" } 
        if(this.quotesDot[this.slideIndex-1]) {this.quotesDot[this.slideIndex-1].classList.add("activeDot")}
    }
}


export default Quotes