<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Like a Trello</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/register.css">
  <link rel="stylesheet" href="style/navbar.css">

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
      <form name="registerform" id="registerform" action="#" method="post">
        <div class="register">
          <h1>Εγγραφή χρήστη</h1>
          <p>
          <label for="user_register">Όνομα Χρήστη:</label>
          <input type="text" name="user_register" id="user_register" class="input" autocomplete="username" required>
        </p>
        <label for="user_email">Email:</label>
        <input type="email" name="user_mail" id="user_mail" class="input" required>
        <p>
          <label for="user_pass">Κωδικός Πρόσβασης:</label>
          <input type="password" name="user_pass" id="user_pass" class="input" required>
        </p>
        <p>
          <label for="check_pass">Επιβεβαίωση Κωδικού:</label>
          <input type="password" name="check_pass" id="check_pass" class="input" required>
        </p>
        <p>
          <input type="submit" name="register_submit" id="register_submit" class="button" value="Εγγραφή">
          <input type="hidden" name="redirect_to" value="/">
          <input type="hidden" name="testcookie" value="1">
        </p>
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