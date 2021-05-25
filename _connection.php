<?php

    $SERVER_NAME = "localhost";
    $DB_USERNAME = "id16880289_database_user";
    $DB_PASSWORD = "gB[|tUx()_Jy]@5P";
    $DB_NAME = "id16880289_database";
    
    // Create connection
    $conn = new mysqli($SERVER_NAME, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

?>