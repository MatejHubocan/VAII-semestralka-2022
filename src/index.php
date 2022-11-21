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
$sql = "CREATE or Replace TABLE test(meno VARCHAR(20) not null unique, heslo VARCHAR(20) not null, id int )";
$conn->query($sql);

$sql = "INSERT INTO test(meno, heslo, id) VALUES ('matej', 'hubocan', 1)";
$conn->query($sql);
$sql = "SELECT meno, heslo FROM test";
$result = $conn->query($sql);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '?';
        echo "Test1 " . $row["meno"]. " - Test2: " . $row["heslo"]. "<br>";
    }
} else {
    echo "0 results";
}

$sql = "INSERT INTO test(meno, heslo, id) VALUES ('simon', 'mrkva', 2)";
$conn->query($sql);
$sql = "SELECT meno, heslo FROM test";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Test1 " . $row["meno"]. " - Test2: " . $row["heslo"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>

