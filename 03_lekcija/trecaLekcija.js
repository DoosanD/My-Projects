//"use strict";
/*
Strict mode:
‘use strict’ 
===IF else if ELSE
if(prvi uslov) {
	Akcije koje će se desiti ako je uslov ispunjen...
}
	else if( drugi uslov ako prvi nije ispunjen){
	
	Akcije koje će se desiti ako je ovaj uslov ispunjen...
}
	else if( treći uslov ako prvi nije ispunjen){
	
	Akcije koje će se desiti ako je ovaj uslov ispunjen...
}
	else {
	Akcije koje će se desiti ako nijedan  uslov nije ispunjen...
}
switch ([izraz]) {
  case [izraz]:
    [naredbe]
  break;
  case [izraz]:
  case [izraz]:
  ...
    [naredbe]
  break;
  default:
  ...
    [naredbe]
}
====FUNKCIJE===
Function declaration
function cakeCreator(chocolates, apples, strawberries){
const cake = “Cake with ${chocolates} chocolates, ${apples} apples and ${strawberries} strawberries.”;
console.log(cake);
return cake;
}
Function expression
const cakeCreator = function(chocolates, apples, strawberries){
const cake = “Cake with ${chocolates} chocolates, ${apples} apples and ${strawberries} strawberries.”;
console.log(cake);
return cake;
}
Arrow function
const grossSallary = netoSalary => {
const maxTaxed = 250000;
If (netoSalary>maxTaxed)
{ return maxTaxed*1,65 + (netoSalary-maxTaxed)*1.1}
else
{
return netoSalary*1,65;
}
*/
// let ime = "Sima2";
// if (ime === "Sima") {
//   console.log("Ti se zoves Sima");
// } else {
//   const prezime = "Petrovic";
//   console.log(`Ti se ne zoves Sima a prezivas se ${prezime}`);
// }
/*
let plata = 6000;
if (plata > 2000) {
  console.log("Srecnice, ako je u evrima!");
  alert("Ovaj covek ima dobr platu!");
}
*/
//ne mora viticasta zagrada ako je samo jedna linija koda
//if (plata > 5000) console.log("Lazes!");
// let netoPlata = 100000;
// let brutoPlata;
// if (netoPlata >= 240000) {
//   brutoPlata = 240000 * 1.6 + (netoPlata - 240000) * 1.1;
// } else {
//   brutoPlata = netoPlata * 1.6;
// }
// console.log(`Za neto platu ${netoPlata} bruto plata iznosi ${brutoPlata}`);

//let ubrano = Number(prompt("Unesite koliko ste nabrali malina u kg: "));
/* ako je ubrano do 10 kg malina ucinak je los, ako je unet izmedju
10 i 20 ucinak je solidan a sve preko 20kg je sjajan */
/*
if (ubrano < 10) {
  console.log("Bas si fuserio danas!");
} else if (ubrano < 20) {
  console.log("Bio si solidan danas!");
} else {
  console.log("Bio si sjajan danas!");
}
console.log("Ovde se nastavlja!");
*/
//Zadatak: korisnik unosi dan (ponedeljak, utorak) i
// ako unese ponedeljak ispisuje se poruka: pocetak nedelje
// a za svaki drugi dan ispisuje se poruka nije ponedeljak
// let dan = prompt("Unesite danasnji dan: ");
/*if (dan == "ponedeljak") {
  console.log("danas je ponedeljak");
} else {
  console.log("Danas nije ponedeljak");
}
*/
//isto, samo nam ispisuje radni dan ili vikend
// if (
//   dan == "ponedeljak" ||
//   dan == "utorak" ||
//   dan == "sreda" ||
//   dan == "cetvrtak" ||
//   dan == "petak"
// ) {
//   console.log("Uneli ste radni dan");
// } else if (dan == "nedelja" || dan == "subota") {
//   console.log("Uneli ste neradni dan");
// } else {
//   console.log("Neispravan unos!");
// }

//Za unetu ocenu (1,2,3,4,5) ispisati opisnu ocenu
// let ocena = Number(prompt("Unesi ocenu: "));
// switch (ocena) {
//   case 1:
//     console.log("Nedovoljan");
//     break;
//   case 2:
//     console.log("Dovoljan");
//     break;
//   case 3:
//     console.log("Dobar");
//     break;
//   case 4:
//     console.log("Vrlodobar");
//     break;
//   case 5:
//     console.log("Odlican");
//     break;
//   default:
//     console.log("Neispravan unos");
// }
// switch (dan) {
//   case "nedelja":
//     console.log("Nedelja");
//   case "subota":
//     console.log("Subota");
//   case "petak":
//     console.log("Petak");
//     break;
//   case "cetvrtak":
//     console.log("Cetvrtak");
//     break;
//   case "sreda":
//     console.log("Sreda");
//     break;
//   default:
//     console.log("Neispravan unos");}


