<?php
include("connection.php");

$sql = "SELECT * FROM news";
$result = $mysqli->query($sql);

if ($result === false) {
    echo "Error: " . $mysqli->error;
    exit;
}

$news = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($news);

$mysqli->close();
?>;







