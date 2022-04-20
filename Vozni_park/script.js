var kola = [];
var godina = new Date().getFullYear();

const dodajKola = (ev) => {
  ev.preventDefault();
  var park = {
    tablice: document.getElementById("tablica").value,
    marka: document.getElementById("marka").value,
    godiste: document.getElementById("godiste").value,
    kilometraza: document.getElementById("kilometraza").value,
  };
  if (
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
  niz.splice(index, 1);
  showArray();
}

function editItem(niz, index) {
  //kad se klikne na dugme, otvori se modal, sa 4 inputa reg tablice, godiste, ... i dugme ok
  // u ta 4 inputa stoji to sto si dohvatio, editujes i onda ides ok
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

    if (kola[i].kilometraza <= 5000 && godina - kola[i].godiste < 10) {
      console.log("nova", kola[i]);
      document.querySelector("#msg ul").innerHTML += `
      <li class="text" id=${i}> 
      🚘 RT: ${kola[i].tablice} Marka: ${kola[i].marka} God: ${kola[i].godiste} KM: ${kola[i].kilometraza}  
      <button class="old" onclick="editItem(kola,${i});console.log(kola);">Edit</button>
      <button class="old" onclick="deleteItem(kola,${i});console.log(kola);">X</button>
      </li>
      `;
    } else if (
      (kola[i].kilometraza <= 15000 &&
        godina - kola[i].godiste >= 10 &&
        godina - kola[i].godiste < 20) ||
      (kola[i].kilometraza <= 15000 && godina - kola[i].godiste < 10)
    ) {
      console.log("srednja", kola[i]);
      document.querySelector("#msg2 ul").innerHTML += `
      <li class="text" id=${i}> 
      🚗 RT: ${kola[i].tablice} Marka: ${kola[i].marka} God: ${kola[i].godiste} KM: ${kola[i].kilometraza}  
      <button class="old" onclick="editItem(kola,${i});console.log(kola);">Edit</button>
      <button class="old" onclick="deleteItem(kola,${i});console.log(kola);">X</button>
      </li>
      `;
    } else {
      console.log("stara", kola[i]);
      document.querySelector("#msg3 ul").innerHTML += `
      <li class="text" id=${i}> 
      🚓 RT: ${kola[i].tablice} Marka: ${kola[i].marka} God: ${kola[i].godiste} KM: ${kola[i].kilometraza}  
      <button class="old" onclick="editItem(kola,${i});console.log(kola);">Edit</button>
      <button class="old" onclick="deleteItem(kola,${i});console.log(kola);">X</button>
      </li>
      `;
    }
  }
}

document.getElementById("btn").addEventListener("click", dodajKola);
