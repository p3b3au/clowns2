<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/clowns.php';

    $database = new Database();
    $db = $database->getConnection();

    $data = json_decode(file_get_contents("php://input"));
   
    $item = new Clowns($db);
    
   // $item->id = isset($_POST['id']) ? $_POST['id'] : die();
  


    $item->getBuddy($data);


  
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
    
    
   

?>