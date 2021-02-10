<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "sprint3";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, first_name, last_name, email FROM cms";
$result = mysqli_query($conn, $sql);

print("<table>");
print("<tr><th>ID</th><th>first_name</th><th>last_name</th><th>email</th></tr>");

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
         print('<tr><td>' . $row["id"] . '</td><td>' . $row["first_name"] . '</td><td>' .  $row["last_name"] . '</td><td>' . $row["email"] . '</td></tr>');
    } 
    } else {
        echo "Nėra rezultatų";
    }
    print("</table>");
    mysqli_close($conn);

?>
<style>
table {
margin: 8px;
}

th {

background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: <?=$border?> #000;
}

td {

border: <?=$border?> #DDD;
}
</style>
</body>
</html>
