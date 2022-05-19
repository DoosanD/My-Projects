function login(email, password) {
  if (email == "test@test.com" && password == "tajnasifra") {
    window.open("home.html", "_self");
  } else {
    alert("Neispravni kredencijali!");
  }
}
console.log("test@test.com // tajnasifra");
