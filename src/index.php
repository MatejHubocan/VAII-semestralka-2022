<html>
<body>
<h1>php do sql</h1>
<?php
$servername = "localhost";
$username = "db_user";
$password = "db_user_pass";
$dbname = "dbtable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE or Replace TABLE users(meno VARCHAR(20) not null, heslo VARCHAR(20) not null, id int unique)";
$conn->query($sql);

$sql = "INSERT INTO users(meno, heslo, id) VALUES ('matej', 'hubocan', 0)";
$conn->query($sql);
$sql = "SELECT meno, heslo FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "meno:" . $row["meno"]. " - heslo: " . $row["heslo"]. "<br>";
    }
} else {
    echo "0 results";
}

$sql = "INSERT INTO users(meno, heslo, id) VALUES ('sim', 'mrkva', 1)";
$conn->query($sql);
$sql = "SELECT meno, heslo FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "meno: " . $row["meno"]. " - heslo: " . $row["heslo"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>

