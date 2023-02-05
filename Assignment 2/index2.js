function verify(){
  const fname = document.getElementById("fname").value;
  const email = document.getElementById("Email").value;
  const pass = document.getElementById("password").value;
  const confirm = document.getElementById("cpassword").value;
  const phone = document.getElementById("Number").value;

  var pattern = "/^[A-Z]+$/i";
  if(!pattern.match(fname) || fname.length>25 || fname.length==""){
    alert("Invalid name");
  }

  var pattern = "/^[a-z0-9._-]+@[a-z]+.[a-z.]{2,5}$/i";
  if(!pattern.match(email)){
     alert("Invalid email");
  }

  var pattern = "/^[A-Z](?=.*[a-z])(?=.*\d)(?=.*[@$*&])[A-Za-z\d@$*&]{8,15}$/";
  if(!pattern.match(pass)){
    alert("Invalid password");
  }

  if(pass != confirm){
    alert("The two passwords entered are not same");
  }

  var pattern = "/^(\+[0-9]{2,3}[ ])?[0-9]{5}[ ][0-9]{5}$/";
  if(pattern.match(phone)){
    alert("Invalid phone number");
  }


}
