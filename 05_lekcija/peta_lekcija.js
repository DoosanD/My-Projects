/*
function procenat(broj, proc) {
    {
        return (broj / 100 * proc)
    }
}

function procenatZlata(karat) {
    return karat * 4.2;
}

function samoZlato(masaNakita, karat){

}

function kmUMilje(km){
    return km * 0.6
}

function daLiJePalindrom(rec){
    const ObrniRec = arrayValues.reverse();
    if(rec == ObrniRec) {
        console.log('It is a palindrome');
    }
    else {
        console.log('It is not a palindrome');
    }
}

function formatedNumber(num) {
    if (num <= 9) {
      return "0" + String(num);
    } else {
      return String(num);
    }
  }
  
  function datum(dan, mesec, godina) {
    console.log(
      formatedNumber(dan) + "." + formatedNumber(mesec) + "." + String(godina)
    );
  }
  
  //zadatak: napisati funkciju koja vraca procenat nekog broja npr: procenat(70,4)
  //procenat % = 1/100 : 70 * 4 * 1/100
  function procenat(broj, proc) {
    {
      return (broj / 100) * proc;
    }
  }
  //zadatak : napisati funkciju koja vraca koliko procenata zlata
  //ima u zadatoj vrednosti u karatima
  //1 karat = 4.2%
  function procenatZlata(karat) {
    return karat * 4.2;
  }
  //zadatak: napisati funkciju koja vraca koliko grama zlata
  //se nalazi u nekom nakitu za koji znamo koliko ima karata i njegovu masu
  function samoZlato(masaNakita, karat) {
    return procenat(masaNakita, procenatZlata(karat));
  }
  
  //zadatak: napisati funkciju koja pretvara km u milje
  function kmUMilje(km) {
    return 0.621371192 * km;
  }
  
  //zadatak: napisati funkciju koja za vraca da li je rec palindrom
  function palindrom(rec) {
    let rev = rec.split("").reverse().join("");
    return rec == rev;
  }
  */

