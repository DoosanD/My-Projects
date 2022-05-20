"use strict";

const scoreEl = document.querySelector("#score--0");
const current0El = document.getElementById("current--0");
const diceImg = document.querySelector(".dice");
const btnRolle = document.querySelector(".btn--roll");
const btnRestart = document.querySelector(".btn--restart");
let score = 0;

btnRolle.addEventListener("click", function () {
  let dice = Math.ceil(Math.random() * 6);
  diceImg.src = `kockica-${dice}.png`;
  current0El.textContent = dice;
  score += dice;
  scoreEl.textContent = score;
});

btnRestart.addEventListener("click", function () {
  let dice = 0;
  diceImg.src = `question.png`;
  current0El.textContent = 0;
  score = 0;
  scoreEl.textContent = 0;
});
