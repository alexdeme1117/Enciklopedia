<html lang="hu">
<head>
  <title>A <?= $search ?> szerkesztése</title>
</head>
<body>
  <form method="post" action="">
    <textarea name="edit" style="font-size:large">
      <?= $text ?>
    </textarea>
    <input type="submit" value="Szerkesztés"/>
  </form>
</body>
</html>
