let kola = [];
const dodajKola = (ev) => {
  ev.preventDefault();
  let park = {
    tablice: document.getElementById("tablice").value,
    marka: document.getElementById("marka").value,
    godiste: document.getElementById("godiste").value,
  };
  kola.push(park);
  document.forms[0].reset(); // izbrisi formu za sledeci unos
  let pre = document.querySelector("#msg ol");
  let li = "";
  kola.forEach((k) => {
    li += `
    <li id='k'>
    ${k.tablice}  ${k.marka} ${k.godiste}  <button onclick="parentNode.remove(); kola.splice(k,1)">Obrisi</button>
      </li>
    `;
  });
  pre.innerHTML = li;
};
document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("btn").addEventListener("click", dodajKola);
});
