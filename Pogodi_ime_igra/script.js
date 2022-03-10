"use strict";

// const displayMessage = function (message) {
//   document.querySelector(".message").textContent = message;
// };

// console.log(document.querySelector(".message"));
// document.querySelector(".message").textContent = "U imenu Branka imas 6 slova";
// //document.querySelector(".left").setAttribute("style", "width:22rem");
// document.querySelector(".btn").addEventListener("click", function () {
//   alert("Zdravo svima!!!");
// });
document.querySelector(".check").addEventListener("click", function () {
  let ime = document.querySelector(".nameInput").value;
  console.log(ime);
  console.log(typeof ime);
  document.querySelector(".score").textContent = ime.length;
});
prompt("unesi nesto");
