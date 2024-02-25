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
    <?php
      include("header.php");
    ?>
</header>

  <main>
    <!-- BEGIN Λίστες Εργασίων -->
    <div>
      <dl>
        <h1>Λίστα Εργασιών 1</h1>
        <dt><a href="#">Εργασία 1</a></dt>
        <dt><a href="#">Εργασία 2</a></dt>
        <dt><a href="#">Εργασία 3</a></dt>
      </dl>
      <dl>
        <h1>Λίστα Εργασιών 2</h1>
        <dt><a href="#">Εργασία 4</a></dt>
        <dt><a href="#">Εργασία 5</a></dt>
        <dt><a href="#">Εργασία 6</a></dt>
      </dl>
    </div>
<!-- END Λίστες Εργασίων -->

<!-- BEGIN Φόρμα δημιουργίας καινούριας λίστας εργασιών -->
  <form action="#" >
    <div class="form-group">
      <input type="text" name="" id="list-task-name" placeholder="Τίτλος Λίστας"> 

      <!-- <label for="dropdown"></label> -->
      <select name="dropdown" id="slct-cat-dropdown">
        <option value="Κατηγορία 1">Κατηγορία 1</option>
        <option value="Κατηγορία 2">Κατηγορία 2</option>
        <option value="Κατηγορία 3">Κατηγορία 3</option>
      </select>
      <button type="submit" onclick="submitForm()" class="button">
        Δημιουργία Λίστας</button>
    </div>
  </form>
    <!-- END Φόρμα δημιουργίας καινούριας λίστας εργασιών -->
  </main>

  <footer>
        <!-- Kalούμε το footer.php για κάθε σελίδα -->
    <?php 
      include("footer.php");
    ?>
  </footer>
  <script src="script/script.js"></script>
</body>
</html>