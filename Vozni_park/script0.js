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
  document.forms[0].reset(); // izbrisi formu za sledeci unos
};

function deleteItem(niz, index) {
  niz.splice(index, 1);
  showArray();
}

function showArray() {
  document.querySelector("#msg ul").innerHTML = "<li id='1'></li>";
  document.querySelector("#msg2 ul").innerHTML = "<li id='2'></li>";
  document.querySelector("#msg3 ul").innerHTML = "<li id='3'></li>";

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
    if (kola[i].kilometraza <= 5000 && godina - kola[i].godiste <= 9) {
      console.log("srednja", kola[i]);
      document.querySelector("#msg ul").innerHTML += `
        <li id=${i}>
     ${i} ${kola[i].tablice}  ${kola[i].marka} ${kola[i].godiste} ${kola[i].kilometraza}  <button onclick="deleteItem(kola,${i});console.log(kola);">Obrisi</button>
        </li>
        `;
    } else if (
      // godina - kola[i].godiste > 20 ||
      (kola[i].kilometraza > 5000 && kola[i].kilometraza <= 15000) ||
      (godina - kola[i].godiste > 10 && godina - kola[i].godiste < 20)
    ) {
      console.log("srednja", kola[i]);
      document.querySelector("#msg2 ul").innerHTML += `
      <li id=${i}>
   ${i} ${kola[i].tablice}  ${kola[i].marka} ${kola[i].godiste} ${kola[i].kilometraza}  <button onclick="deleteItem(kola,${i});console.log(kola);">Obrisi</button>
      </li>
      `;
    } else if (kola[i].kilometraza > 15000 || godina - kola[i].godiste > 30) {
      console.log("stara", kola[i]);
      document.querySelector("#msg3 ul").innerHTML += `
      <li id=${i}>
   ${i} ${kola[i].tablice}  ${kola[i].marka} ${kola[i].godiste} ${kola[i].kilometraza}  <button onclick="deleteItem(kola,${i});console.log(kola);">Obrisi</button>
      </li>
      `;
    }
  }
}

document.getElementById("btn").addEventListener("click", dodajKola);
