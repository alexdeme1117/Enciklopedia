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
  <p>hint: használj üres sort uj szekcióként!</p>
  <form method="post" action="">
    <textarea name="text" style="background:#F1DBB3;height:500px;width:1000px;font-size:large"><?php
    $f = fopen("wiki.txt", "r");
    while(!feof($f)) {
      $l = fgets($f);
      echo $l;
    }
    fclose($f);
    ?></textarea>
    <br/>
    <br/>
    <input type="submit" value="Szerkesztés" style="font-size:large;height:35px"/>
  </form>
</body>
</html>
