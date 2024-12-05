<?php
    $conn = connect_db();
    function add_property($data){
        global $conn;
        $data_transfer = json_decode(json_encode($data));
        return create_listing($conn, $data_transfer);
    }

    function get_properties($conn){
        return $properties = get_all_listings($conn);
    }

    function delete_property($conn, $id){
        return delete_listing($conn, $id);
    }