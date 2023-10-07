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
    <?php
    $file = fopen("./wiki.txt", "r") or die("ERROR!");
    
    while(!feof($file)) { 
        $line = fgets($file);

        if($line == "") {
            $sec += 1;
        } else {
            echo "<p ID='p" . $sec . "'>" . $line . "</p>";
        }
    }
    
    fclose($file);
    ?>
    </body>
</html>
