const form = document.getElementById("form");
const cardType = document.getElementById("card-type");
const errorElement = document.getElementById("error");
const browserChildren = document.getElementById("cards").children;
const cardNumber = document.getElementById("card-number");

form.addEventListener("submit", (e) => {
  let messages = [];
  let ok = false;
  for (let i = 0; i < browserChildren.length; i++) {
    ok = ok | (browserChildren[i].value === cardType.value);
  }
  if (ok == false) {
    messages.push("Please Enter a valid Card-type");
  } else {
    if (cardType.value === "master-card") {
      console.log(cardNumber.value);
      let ok = true;
      ok = ok & (cardNumber.value.length === 16);
      ok = ok & (cardNumber.value[0] === "5");
      let d = cardNumber.value[1];
      ok = ok & (d === "1" || d === "2" || d === "3" || d === "4" || d === "5");
      if (!ok) {
        messages.push("Invalid Master-Card");
      }
    } else if (cardType === "visa") {
      let ok = true;
      ok =
        ok & (cardNumber.value.length === 16 || cardNumber.value.length === 13);
      ok = ok & (cardNumber.value[0] === "4");
      if (!ok) {
        messages.push("Invalid Visa Card");
      }
    } else {
      let ok = true;
      ok = ok & (cardNumber.value.length === 15);
      ok =
        ok &
        (cardNumber.value[0] === "3" &&
          (cardNumber.value[1] === "4" || cardNumber.value[1] === "7"));
      if (!ok) {
        messages.push("Invalid American Express");
      }
    }
  }
  if (messages.length > 0) {
    e.preventDefault();
    errorElement.innerText = messages.join(", ");
  }
});
