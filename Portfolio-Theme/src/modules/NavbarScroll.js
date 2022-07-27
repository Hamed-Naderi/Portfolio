
class NavbarScroll {
    constructor() {

        window.onscroll = () => {this.scrollFunction()};
    }

    scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.querySelector(".school-logo-text").style.fontSize = "30px";
            document.querySelector(".main-navigation").style.fontSize = "20px";
            document.querySelector(".search-trigger").style.fontSize = "25px";
            document.querySelector(".site-header").style.backgroundColor = "white";
            document.querySelector(".site-header").style.boxShadow = "0 3px 3px rgba(0, 0, 0, 0.5)";

        } else {
            document.querySelector(".school-logo-text").style.fontSize = "40px";
            document.querySelector(".main-navigation").style.fontSize = "25px";
            document.querySelector(".search-trigger").style.fontSize = "35px";
            document.querySelector(".site-header").style.backgroundColor = "transparent";
            document.querySelector(".site-header").style.boxShadow = null;
            }
        }
   
}

export default NavbarScroll

