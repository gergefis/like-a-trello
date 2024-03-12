<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Like a Trello</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/navbar.css">
</head>
<body>
  <header>
    <!-- Kalούμε το header. php για κάθε σελίδα -->
    <?php include('header.php'); ?>
</header>
  <main>
    <!-- Μηνύμα καλοσωρίσματος και περιγραφή -->
    <div class="welcome">Καλωσορίσατε στην Πλατφόρμα Διαχείρισης Εργασιών</div>
    <div class="desc"><h1>Έξυπνη, αποτελεσματική και άνετη διαχείριση των καθημερινών σας εργασιών.</h1></div>

    <!-- Εικόνες σχετικά με την λειτουργία της εφαρμογής -->
    <div>
      <img src="icons/like-a-trello-photo1.webp" alt="photo2">
      <img src="icons/like-a-trello-photo2.png" alt="photo1">
    </div>

    <!-- Κουμπιά Είσοδου / Εγγραφής -->
    <div class="button-container">
      <a class="button" href="signin.php">Είσοδος</a>
      <a class="assign-task-button" href="register.php">Εγγραφή</a>
    </div>
    
  </main>

  <footer>
    <!-- Kalούμε το footer.php για κάθε σελίδα -->
    <?php include('footer.php'); ?>
  </footer>
  <!-- Φορτώνουμε τα αρχεία script -->
  <script src="script/active_label.js"></script>
</body>
</html>