// let wearingUmbrellla = false;
// let isRaining = true;

// if (isRaining) { wearingUmbrellla = true;}
// if (wearingUmbrellla) console.log("you wont get wet");

// let covekGodine = prompt("Koliko godina imate?", "Neispravan unos")

// if (covekGodine <= 30) {
//   alert("Ah mladost..");
// } else if (covekGodine >= 30 && covekGodine <= 60 ) {
//   alert("Kriza srednjih godina nije losa stvar u 2022-oj godini!")
// } else if (covekGodine >= 60 && covekGodine <120) {
//   alert("To su zlatne godine i treba ih iskoristiti pametno!")
// } else {
//   alert("Neispravan unos!")
// }

//////////  Funkcije !!!

// function pitaMaker (cokolada, jabuka, jagoda) {
// const cake = `Pita sa ${cokolada} cokolada, ${jabuka} jabuka, ${jagoda} jagoda.`;
// console.log(cake);
// return cake;
// }

// pitaMaker(1, 8 ,7);

function deljivSaTri(broj) {
  let tri = (broj % 3)
  if (tri == 0) {
    alert("Broj je deljiv sa brojem tri.")
  } else {
    alert("Broj nije deljiv sa brojem tri")
  }
  return
}
function brojDeljivSaTri(broj){
  if (broj%3==0) {
      return "True"
  } else {
      return "False"
  }
}

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



function srednjaVrednostNiza(Niz){
  let suma = 0;
  for (let i = 0; i < Niz.length; i++) {
    zbir = Niz + Niz[i]
  }
  return zbir/Niz // ovde je greska
}
  

// Napisati funkciju koja racuna srednju vrednost niza brojeva.
// Napisati funkciju koja pronalazi najmanji element u nizu brojeva.
// Napisati funkciju koja pronalazi najveci element u nizu brojeva. 

// Napisati funkciju koja racuna srednju vrednost niza brojeva.
// Napisati funkciju koja pronalazi najmanji element u nizu brojeva.
// Napisati funkciju koja pronalazi najveci element u nizu brojeva.
// "use strict"
// let zrak = 5; // zrak = 5
// let zrak1 = zrak++; //zrak1=5, a nakon toga uvecaj zrak za 1
// // zrak1=zrak
// // zrak= zrak +1
// alert(zrak1);
// //zrak je sada 6
// let zrak2 = ++zrak; //zrak2=7, i zrak ce se uvecati za 1, znaci bice 7
// alert(zrak2);
// Napisati funkciju koja racuna srednju vrednost niza brojeva.
// niz = [1, 2, 3]
function srednjaVrednost(niz) {
  let sumaBrojeva = 0;
  for (let i = 0; i < niz.length; i++) {
      sumaBrojeva = sumaBrojeva + niz[i]
  }
  return sumaBrojeva / niz.length
}
console.log("srednja vrednost niza je", srednjaVrednost([1, 2, 3]))
function suma(nizBrojeva) {
  let sumaBrojeva = 0;
  for (let i = 0; i < nizBrojeva.length; i++) {
      sumaBrojeva = sumaBrojeva + nizBrojeva[i];
  }
  return sumaBrojeva;
}
function srednjaVr1(niz) {
  return suma(niz) / niz.length
}
// console.log(srednjaVr1([2, 3, 4]))
// console.log(suma())
// Napisati funkciju koja pronalazi najveci element u nizu brojeva.
// prvi element niza je 1, i on je u uglastim zagradama niz[0]
let brojevi=[1,-1,3,2,5,4]
console.log('brojevi su', brojevi)
function najveciElement(niz) { //niz ne postoji, niz je parametar, tj ova funkcija prima jedan parametar
  let najveci = niz[0] //sada je 1
  console.log('trenutno najveci', najveci)
  for (let i = 0; i<niz.length; i++) {
      console.log('broj je', niz[i])
      if (niz[i]>najveci) {
          najveci = niz[i]
          console.log('sada je najveci', najveci)
      }
  }
  return najveci
}
console.log(najveciElement(brojevi))

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

    const proizvodSvihBrojeva = function (arr) {
      let proizvod = 1;
      for (let i = 0; i < arr.length; i++) {
        proizvod *= arr[i];
      }
      return proizvod;
    };
    console.log(proizvodSvihBrojeva([1, 2, 3, 4, 5]));

    // Napisati funkciju koja racuna srednju vrednost niza brojeva.
    // Napisati funkciju koja pronalazi najmanji element u nizu brojeva.
    // Napisati funkciju koja pronalazi najveci element u nizu brojeva.

    const najveciElementNiza = function (arr) {
      let max = arr[0];
      for (let i = 0; i < arr.length; i++) {
        if (arr[i] > max) {
          max = arr[i];
        }
      }
      return max;
    };
    
    console.log(najveciElementNiza([2, 3, 4, 5, 0, -9]));
