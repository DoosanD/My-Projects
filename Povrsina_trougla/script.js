function trougao() {
  let a = parseInt(document.getElementById("a").value || 0);
  let b = parseInt(document.getElementById("b").value || 0);
  let c = parseInt(document.getElementById("c").value || 0);
  let s = (a + b + c) / 2;
  let area = Math.sqrt(s * ((s - a) * (s - b) * (s - c)));

  if ((a, b, c == 0)) {
    alert("Unesite duzine stranica! ");
  }

  if (isNaN(area)) {
    alert("Nemoguce stranice");
  }

  if (area) {
    document.getElementById(
      "display"
    ).innerHTML = `<i>Površina trougla je:  <i/>${area}`;
  }
}
