<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../config/database.php';
    include_once '../class/films.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    $item = new Films($db);
    
    $data = file_get_contents("php://input");
    
    $item->id = $data;
    
    if($item->deleteFilm()){
        echo json_encode("Film deleted.");
    } else{
        echo json_encode("Data could not be deleted");
    }
?>