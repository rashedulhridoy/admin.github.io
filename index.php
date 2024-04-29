<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Made By Rashedul Hridoy</title>
</head>
<body>
    <center>
    <form action="class2-1.php" method="post">
        <label> Enter a Number To Count: </label>
        <input type="text" name="counter">
        <input type="submit" value="Start">

    </form>

    <br>
    </center>
    <?php
        $x = $_POST ["counter"];

        for($i = 1; $i <= $x; $i++){
            echo $i."<br>";
        }

    ?>
    
</body>
</html>
