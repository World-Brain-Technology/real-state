<?php
    
    function connect_db(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "real_estate";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if (!$conn || $conn->connect_error) {
            die("Connection failed: ". $conn->connect_error);
        }
        return $conn;
    }