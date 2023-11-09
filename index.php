<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="A Nagy Enciklopédia">
        <meta name="keywords" content="Github tests ...">
        <meta name="author" content="BudayBoldi, kastascigo, Erik">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enciklopédija</title>
        <link rel="stylesheet" href="./style.css">
	<script language="JScript" src="./audio.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </head>
    <body>
    <br>
    <table border="1">
      <tbody>
        <tr>
	  <th align="center"><b>Eredeti cim</b></th>
	  <th align="center"><b>Magyar cim</b></th>
	  <th align="center"><b>Kötetek száma</b></th>
          <th align="center"><b>Kiadás ideje</b></th>
        </tr>
        <tr></tr><tr></tr><tr></tr><tr></tr>
      </tbody>
    </table>
    <br>
    <br>
    <div class="box">
      <img src="./64x64.png" ID="logo">
      <h3>Csatlakozzon a szerkesztőkhöz!</h3>
      <Button ID="Gomb" onclick="Play();"><a href="./editor.php" target="_blank" data-toggle="tooltip" title="<img src='./proud.png'/>">Csatlakozom</a></Button>
    </div>
    <br><br>
    <b class="p1">A nagy szovjet Enciklopédija</b>
    <?php
    $file = fopen("./wiki.txt", "r") or die("ERROR!");
    $sec = 2;
    
    while(!feof($file)) {
        $line = fgets($file);

        if($line !== "\n") {
	    if ($sec % 2 == 0) {
                echo "<p class='p2' ID='" . $sec . "'>" . $line . "</p>";
	    } else {
		echo "<p class='p1' ID='" . $sec . "' onclick='clicked(this.id)'>" . $line . "</p>";
	    }
        } else {
            $sec += 1;
        }
    }
    
    fclose($file);
    ?>
    <script language="JScript" src="./script.js"></script>
    <script language="JScript" src="./dtab.js"></script>
    </body>
</html>
