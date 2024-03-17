<?php
include("connection.php");

$news_title = $_POST['news_title'];
$news_content = $_POST['news_content'];

$sql = "INSERT INTO news (news_title, news_content) VALUES (?, ?)";
$stmt = $mysqli->prepare($sql);

$stmt->bind_param("ss", $title, $content);

if ($stmt->execute()) {
    echo "News added";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$stmt->close();
$mysqli->close();



