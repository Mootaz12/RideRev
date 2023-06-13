"use strict";
import "./style.scss";

//vars and const
const logo = document.querySelector(".logo");
const itemsList = document.querySelectorAll("li");
const footer = document.getElementById("footer");
const carouselBtns = document.querySelectorAll(".carousel-btn");
const hero = document.querySelector(".hero");
const userState = document.getElementById("userState");
let userLoggedIn = false;
//functions
// state functions
const setUserLoggedIn = (value) => {
  userLoggedIn = value;
  userLoggedInState();
};
//header
logo.addEventListener("click", () => {
  itemsList.forEach((item) => {
    console.log(item);
    item.textContent === "Home"
      ? item.classList.add("active")
      : item.classList.remove("active");
  });
});
itemsList.forEach((item) => {
  item.addEventListener("click", () => {
    itemsList.forEach((item) => {
      item.classList.remove("active");
    });
    item.classList.add("active");
  });
});
const userLoggedInState = () => {
  if (userLoggedIn) {
    userState.innerHTML =
      "<button type='button'> <i class='fa-solid fa-user fa-xl' style='color: #000000;'></i></button>";
    userState.classList.add("flex", "place-items-center");
  } else {
    userState.innerHTML =
      "<button class='p-2'>sign in</button><button class='p-2'>sign up</button>";
  }
};
userLoggedInState();
//carousel
carouselBtns.forEach((carouselBtn) => {
  carouselBtn.addEventListener("click", () => {
    carouselBtns.forEach((carouselBtn) => {
      carouselBtn.classList.remove("active-carousel-btn");
    });
    carouselBtn.classList.add("active-carousel-btn");

    if (carouselBtn.hasAttribute("data-carousel")) {
      hero.style.setProperty(
        "--bg-hero-img",
        `url(./images/carousel-${carouselBtn.getAttribute(
          "data-carousel"
        )}.png)`
      );
    }
  });
});

//footer
footer.textContent = `Copyright © ${new Date().getFullYear()} RideRiv. All rights reserved.`;
//exports
export { setUserLoggedIn };