/*
  //NIZOVI!!
  
  // Operacije sa nizovima
  let voce = ["pomarandza", "visnja", "kruska"]
  // Dohvatanje odredjenog elementa niza:
  let prvi = voce[0]; 
  // Indeksi su “zero based”, znaci prvi element u nizu ima indeks 0 a ne 1..
  let drugi = voce[1]; 
  // Dodavanje novog elements na kraju niza
  let novaDuzina = voce.push("pomarandza");
  // Ovde je zgodno da vidimo da metod push vraca koliko je elemenata u nizu (duzina niza) nakon dodavanja novog elementa a efekat je da se sad i “pomorandza” nalazi u nizu voce. 
  // Dodavanje novog elementa na pocetku niza
  let novaDuzina = voce.unshift("visnja");
  // Izbacivanje poslednjeg elementa iz niza
  let poslednji = voce.pop();
  // Izbacivanje prvog elementa iz niza
  let prvi = voce.shift();
  // Pronalazenje indeksa nekog elementa u nizu
  let pozicija = voce.indexOf("kruska");
  // Izbacivanje niza  elmenata od zadatog indeksa iz niza sa odredjenom duzinom
  let izbaceniElement = voce.splice(0,2);
  // Prvi broj - 2 , odredjuje od kog indeksa zelimo da pocnemo sa izbacivanjem, drugi broj - 3 , odredjuje koliko elemenata izbacujemo.
  
  let oceneMatematika = new Array(3, 4, 2, 5);
  console.log(oceneMatematika);
  //FOR petlja
// console.log("Zdravo svima!");
// console.log("Zdravo svima!");
// console.log("Zdravo svima!");
// console.log("Zdravo svima!");
// console.log("Zdravo svima!");

for (let i = 1; i <= 0; i++) {
  console.log(`FOR: Zdravo svima ${i}-ti put!`);
}
console.log("Izasao sam iz petlje");

let imena = ["Ivan", "Dejan", "Milan", "Katarina", "Pavel", "Ana", "Filip"];
// console.log(`Zdravo ${imena[0]}`);
// console.log(`Zdravo ${imena[1]}`);
// console.log(`Zdravo ${imena[2]}`);
// console.log(`Zdravo ${imena[3]}`);
// console.log(`Zdravo ${imena[4]}`);
// console.log(`Zdravo ${imena[5]}`);
for (let i = 0; i < imena.length; i++) {
  console.log(`Zdravo ${imena[i]} iz FOR-a`);
}
//napisati funkciju koja sabira sve elemente nekog niza
// brojevi = [1,4,2,3]
// [-1,3,4,8,9]
//suma(brojevi) da mi vrati 10
function suma(nizBrojeva) {
  console.log("TRALALALLALALALA!");
  let sumaBrojeva = 0;
  console.log(nizBrojeva);
  for (let i = 0; i < nizBrojeva.length; i++) {
    sumaBrojeva = sumaBrojeva + nizBrojeva[i];
    console.log(`Sada je suma ${sumaBrojeva}`);
  }
  return sumaBrojeva;
}
console.log("************");
let brojevi = [1, 4, 2, 3];
suma(brojevi);
//napiosati funkciju koja vraca proizvod evih elemenata nekog niza brojeva

function formatedNumber(num) {
  if (num <= 9) {
    return "0" + String(num);
  } else {
    return String(num);
  }
}

function datum(dan, mesec, godina) {
  console.log(
    formatedNumber(dan) + "." + formatedNumber(mesec) + "." + String(godina)
  );
}

//zadatak: napisati funkciju koja vraca procenat nekog broja npr: procenat(70,4)
//procenat % = 1/100 : 70 * 4 * 1/100
function procenat(broj, proc) {
  {
    return (broj / 100) * proc;
  }
}
//zadatak : napisati funkciju koja vraca koliko procenata zlata
//ima u zadatoj vrednosti u karatima
//1 karat = 4.2%
function procenatZlata(karat) {
  return karat * 4.2;
}
//zadatak: napisati funkciju koja vraca koliko grama zlata
//se nalazi u nekom nakitu za koji znamo koliko ima karata i njegovu masu
function samoZlato(masaNakita, karat) {
  return procenat(masaNakita, procenatZlata(karat));
}

//zadatak: napisati funkciju koja pretvara km u milje
function kmUMilje(km) {
  return 0.621371192 * km;
}

//zadatak: napisati funkciju koja za vraca da li je rec palindrom
function palindrom(rec) {
  let rev = rec.split("").reverse().join("");
  return rec == rev;
}

// let oceneMatematika = new Array(3, 4, 2, 5);
// console.log(oceneMatematika);


//Zadatak: napisati funkciju koja vraca da li se u nizu nalazi zadati broj
// postojiBroj([1,2,3,4],2)=>true
// postojiBroj([1,3,4,22], 7)=>false

//Zadatak: napisati funkciju vraca prvi paran broj iz niza brojeva
//Zadatak: napisati funkciju koja vraca duzinu niza
//Zadatak: napisati funkciju koja vraca novi niz formiran na osnovu
//zadatog tako sto iz zadatog niza izvlaci pozitivne brojeve 

// function tacanBroj(nizBrojeva, broj) {
//   for (let i = 0; i < nizBrojeva.length; i++) {
//     if (nizBrojeva[i] == broj) { return broj[i]; }  ;
//   }
//   return sumaBrojeva;
// }

// tacanBroj([2,3,4,5,6], 3)

function prviParanBroj(listaBrojeva){
  for(let i=0; i<listaBrojeva.length; i++){
    if(listaBrojeva[i]%2==0){
      return listaBrojeva[i];
    }
  }
  return "Nema parni broj"
}

function nasLength(nekiNiz){
  let brojac =0;
  for(let i=0; i<nekiNiz.length; i++){
    brojac++;{
    }
  }
  return (brojac);
}
function noviPozitivanNiz(nizBrojeva){
  let noviNiz = [];
  for(let i=0; i<nasLength(nizBrojeva); i++){
  if(nizBrojeva[i]>0){
  noviNiz.push(nizBrojeva[i]);
  }
  }
  return noviNiz;
}

*/


//14.02.2022

let niz = ['papir', 'olovka', 'knjiga'];
//console.log(niz.includes('papir'));

