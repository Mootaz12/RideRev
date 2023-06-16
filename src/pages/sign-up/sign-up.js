import "../css/pagesStyle.scss";

("use strict");

// vars and const
const form = document.getElementById("form");
const nameInput = document.getElementById("name-input");
const phoneInput = document.getElementById("phone-input");
const passInput = document.getElementById("pass-input");
const confPassInput = document.getElementById("pass-conf-input");
const showPassBtn = document.getElementById("show-pass-btn");
const showPassConfBtn = document.getElementById("show-pass-conf-btn");
const errPhoneMsg = document.getElementById("errMsg");

// functions
form.addEventListener("submit", (e) => {
  e.preventDefault();
  const phoneFormat = /^\d{8}$/;

  if (nameInput.value.trim() === "") {
    alert("Please enter your name");
  } else if (phoneInput.value.trim() === "") {
    alert("Please enter a phone number");
  } else if (!phoneFormat.test(phoneInput.value.trim())) {
    alert("Please enter a valid phone number");
  } else if (passInput.value === "") {
    alert("Please enter a password");
  } else if (
    confPassInput.value === "" ||
    confPassInput.value !== passInput.value
  ) {
    alert("Please confirm your password");
  } else {
    form.submit();
  }
});

showPassBtn.addEventListener("click", () => {
  passInput.classList.toggle("show-pass");
  passInput.classList.contains("show-pass")
    ? passInput.setAttribute("type", "text")
    : passInput.setAttribute("type", "password");
});

showPassConfBtn.addEventListener("click", () => {
  confPassInput.classList.toggle("show-pass");
  confPassInput.classList.contains("show-pass")
    ? confPassInput.setAttribute("type", "text")
    : confPassInput.setAttribute("type", "password");
});
