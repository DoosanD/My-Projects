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

  let pre = document.querySelector("#msg pre");
  pre.textContent = "\n" + JSON.stringify(kola, "\t", 2);
};
document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("btn").addEventListener("click", dodajKola);
});
