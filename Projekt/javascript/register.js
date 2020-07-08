function register(x)
{
var login_r = document.forms['register']['login_r'].value;
var email_r = document.forms['register']['email_r'].value;
var password_r = document.forms['register']['password_r'].value;
if (validateMail(email_r))
{
  //if its fine
}
else {
  //its gonna look for mistakes and tell the user what they are
}
if (validatePassw(password_r);)
{
  //if its fine
}
else {
  //its gonna look for mistakes and tell the user what they are
}

};
function validateMail(email_r)
{
  if (email_r==/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)
  {
    return true;
  }
  else{
  return false;
}
};
function validatePassw(password_r)
{
  //7 to 15 characters which contain only characters, numeric digits, underscore and first character must be a letter
  if(password_r==/^[A-Za-z]\w{7,14}$/)
  {
    return true;
  }
  else {
    document.forms["register"]["password_r"].placeholder = "Nieprawidłowe hasło";
    document.forms["register"]["password_r"].placeholder.style.color = "red";
    return false;
  }
};

function login(x)
{
  var login = document.forms['login']['login'];
  var password = document.forms['login']['password'];
  validatePassw(password_r);
}
