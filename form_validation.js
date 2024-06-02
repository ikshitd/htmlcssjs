const name = document.getElementById("name");
const password = document.getElementById("password");
const form = document.getElementById("form");
const errorElement = document.querySelector("#error");

form.addEventListener("submit", (e) => {
  let messages = [];
  if (name.value === "" || name.value == null) {
    messages.push("Name is required !!!");
  }
  if (password.value === "" || password.value == null) {
    messages.push("Password is required !!!!");
  } else {
    if (password.value.length < 6) {
      messages.push("password must be more than 5 characters");
    }
  }
  if (messages.length > 0) {
    errorElement.innerText = messages.join(", ");
    e.preventDefault();
  }
});
