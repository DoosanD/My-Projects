var kola = [];
var park = {};
var godina = new Date().getFullYear();

const dodajKola = (ev) => {
  ev.preventDefault();
  var park = {
    tablice: document.getElementById("tablica").value,
    marka: document.getElementById("marka").value,
    godiste: document.getElementById("godiste").value,
    kilometraza: document.getElementById("kilometraza").value,
  };
  kola.push(park);
  showArray();
  document.forms[0].reset();
};

function deleteItem(niz, index) {
  niz.splice(index, 1);
  showArray();
}

function showArray() {
  document.querySelector("#msg ul").innerHTML = "<li id='a1'></li>";
  document.querySelector("#msg2 ul").innerHTML = "<li id='a2'></li>";
  document.querySelector("#msg3 ul").innerHTML = "<li id='a3'></li>";

  for (let i = 0; i < kola.length; i++) {
    if (
      kola[i].godiste == "" ||
      kola[i].kilometraza == "" ||
      kola[i].marka == "" ||
      kola[i].tablice == ""
    ) {
      alert("Unesite podatke");
      kola.pop(park);
    }
    if (kola[i].kilometraza <= 5000 || godina - kola[i].godiste <= 9) {
      console.log("srednja", kola[i]);
      document.querySelector("#msg ul").innerHTML += `
      <li class="text" id=${i}> 
      🚗 RT: ${kola[i].tablice} Marka: ${kola[i].marka} God: ${kola[i].godiste} KM: ${kola[i].kilometraza}  <button class="old" onclick="deleteItem(kola,${i});console.log(kola);">X</button>
      </li>
      `;
    } else if (
      (kola[i].kilometraza > 5000 && kola[i].kilometraza <= 15000) ||
      (godina - kola[i].godiste > 10 && godina - kola[i].godiste < 20)
    ) {
      console.log("srednja", kola[i]);
      document.querySelector("#msg2 ul").innerHTML += `
      <li class="text" id=${i}> 
      🚗 RT: ${kola[i].tablice} Marka: ${kola[i].marka} God: ${kola[i].godiste} KM: ${kola[i].kilometraza}  <button class="old" onclick="deleteItem(kola,${i});console.log(kola);">X</button>
      </li>
      `;
    } else if (kola[i].kilometraza > 15000 || godina - kola[i].godiste > 30) {
      console.log("stara", kola[i]);
      document.querySelector("#msg3 ul").innerHTML += `
      <li class="text" id=${i}> 
      🚗 RT: ${kola[i].tablice} Marka: ${kola[i].marka} God: ${kola[i].godiste} KM: ${kola[i].kilometraza}  <button class="old" onclick="deleteItem(kola,${i});console.log(kola);">X</button>
      </li>
      `;
    }
  }
}

document.getElementById("btn").addEventListener("click", dodajKola);
