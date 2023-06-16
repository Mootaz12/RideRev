import "../css/pagesStyle.scss";
("use strcit");
// vars and const
const form = document.getElementById("form");
const emailPhoneInput = document.getElementById("phone");
const passInput = document.getElementById("pass-input");
const showPassBtn = document.getElementById("show-pass-btn");
// functions
form.addEventListener("submit", (e) => {
  e.preventDefault();
  const emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const phoneFormat = /^\d{8}$/;

  const input = emailPhoneInput.value.trim();
  if (input === "") {
    alert("Please enter an email or phone number");
  } else if (!emailFormat.test(input) && !phoneFormat.test(input)) {
    alert("Please enter a valid email or phone number");
  } else if (passInput.value === "") {
    alert("Please enter a password");
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
