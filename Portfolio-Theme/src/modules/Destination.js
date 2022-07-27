

class Destination {
    constructor() {
        this.destinAll = document.querySelector(".destinAll")
        this.europe = document.querySelector(".europe")
        this.asia = document.querySelector(".asia")
        this.afrika = document.querySelector(".afrika")
        this.destinColumn = document.querySelectorAll(".columnDestination")
        this.activeDestin = document.getElementsByClassName("activeDestin")
        this.filterSelection("destinAll")
        this.events()
    }

    events() {
        if (this.destinAll) {
            this.destinAll.addEventListener('click', () => {
            this.filterSelection("destinAll")
            this.activeDestin[0].className = this.activeDestin[0].className.replace(" activeDestin", "")
            this.destinAll.className += " activeDestin";
        })}
        if (this.europe) {
            this.europe.addEventListener('click', () => {
            this.filterSelection("europe")
            this.activeDestin[0].className = this.activeDestin[0].className.replace(" activeDestin", "")
            this.europe.className += " activeDestin";
        })}
        if (this.asia) {
            this.asia.addEventListener('click', () => {
            this.filterSelection("asia")
            this.activeDestin[0].className = this.activeDestin[0].className.replace(" activeDestin", "")
            this.asia.className += " activeDestin";
        })}
        if (this.afrika) {
            this.afrika.addEventListener('click', () => {
            this.filterSelection("afrika")
            this.activeDestin[0].className = this.activeDestin[0].className.replace(" activeDestin", "")
            this.afrika.className += " activeDestin";
        })}
    }

    filterSelection(c) {  
        this.i
        if (c == "destinAll") {c = ""}
        for (this.i = 0; this.i < this.destinColumn.length; this.i++) {
            this.destinColumn[this.i].classList.remove("displayDestin")
          if (this.destinColumn[this.i].className.indexOf(c) > -1) {
            this.destinColumn[this.i].classList.add("displayDestin")
          } 
        }
    } 
}
  

export default Destination