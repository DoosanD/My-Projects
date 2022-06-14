let count = 0;

const add = () => {
  let one = parseInt(document.getElementById("inputOne").value || 0);
  let two = parseInt(document.getElementById("inputTwo").value || 0);
  // Get two inputs and make them into variables, and sets initial values to 0 to prevent NaN
  let result = one + two;
  if (one == 0 || two == 0) {
    // To prevent empty inputs
    alert("Empty input");
  } else {
    // If there is a input, write to HTML and call increment function
    document.querySelector(".result").innerHTML = result;
    increment();
  }
};

const increment = () => {
  let numberClicked = document.querySelector(".numberClicked");
  count += 1;
  // Increase the number on every click and write to HTML
  // Correct tense for word "time" if it was used singular or multiple time/times
  numberClicked.textContent = `The calculator was used ${count} time${
    count > 1 ? "s" : ""
  }`;
};
