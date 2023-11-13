<html lang="hu">
<head>
  <title>A <?=$_GET["search"]?> szerkesztése</title>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = htmlspecialchars($_POST['text']);
    $file = fopen("wiki.txt","w");
    fwrite($file, $text);
    fclose($file);
  }
  ?>
  <form method="post" action="">
    <textarea name="text" style="font-size:large"></textarea>
    <input type="submit" value="Szerkesztés"/>
  </form>
</body>
</html>
