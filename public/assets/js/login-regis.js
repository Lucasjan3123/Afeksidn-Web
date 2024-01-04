const passwordInput = document.getElementById("passwordInput");
const confirmPasswordInput = document.getElementById("confirmPasswordInput");
const passwordIcons = document.querySelectorAll(".password-icon");

passwordIcons.forEach((passwordIcon) => {
  passwordIcon.addEventListener("click", () => {
    const type = passwordIcon.previousElementSibling.getAttribute("type") === "password" ? "text" : "password";
    passwordIcon.previousElementSibling.setAttribute("type", type);
    passwordIcon.classList.toggle("fa-eye");
    passwordIcon.classList.toggle("fa-eye-slash");
  });
});