let brojeviProvera = [1,3,4,5,6];
//console.log(brojeviProvera.includes(2));

// Zadatak
//Potrebno je definisati funkciju koja računa proizvod dva broja i ispisuje vrednost proizvoda.

function proizvod(n, m){
  return n*m;
}


//Zadatak
//Definisati funkciju koja prima dva parametra i računa vrednost prvog parametra na drugi parametar.
function eksponent(n, m){
  console.log(n**m)
}

//Zadatak
//Definisati funkciju koja računa proizvod dva broja a zatim računa 
//da li je proizvod paran ili ne i korisniku ispisuje poruku. 
//Poruku je potrebno ispisati uz pomoc funkcije alert()
function novaFunkcija(a,b){
  let nasProizvod = proizvod(a,b);
  if(nasProizvod%2==1){
    alert("Nas proizvod nije paran");
  }
  else{
    alert("Nas proizvod je paran");
  }
}

//Zadatak
//Napisati funkciju koja uz pomoć for petlje ispisuje brojeve od 1 do 10
//a nakon toga ispisuje brojeve od 10 do 1
function ispisi(){
  for(let i=1; i<=10; i++){
    console.log(i);
  }
  for(let i=10; i>0; i--){
    console.log(i);
  }
}
//Istu ovu funkciju , samo je potrebno da funkcija prima parametara do kog broji
function ispisiNova(n){
  for(let i=1; i<=n; i++){
    console.log(i);
  }
  for(let i=n; i>0; i--){
    console.log(i);
  }
}


//Zadatak
//Napisati funkciju koja uz pomoć for petlje ispisuje 
//samo parne brojeve od 1 do 100. 
function odJedanDoSto(){
  for(let i=1; i<=100; i++){
    if(i%2==0){
      console.log(i);
    }
  }
}


//Zadatak
//Deklarisati niz i dodeliti mu nekoliko elemenata niza , 
//a zatim promeniti sve elemente niza uz pomoć for petlje.
function promeniNiz(){
  let niz = [1,2,3,4,5];
  for(let i=0; i<niz.length; i++){
    niz[i] = niz[i]+5;
  }
  console.log(niz);
}


// forEach petlja
function zaSvakiElement(){
  let automobili = ['Audi', 'Fiat', 'Citroen', 'Renault'];
  automobili.forEach(auto => {console.log(auto)});
}

// Napisati niz koji se sastoji od muski ili zenskih imena , 
// zatim unutar funkcije deklarisati vase ime i proveriti da li se nalazi u nizu
// poruku ispisati uz pomoc alerta

function imenaProvera() {
  let muskaImena = ["Milos", "Filip", "Marko", "Nikola", "Uros", "Dusan"];
  let mojeIme = "Filip";
  let has = false;
  muskaImena.forEach(ime => {
    if (ime == mojeIme) {
      has = true;
    }
  })
  if (has) {
    alert("Moje ime se nalazi u nizu")
  }
  else {
    alert("Moje ime se ne nalazi u nizu")
  }
}

// zadatak za domaci
// Napisati funkciju koja iz JMBG-a vraća datum rođenja osobe, formatiran dd. mm. yyyy.
// (ako 5 cifra pocinje sa 9, godinu vratiti sa 1 ispred, a u ostalim slucajevima da vrati 2 ispred)
// jmbg 1201970123456 vratiti kao 12. 01. 1970.
// jmbg 1201003123456 vratiti kao 12. 01. 2003.

function format(jmbg) {
  jmbg = jmbg.toString();
  let formated;
  for (let i = 0; i < jmbg.length; i++) {
    if (jmbg[4] == 9) {
      formated = (`${jmbg[0]}${jmbg[1]}` + "." + `${jmbg[2]}${jmbg[3]}` + "." + `1${jmbg[4]}${jmbg[5]}${jmbg[6]}.`);
    } else {
      formated = (`${jmbg[0]}${jmbg[1]}` + "." + `${jmbg[2]}${jmbg[3]}` + "." + `2${jmbg[4]}${jmbg[5]}${jmbg[6]}.`);
    }
  }
  return formated
}
console.log(format(1201003123456)); 