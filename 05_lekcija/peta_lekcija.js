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
