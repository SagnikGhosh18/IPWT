function verify(){
  const fname = document.getElementById("fname").value;
  const lname = document.getElementById("lname").value;
  const company = document.getElementById("Company").value;
  const address = document.getElementById("Address").value;
  const country = document.getElementById("Country").value;

  const state = document.getElementById("State").value;
  const city = document.getElementById("City").value;

  const email = document.getElementById("Email").value;
  const number = document.getElementById("Number").value;

  const meal = document.getElementById("Meal").value;

  const cash = document.getElementById("payment1");
  const cheque = document.getElementById("payment2");
  const demandDraft = document.getElementById("payment2");

  const pNo = document.getElementById("paymentnumber").value;
  const bankName = document.getElementById("bankname").value;

  const pay = document.getElementById("payableat").value;

  event.preventDefault();


  if(fname=="" || lname=="" || company=="" || address=="" || number=="" || email=="")
  {
    document.getElementById("error").innerHTML = "Missing required field.";
  }

  var pattern = "^[+]{1}(?:[0-9\-\(\)\/\.]\s?){6, 15}[0-9]{1}$";
  if(number.length>14 || !pattern.match(number)){
    document.getElementById("error").innerHTML = "Invalid phone number";
  }

  var pattern = "/^[a-z0-9._-]+@[a-z]+.[a-z.]{2,5}$/i";
  if(!pattern.match(email)){
     document.getElementById("error").innerHTML = "Invalid E-Mail ID";
  }

  if(city== "default"){
    document.getElementById("error").innerHTML = "Please select a city";
  }

  if(state== "default"){
    document.getElementById("error").innerHTML = "Please select a state";
  }

  if(meal== "default"){
    document.getElementById("error").innerHTML = "Please select a meal preference";
  }

  if((city=="Kolkata" && state!="WestBengal") && (city=="Mumbai" && state!="Maharashtra") && (city=="Chennai" && state!="TamilNadu")){
    document.getElementById("error").innerHTML = "Invalid City/State";
  }

  if(cash.checked && cheque.checked && demandDraft.checked){
    document.getElementById("error").innerHTML = "Please select only one payment method";
  }
}
