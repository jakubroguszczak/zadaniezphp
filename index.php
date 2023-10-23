
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="a" value="Karol"><br>
        <input type="submit" value="sprawdz">
        <?php
        @$a=$_GET['a'];
        echo "</br>napis= $a";
        $wzor="/^(Ka)+(ro)?|$/";
        if (preg_match($wzor , $a))
        echo " Jest ok";
        else echo " zle dopasowany";
        ?>
    </form>
</body>
</html>
