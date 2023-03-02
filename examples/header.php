<!DOCTYPE html>
<html>
<head>
  <title>Header</title>
</head>
<body>
  <header>
    <nav>
      <?php
        $links = array("Home" => "index.php", "About" => "about.php", "Contact" => "contact.php");
        foreach($links as $linkName => $linkAddress) {
          echo "<a href='$linkAddress'>$linkName</a>";         
          echo "|";
        }
      ?>
    </nav>
  </header>
</body>
</html>
