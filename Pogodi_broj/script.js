const randomNumber = Math.floor(Math.random() * 20) + 1;
console.log("Pff cheating, bljak. Broj je: ", randomNumber);

function checkGuess() {
  let myGuess = guess.value;
  if (myGuess == randomNumber) {
    feedback.textContent = "Bravo! Čestitamo ti !!!";
  } else if (myGuess > randomNumber) {
    feedback.textContent =
      "Tvoj pokušaj " + myGuess + ". je veći od tačnog, pokušaj ponovo!";
  } else if (myGuess < randomNumber) {
    feedback.textContent =
      "Tvoj pokušaj " + myGuess + ". je manji od tačnog, pokušaj ponovo!";
  }
}
submitGuess.addEventListener("click", checkGuess);
