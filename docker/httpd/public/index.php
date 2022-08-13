<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mysqli = new mysqli('db', 'test_user', 'uouo', 'hbtask');
if($mysqli->connect_error) {
    print $mysqli->connect_error;
    exit();
} else {
    $result = $mysqli->query("SELECT * FROM meibo where number=1");
    $row = $result->fetch_assoc();
    echo "私の名前は、" . $row['username'] . "です。\n";
}
?>

</body>
</html>
