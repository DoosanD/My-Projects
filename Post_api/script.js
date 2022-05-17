async function postData() {
  let data = {
    ime: document.querySelector("#ime").value,
    prezime: document.querySelector("#prezime").value,
    jmbg: document.querySelector("#jmbg").value,
  };
  fetch("https://reqbin.com/echo/post/json", {
    method: "POST",
    body: JSON.stringify(data),
  })
    .then((response) => response.json())
    .then(
      (document.querySelector("#str").innerHTML = "Uspesno poslate informacije")
    );
}

document.querySelector("#btn").addEventListener("click", postData);
