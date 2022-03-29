function najduzeIme(niz) {
  let nizImena = niz.split(",");
  let najduzeIme = nizImena[0];
  for (let i = 1; i < nizImena.length; i++) {
    if (nizImena[i].length >= najduzeIme.length) {
      najduzeIme = nizImena[i];
    }
  }
  alert(najduzeIme); // brojanje najduzeg imena
}
// najduze ime
const imena = ["Ana", "Pavel", "Aleksandar", "Branka"];
const najduzeIme =
  imena[
    imena.map((x) => x.length).indexOf(Math.max(...imena.map((x) => x.length)))
  ];

// .map (mapira u boolean) .filter("filtrira u ono sto se trazi") [... , 2] = raspakuje niz

let brojevi = ["3", "4", "-4"];
let brojeviNum = brojevi.map((x) => Number(x));
console.log(brojeviNum);

let brojevi2 = [2, 9, 55, 2];
let brojeviParan = brojevi2.map((x) => x % 2 == 0);
console.log(brojeviParan);

// nadji imena sa pocetnim slovom "A"
let saA = imena.filter((x) => x.startsWith("A"));
