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
    
    $data = json_decode(file_get_contents("php://input"));
    
    $item->id = $data->id;
    
    // film values
    $item->title = $data->title;
    $item->director = $data->director;
    $item->year_release = $data->year_release;
    $item->country = $data->country;
    $item->photo = $data->photo;
    $item->child = $data->child;
    $item->summary = $data->summary;
    
    if($item->updateFilm()){
        echo json_encode("Film data updated.");
    } else{
        echo json_encode("Data could not be updated");
    }
?>