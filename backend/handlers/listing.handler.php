<?php
    
    // Create listing
    if (isset($_POST["create_listing"])) {
        $data = [];
        $data["title"] = isset($_POST["title"]) ? clean_input($_POST["title"], "string") : null;
        $data["description"] = isset($_POST["description"]) ? clean_input($_POST["description"], "string") : null;
        $data["price"] = isset($_POST["price"]) ? clean_input($_POST["price"], "float") : null;
        $data["type"] = isset($_POST["type"]) ? clean_input($_POST["type"], "string") : null;
        $data["status"] = isset($_POST["status"]) ? clean_input($_POST["status"], "string") : null;
        $data["area"] = isset($_POST["area"]) ? clean_input($_POST["area"], "string") : null;
        $data["rooms"] = isset($_POST["rooms"]) ? clean_input($_POST["rooms"], "string") : null;

    
        // Check for missing fields
        $missing_fields = check_required($data, ["title", "description", "price", "type", "status", "area", "rooms"]);
        if (!empty($missing_fields)) {
            $missing = "Missing required fields: " . implode(", ", $missing_fields);
            echo $missing;
            exit;
        }
    
        // Add property
        $result = add_property($data);

        if($result){
            $message = "Property added successfully";
            $type = "success";
        }else{
            $message = "Failed to add property";
            $type = "error";
        }
        header("location: ?notification=$message&type=$type");
        exit;
    }
    
    if (isset($_GET["delete"])){
        $id = isset($_GET["id"]) ? $_GET["id"] : null;
        if(!$id){
            $message = "Id is required";
            $type = "error";
        }

        $result = delete_property($conn, $id);
        if($result){
            $message = "Property added successfully";
            $type = "success";
        }else{
            $message = "Failed to add property";
            $type = "error";
        }
        header("location: ?notification=$message&type=$type");
        exit;
    }