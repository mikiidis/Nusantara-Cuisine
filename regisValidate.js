let form = document.querySelector("#regisregis");

form.addEventListener('submit', function(e) {
  e.preventDefault();

  let username = form.elements.username.value;
  let email = form.elements.email.value;
  let password = form.elements.password.value;

  if(username == "") {
    alert("Masukkan username");
  }
  else if (email == ""){
  	alert ("Masukkan email");
  } 
  else if(password == "") {
     alert("Masukkan password");
  }
}
);