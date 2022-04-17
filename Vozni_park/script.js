var kola = [];
var kola2 = [];
var kola3 = [];
var park = {};

const dodajKola = (ev) => {
  ev.preventDefault();
  var park = {
    tablice: document.getElementById("tablica").value,
    marka: document.getElementById("marka").value,
    godiste: document.getElementById("godiste").value,
    kilometraza: document.getElementById("kilometraza").value,
  };
  if (park.kilometraza < 5000) {
    kola.push(park);
  } else if (park.kilometraza >= 5000 && park.kilometraza <= 15000) {
    kola2.push(park);
  } else if (park.kilometraza > 15000) {
    kola3.push(park);
  }

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
    if (document.getElementById("kilometraza").value <= 5000) {
      document.querySelector("#msg ul").innerHTML += `
        <li id=${i}>
     ${i} ${kola[i].tablice}  ${kola[i].marka} ${kola[i].godiste} ${kola[i].kilometraza}  <button onclick="deleteItem(kola,${i});console.log(kola);">Obrisi</button>
        </li>
        `;
    } else if (
      document.getElementById("kilometraza").value > 5000 &&
      document.getElementById("kilometraza").value <= 15000
    ) {
      document.querySelector("#msg2 ul").innerHTML += `
      <li id=${i}>
   ${i} ${kola[i].tablice}  ${kola[i].marka} ${kola[i].godiste} ${kola[i].kilometraza}  <button onclick="deleteItem(kola,${i});console.log(kola);">Obrisi</button>
      </li>
      `;
    } else if (document.getElementById("kilometraza").value > 15000) {
      document.querySelector("#msg3 ul").innerHTML += `
      <li id=${i}>
   ${i} ${kola[i].tablice}  ${kola[i].marka} ${kola[i].godiste} ${kola[i].kilometraza}  <button onclick="deleteItem(kola,${i});console.log(kola);">Obrisi</button>
      </li>
      `;
    }
  }
}

//console.log("kola", kola);
// }

document.getElementById("btn").addEventListener("click", dodajKola);

// window.onload = function () {
//   document.querySelector("#l").onclick = function () {
//     this.parentNode.parentNode.parentNode.removeChild(
//       this.parentNode.parentNode
//     );
//     return false;
//   };
// };

// <span
//   id="close"
//   onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;"
// >
//   x
// </span>;
