<?php
session_start();

if (!empty($_POST)) {
    if (isset($_SESSION['user_id'])) {
        unset($_SESSION['user_id']);
        
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 200));
    }
}
