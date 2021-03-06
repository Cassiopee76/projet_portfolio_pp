//////// apparition et animation du menu principal (nav-scroll) au scroll ////////

$('#nav-scroll').hide();  // d'abord, on masque le menu de navigation, qui porte la classe "nav-scroll"

 $(function(){
   $(window).scroll(function () {  //Au scroll dans la fenetre on déclenche la fonction
      if ($(this).scrollTop()) {  // si on scroll
            $('#nav').hide(1000); // On masque le 1
            $('#nav-scroll').show(1000); // On affiche le 2
      } else {  // sinon 
            $('#nav-scroll').hide(1000); // "vice-versa" 
            $('#nav').show(1000);
      }
   });
 });

//////// trait sous les titres du menu ////////

let baliseA = document.querySelectorAll('.menu');
let baliseSouligne = document.querySelector ('.soulignement');

for (let i=0; i < baliseA.length ; i ++) {

  baliseA[i].addEventListener ("mouseover", function () {
      baliseSouligne = this.nextSibling.nextSibling;
      baliseSouligne.style.width = "100%";
    });

  baliseA[i].addEventListener ("mouseout", function () {
      baliseSouligne = this.nextSibling.nextSibling;
      baliseSouligne.style.width = "0px ";
     });
}

//////// trait sous les titres du menu-scroll ////////

let baliseB = document.querySelectorAll('.menu-scroll');
let baliseSouligneScroll = document.querySelector ('.soulignement-scroll');

for (let x=0; x < baliseB.length ; x ++) {

  baliseB[x].addEventListener ("mouseover", function () {
      baliseSouligneScroll = this.nextSibling.nextSibling;
      baliseSouligneScroll.style.width = "100%";
    });

  baliseB[x].addEventListener ("mouseout", function () {
      baliseSouligneScroll = this.nextSibling.nextSibling;
      baliseSouligneScroll.style.width = "0px ";
     });
}


//////// Menu hamburger avec transformation en croix et apparition d'une side bar ////////

(function() {

    let hamburger = {
      navToggle: document.querySelector('.nav-toggle'),
      nav: document.querySelector('nav'),
  
      doToggle: function() {
        this.navToggle.classList.toggle('expanded');
        this.nav.classList.toggle('expanded');
      }
    };
  
    hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(); });
    hamburger.nav.addEventListener('click', function(e) { hamburger.doToggle(); });
  
  }());


  //////// gestion du background video  ////////

const vid = document.getElementById("background-video");
const pauseButton = document.getElementById("vidpause");

if (vid && pauseButton) {
  vid.play();
  pauseButton.innerHTML = "Pause";
  vid.addEventListener('ended', function() {
    vid.pause();
    pauseButton.innerHTML = "Play";
  });
  pauseButton.addEventListener("click", function() {
    if (vid.paused) {
      vid.play();
      pauseButton.innerHTML = "Pause";
    } else {
      vid.pause();
      pauseButton.innerHTML = "Play";
    }
  });
}