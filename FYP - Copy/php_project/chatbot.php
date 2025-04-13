<?php
include('config.php');

//if user sends a message then get it
if(isset($_GET['message'])){
    $message = $_GET['message'];
    $stmt = $conn->prepare("SELECT response FROM messages WHERE text = ? LIMIT 1");
    $stmt->bind_param('s', $message);
    // execute the prepared statement and get the response


    if($stmt->execute()){
        $stmt->bind_result($response_message);
        $stmt->store_result();
    
        if($stmt->num_rows() == 1){
            $stmt->fetch();
            $result = ['response_message'=>$response_message];
            echo  json_encode($result);
        } else {
            // handle error
            echo  json_encode(['response_message'=>'Dear tourist, unfortunately I did not understand you !']);
        }
    } else {
        echo  json_encode(['response_message'=>'Dear tourist, unfortunately I did not understand you !']);  
    }
}
?>
