var kola = [];


const dodajKola = (ev) => {
  ev.preventDefault()
  let park = {
    tablice: document.getElementById("tablice").value,
    marka: document.getElementById("marka").value,
    godiste: document.getElementById("godiste").value,
  };
  kola.push(park);

  showArray()

  document.forms[0].reset(); // izbrisi formu za sledeci unos


}

function deleteItem(niz, index) {
  niz.splice(index, 1);
  showArray();
}


function showArray() {
  document.querySelector("#msg ul").innerHTML = ''
  for (let i = 0; i < kola.length; i++) {
    document.querySelector("#msg ul").innerHTML += `
        <li id=${i}>
     ${i} ${kola[i].tablice}  ${kola[i].marka} ${kola[i].godiste}  <button onclick="deleteItem(kola,${i});console.log(kola);">Obrisi</button>
        </li>
        `
  }
}



console.log('kola', kola)
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
