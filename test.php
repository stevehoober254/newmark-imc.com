<?php

$connection = mysqli_connect('localhost', 'root', '', 'vendorsdb');
if ($connection) {
    echo "we are connected";
} else {
    die("Database connection failed");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vendors</title>
</head>
<!-- CSS only -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<body>
    <div class="container">
        <div class="col-xs-6">
            <?

            $query = "SELECT* FROM vendors";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)) {

            ?>
                <h2><? echo $row['name']; ?></h2>

            <? } ?>
</body>

</html>
