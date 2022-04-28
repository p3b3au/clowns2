<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/films.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Clowns($db);

    $item->id = isset($_POST['id']) ? $_POST['id'] : die();
  
    $item->getSingleClown();

    if($item->title != null){
        // create array
        $clown_arr = array(
                "id" => $item->id,
                "pseudo" => $item->pseudo,
                "sexeHomme" => $item->sexeHomme,
                "musician" => $item->musicien,
                "couleur" => $item->couleur,
                "pic" => $item->pic
        );
      
        http_response_code(200);
        echo json_encode($clown_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Clown not found.");
    }
?>