<?php
include("connection.php");


$query = $mysqli->prepare("SELECT * FROM news");
$query->execute();
$query->store_result();
$num_rows = $query->num_rows();

if ($num_rows === 0) {
    $response["status"] = "empty";
    

}else{
    $array_list = [];
    $query->bind_result($news_id,$news_title,$news_content);
    while ($query->fetch()){
        $array = [
            "news_id"=> $news_id,
            "news_title" => $news_title,
            "news_content"=> $news_content
        ];
        $array_list[] = $array;
    }
    $response["status"] = "success";
    $response["news"] = $array_list;

}
echo json_encode($response);











