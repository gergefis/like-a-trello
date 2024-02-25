<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Like a Trello</title>
  <link rel="stylesheet" href="style/signin.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/navbar.css">

</head>
<body>
  <header>
    <!-- Kalούμε το header. php για κάθε σελίδα -->
    <?php 
    include('header.php'); 
    ?>
</header>

  <main>
    <div id="login">
    <form name="loginform" id="loginform" action="#"  method="post">
      <div class="login">
        <h1>Είσοδος χρήστη</h1>
          <p>
            <label for="user_login">Όνομα Χρήστη:</label>
            <input type="text" name="log" id="user_login" class="input" value size="20px" autocomplete="username" required>
          </p>
      <div class="user-pass-wrap">
        <label for="user_pass">Κωδικός Πρόσβασης:</label>
        <input type="password" name="pwd" id="user_pass" class="input password-input" value size="20px" autocomplete="current-password" spellcheck="false" required>
      </div>
      <p>
        <input type="submit" name="register_submit" id="register_submit" class="button" value="Είσοδος">
        <input type="hidden" name="redirect_to" value="/">
        <input type="hidden" name="testcookie" value="1">
      </p>
      <div class="signup">
        <a href="signup.php" rel="signup">Εγγραφή νέου χρήστη</a>
      </div>
    </div>
  </div>
    </form>
    
  </main>

  <footer>
    <!-- Kalούμε το footer.php για κάθε σελίδα -->
    <?php 
      include('footer.php'); 
    ?>
  </footer>
  <script src="script/script.js"></script>
</body>
</html>