<?php
echo ' 
<h1>Πλατφόρμα Διαχείρισης Εργασιών</h1>

<!-- Menu -->
<nav class="navbar"> 
  <ul>

  <li>
    <a id="logo" href="index.php">
    <img src="icons/like-a-trello-logo.png" alt="like-a-trello"></a>
  </li>

  <li class="nav-item" id="home">
    <a id="home_action" href="index.php">Αρχική</a>
  </li>

  <li class="nav-item" id="task">
    <a id="list-action" href="task.php">Λίστα Εργασιών</a>
  </li>

  <li class="nav-item" id="group">
  <a id="group_action" href="group.php">Ομάδες</a>
  </li>

  <a href="login.php"><button>Είσοδος</button></a>
</ul>
</nav>';

// Include your script file
// echo '<script src="action_label.js"></script>';