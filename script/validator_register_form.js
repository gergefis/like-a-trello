// Κλάση με συναρτήσεις για τον έλεγχο της σωστής συμπλήρωση των πεδίων της φόρμας εγγραφής
// **********************************

// Check if fields have been completed
function validateForm(username, email, password, confirm_password){
  
  // var fillout_form_msg = document.getElementById("fillout_message");

  if (username == "" || email == "" || password == "" || confirm_password == "") {
    alert("Παρακαλώ συμπληρώστε όλα τα πεδία της φόρμας εγγραφής.");
    return false
  }
  return true;
}

// Checking password validation
function checkPassword(password, confirm_password) {

  var error_msg = document.getElementById("confirm_pwd_message");

  if (password.value !== confirm_password.value) { 
    error_msg.textContent  = "Ο κωδικός πρόσβασης δεν ταιριάζει";
    document.getElementById("register_submit").disabled = true; // Απενεργοποιεί το κουμπί υποβολής
  } 
  // BEGIN - Check if the password containsat least 8 characters, 1 digit and 1 upper letter
 // Check if password length is at least 8 characters
  else if (password.length < 8) {
  error_msg.textContent  = "Ο κωδικός πρέπει να περιέχει τουλάχιστον 8 χαρακτήρες";
  document.getElementById("register_submit").disabled = true; // Απενεργοποιεί το κουμπί υποβολής
  }

// Check if password contains at least one digit
  else if (!/\d/.test(password)) {
    error_msg.textContent  = "Ο κωδικός πρέπει να περιέχει τουλάχιστον έναν αριθμό.";
    document.getElementById("register_submit").disabled = true;
  }

// Check if password contains at least one uppercase letter
  else if (!/[A-Z]/.test(password)) {
    error_msg.textContent  = "Ο κωδικός πρέπει να περιέχει τουλάχιστον ένα κεφαλαίο γράμμα.";
    document.getElementById("register_submit").disabled = true;
  }
  else{
    error_msg.textContent = ""; // Αφαιρεί το μήνυμα
    document.getElementById("register_submit").disabled = false; // Ενεργοποιεί το κουμπί υποβολής
  }
  // END - Check if the password include 8 characters, 1 digit and 1 upper letter
}

  //Check if the mail address contains @ 
  function checkMail(user_mail) {
    var mail_error_msg = document.getElementById("confirm_mail_message");
    
    if (!user_mail.value.includes("@")) {
      mail_error_msg.textContent  = "Το email πρέπει να περιέχει '@'";
      document.getElementById("register_submit").disabled = true;
      // alert("Το email πρέπει να περιέχει το σύμβολο '@'.");
    }
    else
    mail_error_msg.textContent = ""; // Αφαιρεί το μήνυμα
    document.getElementById("register_submit").disabled = false;
  }