"use strict";

// dodavanja na vise elemenata eventListener
// console.log(document.querySelectorAll(".btn"));
// document.querySelectorAll(".btn").forEach((item) => {
//   item.addEventListener("click", (event) => {
//     alert("Pritisnuto je dugme!");
//   });
// });

document.querySelector(".check").addEventListener("click", function () {
  let ime = document.querySelector(".nameInput").value;
  console.log(ime);
  console.log(typeof ime);
  document.querySelector(".score").textContent = ime.length;
  let allCharacters = {};

  for (let i = 0; i < ime.length; i++) {
    if (ime[i] in allCharacters) {
      allCharacters[ime[i]]++;
    } else {
      allCharacters[ime[i]] = 1;
    }
  }
  document.querySelector(".show-all-characters").textContent =
    JSON.stringify(allCharacters);
});
