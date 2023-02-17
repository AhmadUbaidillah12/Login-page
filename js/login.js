const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const containerButton = document.getElementById("container");

registerButton.addEventListener("click", () => {
    containerButton.classList.add("right-panel-active");
});

loginButton.addEventListener("click", () => {
    containerButton.classList.remove("right-panel-active");
});