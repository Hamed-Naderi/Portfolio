

class Video {
    constructor() {
      this.video = document.querySelector("#myVideo")
      this.playVideo = document.querySelector("#playVideo")
      this.faPlay = document.querySelector(".fa-play")
      this.faPause = document.querySelector(".fa-pause")
      this.events()
    }

    events() {
      if(this.playVideo) {
        this.playVideo.addEventListener('click', () => {
          if (this.video.paused) {
            this.video.play();
            this.faPause.classList.add("faShow")
            this.faPlay.classList.remove("faShow")
          } else {
            this.video.pause();
            this.faPause.classList.remove("faShow")
            this.faPlay.classList.add("faShow")
          }
        })
      } 
    }
}


export default Video

