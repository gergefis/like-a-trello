<?php
  require_once 'includes/config_session.php';
  require_once 'includes/register_view.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Like a Trello</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/register.css">
  <link rel="stylesheet" href="style/navbar.css">
  <script defer src="script/validator_register_form.js"></script>

</head>
<body>
  <header>
    <!-- Kalούμε το header. php για κάθε σελίδα -->
<?php 
  include("header.php");
?>
</header>

  <main>
    <div id="register">
      <form name="registerform" id="registerform" 
      action="includes/formhandler.inc.php" method="post" onsubmit="return validateForm(this.username_register.value,  this.user_register.value, this.user_mail.value, this.user_pwd.value, this.confirm_pwd.value)"> 

        <div class="register" >
        <span id="duplicate_username">
            <!-- Show error message if username allready exist -->
            <?php
              check_register_errors();
            ?>
         </span>
          <h1>Εγγραφή χρήστη</h1>
          <label for="username_register">Username:</label>
          <input type="text" name="username_register" id="username_register" class="input" autocomplete="username">
          <span id="username_register">
         </span>
        </p>
          <p>
          <label for="user_register">Όνομα Χρήστη:</label>
          <input type="text" name="user_register" id="user_register" class="input" autocomplete="username">
        </p>
        <label for="user_mail">Email:</label>
        <input type="email" name="user_mail" id="user_mail" class="input" onkeyup="checkMail(user_mail)">
        <span id="confirm_mail_message">
        </span> 

        <p>
          <label for="user_pwd">Κωδικός Πρόσβασης:</label>
          <input type="password" name="user_pwd" id="user_pwd" class="input" onkeyup="checkPassword(user_pwd, confirm_pwd)">
        </p> 
        <p>
          <label for="confirm_pwd">Επιβεβαίωση Κωδικού:</label>
          <input type="password" name="confirm_pwd" id="confirm_pwd" class="input" onkeyup="checkPassword(user_pwd, confirm_pwd)"> 
          <span id="confirm_pwd_message"></span>
        </p>
        <p>
          <input type="submit" name="register_submit" id="register_submit" class="button" value="Εγγραφή">
          <input type="hidden" name="redirect_to" value="/">
          <input type="hidden" name="testcookie" value="1">
        </p>
        <?php
              check_register_errors();
            ?>
        </div>
      </form>

    </div>
    
  </main>

  <footer>
    <!-- Kalούμε το footer.php για κάθε σελίδα -->
    <?php 
      include("footer.php"); 
    ?>
  </footer>
</body>
</html>