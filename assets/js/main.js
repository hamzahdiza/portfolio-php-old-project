/*===== SHOW MENU =====*/
// const showMenu=(toggleId, navId) => {
//   const toggle = document.getElementById(toggleId),
//   nav = document.getElementById(navId)

//   if(toggle && nav) {
//     toggle.addEventListener('click', ()=>{
//       nav.classList.toggle('show-menu')
//     })
//   }
// }
// showMenu('nav-toggle', 'nav-menu')

/*===== REMOVE MENU MOBILE =====*/


/*===== SCROLL SECTIONS ACTIVE LINK =====*/
// const section = document.querySelectorAll('section[id')

// function scrollActive(){
//   const scrolY = window.pageYOffset

//   section.forEach(current => {
//     const sectionHeight = current.offsetHeight
//     const sectionTop = current.offsetTop - 50
//     sectionId = current.getAttribute('id')

//     if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
//       document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
//     } else {
//       document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
//     }
//   })
// }
// window.addEventListener('scroll', scrollActive)

/*===== CHANGE BACKGROUND HEADER =====*/ 
// function scrollHeader(){
//   const header = document.getElementById('header')
//   if(this.scrollY >= 200) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
// }
// window.addEventListener('scroll', scrollHeader)
/*===== SHOW SCROLL TOP =====*/ 


/*===== MIXITUP FILTER PORTFOLIO =====*/ 
const mixer = mixitup('.portfolio__container', {
  selectors: {
      target: '.portfolio__content'
  },
  animation: {
      duration: 400
  }
});


/* Link active portfolio */ 
const linkPortfolio = document.querySelectorAll('.portfolio__item')

function activePortfolio(){
  if(linkPortfolio){
    linkPortfolio.forEach(l => l.classList.remove('active-portfolio'))
    this.classList.add('active-portfolio')
  }
}

linkPortfolio.forEach(l=>l.addEventListener('click', activePortfolio))

/*===== SWIPER CAROUSEL =====*/ 
const swiper = new Swiper('.testimonial__container', {
  // Optional parameters
  spaceBetween: 16,
  loop: true,
  grabCursor: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

/*===== GSAP ANIMATION =====*/ 
gsap.from('.home__img', {opacity: 0, duration: 2, delay:0.5, x:60})
gsap.from('.home__data',{opacity: 0, duration: 2, delay:0.8, y:25})
gsap.from('.home__greeting, .home__name, .home__profession, .home__button',{opacity: 0, duration: 2, delay:1, y:25, ease:'expo.out', stagger:0.2})
