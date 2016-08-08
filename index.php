<html>
<head>
<title>Michael Kukar RPI Local Webserver</title>

</head>

<body>

<?php

$loveStr = "";

// more love
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loveStr = "LOVE YOU LOVE YOU LOVE YOU <3 <3 <3";
    
    // generates a random number to choose a string
    $randResult = rand(0, 10);
    switch($randResult) {
        case 0:
            $loveStr = "LOVE YOU LOVE YOU LOVE YOU <3 <3 <3";
            break;
        case 1:
            $loveStr = "Love you always and forever :)";
            break;
        case 2:
            $loveStr = ":) <3";
            break;
        case 3:
            $loveStr = "xoxo";
            break;
        case 4:
            $loveStr = "@~~'~~~~~~";
            break;
        case 5:
            $loveStr = "I LOVE YOU";
            break;
        case 6:
            $loveStr = "LOVE YOU - Your not-so-secret admirer";
            break;
        case 7:
            $loveStr = ":* <3";
            break;
        case 8:
            $loveStr = "<3";
            break;
        case 9:
            $loveStr = "Michael Loves Jessica <3";
            break;
        default:
            $loveStr = "<3333333333";
            break;
    }
}

?>



<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<h2>Jess, I love you <3</h2>
<input type="submit" value="Get More Love"> <br><br>
<?php echo htmlspecialchars($loveStr); ?>
</form>



<br><br><br><br><br><br>
<i>RPI Local Webserver - Created August 2016 by Michael Kukar</i>

</body>

</html>