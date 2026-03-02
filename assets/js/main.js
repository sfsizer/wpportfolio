// Responcive Menu Toggle
// const btn = document.getElementById("menu-btn");
//   const menu = document.getElementById("mobile-menu");

//   btn.addEventListener("click", () => {
//     menu.classList.toggle("hidden");
//   });
const btn = document.getElementById("menu-btn");
const menu = document.getElementById("mobile-menu");
const header = document.getElementById("header");
let menuOpen = false;

// Toggle Mobile Menu + Hamburger Animation
btn.addEventListener("click", () => {
    menu.classList.toggle("translate-x-full");

    const spans = btn.querySelectorAll("span");
    if (!menuOpen) {
        // Animate to X
        spans[0].classList.add("rotate-45", "translate-y-2");
        spans[1].classList.add("opacity-0");
        spans[2].classList.add("-rotate-45", "-translate-y-2");
        menuOpen = true;
    } else {
        // Back to Hamburger
        spans[0].classList.remove("rotate-45", "translate-y-2");
        spans[1].classList.remove("opacity-0");
        spans[2].classList.remove("-rotate-45", "-translate-y-2");
        menuOpen = false;
    }
});

// Sticky + Background on Scroll
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    // Scroll > 100px → sticky black bg
    header.classList.add("bg-black", "fixed", "top-0", "w-full", "py-4", "shadow-lg", "transition-all", "duration-300", "ease-in-out");
    header.classList.remove("absolute");
  } else {
    // Scroll < 100px → original style
    header.classList.remove("bg-black", "fixed", "py-4", "shadow-lg");
    header.classList.add("absolute", "py-6");
  }
});
// Hero Typed Text
var typed = new Typed('#typed', {
    strings: ['Web Developer.', 'Web Designer.', 'Wordpress Developer.', 'UI/UX Designer.', 'Elementor Expert.', 'Freelancer.'],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true
});
// Project Tabs
const tabs = document.querySelectorAll(".tab-btn");
const cards = document.querySelectorAll(".project-card");
const indicator = document.getElementById("tab-indicator");
const emptyMessage = document.getElementById("empty-message");

function moveIndicator(tab){
  indicator.style.width = tab.offsetWidth + "px";
  indicator.style.left = tab.offsetLeft + "px";
}

moveIndicator(tabs[0]);

tabs.forEach(tab=>{
  tab.addEventListener("click", ()=>{

    moveIndicator(tab);

    const filter = tab.getAttribute("data-tab");
    let visibleCount = 0;

    cards.forEach(card=>{
      card.classList.add("opacity-0","translate-y-6");

      setTimeout(()=>{
        if(filter==="all" || card.classList.contains(filter)){
          card.classList.remove("hidden");
          setTimeout(()=>{
            card.classList.remove("opacity-0","translate-y-6");
          },50);
          visibleCount++;
        }else{
          card.classList.add("hidden");
        }
      },200);
    });

    // Empty check
    setTimeout(()=>{
      if(visibleCount === 0){
        emptyMessage.classList.remove("hidden");
      }else{
        emptyMessage.classList.add("hidden");
      }
    },300);

  });
});