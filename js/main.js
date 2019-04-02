

// trait sous le menu

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

// Menu hamburger avec transformation en croix et apparition d'une side bar

(function() {

    let hamburger = {
      navToggle: document.querySelector('.nav-toggle'),
      nav: document.querySelector('nav'),
  
      doToggle: function(e) {
        e.preventDefault();
        this.navToggle.classList.toggle('expanded');
        this.nav.classList.toggle('expanded');
      }
    };
  
    hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(e); });
    hamburger.nav.addEventListener('click', function(e) { hamburger.doToggle(e); });
  
  }());

/* gestion bloc article */

let blocDiv = document.querySelectorAll(".bloc");
console.log('blocDiv', blocDiv);

blocDiv.forEach(function(element) {
  element.addEventListener("click", function(e) {
    const blocHide = document.getElementById('articles-show');
    const crossShow = document.getElementById('cross');
    console.log('crossShow', crossShow);
    crossShow.classList.toggle('showCross');
    console.log('blocHide', blocHide);
    blocHide.classList.toggle('showArticle');
  });
});
