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
    <!-- Kalούμε το header.php για κάθε σελίδα -->
    <?php include('header.php'); ?>
</header>

  <main>

  <form action="">
    <div class="group-title">
      <h1>Ομάδα A</h1>
    </div>

    <div class="members">
        <ul>
          <li><a href="#">Μέλος 1</a></li>
          <li><a href="#">Μέλος 2</a></li>
          <li><a href="#">Μέλος 3</a></li>
        </ul>
    </div>

    <!-- <form action=""> -->
      <div class="add-new-members">
        <input type="text" name="" id="list-task-name" placeholder="Όνομα Μέλους">
        <button type="submit" onclick="submiForm()" class="button">Προσθήκη Μέλους
        </button>
      </div>
    
    <div class="add-new-members">
      <!-- <label for="dropdown"></label> -->
      <select name="dropdown" id="slct-cat-dropdown">
      <option value="Εργασία 1">Εργασία 1</option>
    </select>
    <select name="dropdown" id="slct-cat-dropdown">
      <option value="Μέλος 1">Μέλος 1</option>
    </select>
      <button class="assign-task-button">Ανάθεση Εργασίας</button>
    </div>
  </form>

  <form action="">
    <div class="create-task">
      <input type="text" placeholder="Όνομα Ομάδας" id="new-group">
      <button class="button">Δημιουργία Ομάδας</button>
    </div>
  </form>
    
  </main>

  <footer>
    <!-- Kalούμε το footer.php για κάθε σελίδα -->
    <?php include('footer.php');?>
  </footer>
  <script src="script/script.js"></script>
</body>
</html>
