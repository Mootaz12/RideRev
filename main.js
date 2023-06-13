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
      "<button type='button' id='profile'> <i class='fa-solid fa-user fa-xl' style='color: #000000;'></i></button>";
    userState.classList.add("grid", "place-items-center");
    //navigation to user profile page
    const profileBtn = document.getElementById("profile");
    profileBtn.addEventListener("click", () => {
      console.log("gg");
      window.location.href = "./pages/userProfile.html";
    });
  } else {
    userState.innerHTML =
      "<button id='signIn' class='py-2 px-4'>sign in</button><button id='signUp' class='py-2 px-4'>sign up</button>";
    //navigation to sign-up/in pages
    const signInBtn = document.getElementById("signIn");
    const signUpBtn = document.getElementById("signUp");
    signUpBtn.addEventListener("click", () => {
      console.log("gg");
      window.location.href = "./src/pages/sign-up.html";
    });
    signInBtn.addEventListener("click", () => {
      window.location.href = "./src/pages/sign-in.html";
      console.log("gg");
    });
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
