<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vacation Database</title>
    <link rel="stylesheet" href="./photos.css">
</head>
<body>
    <?php
        if ($_POST["fname"] == "" || $_POST["lname"] == "") {
            header("Location: index.php");
        }
        else {
            $myfile = fopen("user_logs.log", "a") or die("Unable to open file!");
            fwrite($myfile, $_POST["fname"] . " " . $_POST["lname"] . "\n");
            fclose($myfile);
        }
    ?>
    <center>
        <h1>Photos</h1>
        <img src="./img/Canyon1.jpg">
        <img src="./img/Canyon2.jpg">
    </center>
</body>
</html>
