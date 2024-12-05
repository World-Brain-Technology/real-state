<?php
    
    // listing services
    function get_all_listings($conn){
        $query = "SELECT * FROM listings";
        
        try {
            $result = mysqli_query($conn, $query);
            $listings = [];
            
            while($row = mysqli_fetch_assoc($result)){
                $listings[] = $row;
            }
            
            return $listings;
        } catch (\Exception $e) {
            return "Error: ". $e->getMessage();
        }
    }

    function create_listing($conn, $data){
        $query = "INSERT INTO `listings`(`title`, `description`, `type`, `status`, `price`, `area`, `rooms`) 
        VALUES ('$data->title','$data->description','$data->type','$data->status',$data->price,'$data->area','$data->rooms')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            return "Error: ". mysqli_error($conn);
            die();
        } 
        
        return true;
    }

    function delete_listing($conn, $id){
        $query = "DELETE FROM `listings` WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            return "Error: ". mysqli_error($conn);
            die();
        } 
        
        return true;
    }