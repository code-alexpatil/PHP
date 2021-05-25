<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Methods: POST");

include('connection.php');

$request = $_SERVER['REQUEST_METHOD'];

    switch ( $request) {
        case 'GET':
            getmethod();
            break;
        case 'POST':
            postmethod();
     
}


function getmethod(){
    echo "getmethod";
}

function postmethod(){
    global $conn;
    
    $return = [];
    
    $data=json_decode(file_get_contents('php://input'),true);
    
    $oid     = $conn->real_escape_string($data["oid"]);
    $name    = $conn->real_escape_string($data["name"]);
    $comment = $conn->real_escape_string($data["comment"]);
    
    if(empty($oid) && empty($name) && empty($comment)){
        
        $return = ['message' => 'empty',  'status' => false];
        
    } else {
    
        $query = $conn->query("insert into user_tabel(oid,name,comment) VALUES('$oid', '$name', '$comment')");
        
        if($query == 1){
            
            $return = ['message' => 'success',  'status' => true];
            
        }
        
    }
    
    echo json_encode($return);
}


?>