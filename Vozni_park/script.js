"use strict";
const edit = new Audio("edit.wav");
const park = new Audio("park.wav");
const remove = new Audio("remove.wav");
var kola = [];
var godina = new Date().getFullYear();
const modal = document.querySelector(".test");
const overlay = document.querySelector(".overlay");
const btnCloseModal = document.querySelector(".close-modal");
const btnOpenModal = document.querySelectorAll(".show-modal");

const openModal = function () {
  modal.classList.add("modal");
  overlay.classList.remove("hidden");
};

const closeModal = function () {
  modal.classList.remove("modal");
  overlay.classList.add("hidden");
};

const dodajKola = (ev) => {
  ev.preventDefault();
  var park = {
    tablice: document.getElementById("tablica").value,
    marka: document.getElementById("marka").value,
    godiste: document.getElementById("godiste").value,
    kilometraza: document.getElementById("kilometraza").value,
  };

  if (
    document.getElementById("tablica").value == "" ||
    document.getElementById("marka").value == "" ||
    document.getElementById("godiste").value == "" ||
    document.getElementById("kilometraza").value == ""
  ) {
    alert("Sva polja moraju biti popunjena!");
  } else if (
    kola.some(
      (ev) =>
        ev.tablice === park.tablice &&
        ev.marka === park.marka &&
        ev.godiste === park.godiste &&
        ev.kilometraza === park.kilometraza
    )
  ) {
    alert("Automobil sa istim informacijama vec postoji");
    document.forms[0].reset();
  } else {
    kola.push(park);
    showArray();
    document.forms[0].reset();
  }
};

function deleteItem(niz, index) {
  remove.play();
  niz.splice(index, 1);
  showArray();
}

function editItem(niz, index) {
  document.querySelector("#tablica").value = niz[index].tablice;
  document.querySelector("#marka").value = niz[index].marka;
  document.querySelector("#godiste").value = niz[index].godiste;
  document.querySelector("#kilometraza").value = niz[index].kilometraza;
  document.querySelector("#btn").innerText = "Sacuvaj Promene";
  niz.splice(index, 1);
  edit.play();
  showArray();
  openModal();
}

function showArray() {
  document.querySelector("#msg ul").innerHTML = "<li id='a1'></li>";
  document.querySelector("#msg2 ul").innerHTML = "<li id='a2'></li>";
  document.querySelector("#msg3 ul").innerHTML = "<li id='a3'></li>";

  for (let i = 0; i < kola.length; i++) {
    if (kola[i].kilometraza <= 5000 && godina - kola[i].godiste < 10) {
      document.querySelector("#msg ul").innerHTML += `
      <li class="text" id=${i}> 
      🚘 RT: ${kola[i].tablice} Marka: ${kola[i].marka} God: ${kola[i].godiste} KM: ${kola[i].kilometraza}  
      <button class="old" onclick="editItem(kola,${i});console.log(kola);">Edit</button>
      <button class="old" onclick="deleteItem(kola,${i});console.log(kola);">&times;</button>
      </li>
      `;
    } else if (
      (kola[i].kilometraza <= 15000 &&
        godina - kola[i].godiste >= 10 &&
        godina - kola[i].godiste < 20) ||
      (kola[i].kilometraza <= 15000 && godina - kola[i].godiste < 10)
    ) {
      document.querySelector("#msg2 ul").innerHTML += `
      <li class="text" id=${i}> 
      🚗 RT: ${kola[i].tablice} Marka: ${kola[i].marka} God: ${kola[i].godiste} KM: ${kola[i].kilometraza}  
      <button class="old" onclick="editItem(kola,${i});console.log(kola);">Edit</button>
      <button class="old" onclick="deleteItem(kola,${i});console.log(kola);">&times;</button>
      </li>
      `;
    } else {
      document.querySelector("#msg3 ul").innerHTML += `
      <li class="text" id=${i}> 
      🚓 RT: ${kola[i].tablice} Marka: ${kola[i].marka} God: ${kola[i].godiste} KM: ${kola[i].kilometraza}  
      <button class="old" onclick="editItem(kola,${i});console.log(kola);">Edit</button>
      <button class="old" onclick="deleteItem(kola,${i});console.log(kola);">&times;</button>
      </li>
      `;
    }
    document.querySelector("#btn").innerText = "Dodaj Automobil!";
    park.play();
  }
  closeModal();
}

document.getElementById("btn").addEventListener("click", dodajKola);
