// Κλάση με συναρτήσεις για τον έλεγχο της σωστής συμπλήρωση των πεδίων της φόρμας εγγραφής

  /*var username = document.getElementById("user_register").value;
  var email = document.getElementById("user_mail").value;
  var password = document.getElementById("user_pwd").value;
  var confirm_password = document.getElementById("confirm_pwd").value;
  var submit_button = document.getElementsByClassName("register_submit");*/


// Check if fields have been completed
function validateForm(username, email, password, confirm_password){
  if (username == "" || email == "" || password == "" || confirm_password == "") {
    alert("Παρακαλώ συμπληρώστε όλα τα πεδία της φόρμας εγγραφής.");
    return false;
  }
  return true;
}

// Checking password validation
function checkPassword(password, confirm_password) {

  var error_msg = document.getElementById("confirm_pwd_message");

  if (password.value != confirm_password.value) { 
    error_msg.textContent  = "Ο κωδικός πρόσβασης δεν ταιριάζει";
    document.getElementById("register_submit").disabled = true; // Απενεργοποιεί το κουμπί υποβολής
  } 
  else {
    error_msg.textContent = ""; // Αφαιρεί το μήνυμα
    document.getElementById("register_submit").disabled = false; // Ενεργοποιεί το κουμπί υποβολής

  }
}