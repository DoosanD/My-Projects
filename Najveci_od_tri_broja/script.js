"use strict";

document.getElementById("btn").addEventListener("click", function () {
  let brojevi = document.getElementById("input").value.split(",");
  let x = Math.max(...brojevi);
  document.getElementById("rezultat").textContent = x;
});
