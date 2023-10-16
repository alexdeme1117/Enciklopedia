<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="A Nagy Enciklopédia">
        <meta name="keywords" content="Github tests ...">
        <meta name="author" content="BudayBoldi, kastascigo, Erik">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enciklopédija</title>
        <link rel="stylesheet" href="./style.css">
        <script language="JScript" src="./script.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    </head>
    <body>
    <b class="p1">A nagy szabad Enciklopédija</b>
    <?php
    $file = fopen("./wiki.txt", "r") or die("ERROR!");
    $sec = 2;
    
    while(!feof($file)) {
        $line = fgets($file);

        if($line !== "\n") {
	    if ($sec % 2 == 0) {
                echo "<p class='p2'>" . $line . "</p>";
	    } else {
		echo "<p class='p1'>" . $line . "</p>";
	    }
        } else {
            $sec += 1;
        }
    }
    
    fclose($file);
    ?>
    </body>
</html>
