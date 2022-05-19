"use strict";

const displayMessage = function (message) {
  document.querySelector(".message").textContent = message;
};

document.querySelector(".check").addEventListener("click", function () {
  let ime = document.querySelector(".nameInput").value;
  console.log(ime);
  console.log(typeof ime);
  document.querySelector(".score").textContent = ime.length;
});
