<html lang="hu">
<head>
  <title>A <?= $_GET["search"] ?> szerkesztése</title>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];
  }
  ?>
  <form method="post" action="">
    <textarea name="edit" style="font-size:large">
      <?= $text ?>
    </textarea>
    <input type="submit" value="Szerkesztés"/>
  </form>
</body>
</html>
