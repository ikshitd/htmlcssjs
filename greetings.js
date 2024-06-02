let container = document.querySelector(".container");
const date = new Date();
let currentTime = date.getHours();
let greetings =
  currentTime >= 0 && currentTime < 12
    ? "Good Morning"
    : currentTime >= 12 && currentTime < 18
    ? "Good Afternoon"
    : "Good Evening";
container.innerHTML = `<h1>${greetings}</h1>`;
