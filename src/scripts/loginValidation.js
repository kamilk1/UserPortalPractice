var uReg = new RegExp();
var pReg = new RegExp();

addEventListener("submit", e => {
  //e.preventDefault();

  var uName = document.forms["userLogin"]["username"].value;
  var uPass = document.forms["userLogin"]["password"].value;

  alert(uName + " " + uPass);
});
