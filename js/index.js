function changeBackgroundColor() {
  document.querySelector("p").style.backgroundColor = "yellow";
  return;
}

function changeBackgroundColoronMouseOut() {
  document.querySelector("p").style.backgroundColor = "red";
  return;
}

let runningClock = null;

function getCurrentTime() {
  let date = new Date();
  let currentHours = date.getHours();
  let currentMinutes = date.getMinutes();
  let currentSeconds = date.getSeconds();
  let session = "AM";
  if (currentHours == 0) {
    currentHours = 12;
  }
  if (currentHours > 12) {
    currentHours = currentHours - 12;
    session = "PM";
  }
  currentHours = currentHours < 10 ? "0" + currentHours : currentHours;
  currentMinutes = currentMinutes < 10 ? "0" + currentMinutes : currentMinutes;
  currentSeconds = currentSeconds < 10 ? "0" + currentSeconds : currentSeconds;

  let time =
    currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + session;
  const clock = document.querySelector(".time");
  clock.innerHTML = time;
  runningClock = setTimeout(() => {
    getCurrentTime();
  }, 1000);
}

function stopCurrentTime() {
  console.log("HERE");
  console.log(runningClock);
  clearTimeout(runningClock);
  runningClock = null;
}
let timer;
let counter = 100;
let working = false

document.querySelector("input").addEventListener("change", () => {
  counter = document.querySelector("input").value;
});

function startTimer() {
  console.log("counter: ", counter);
  const TimerInfo = document.querySelector(".timer");
  timer = setTimeout(() => {
    TimerInfo.innerHTML = counter;
    counter--;
    startTimer();
  }, 1000);
}

function Timer() {
  if (working) {
    clearTimeout(timer);
    working = false;
  } else {
    startTimer();
    working = true;
  }
}