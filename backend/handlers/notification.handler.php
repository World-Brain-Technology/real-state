<?php
    if(isset($_GET["notification"])){
        $message = $_GET["notification"];
        $type = isset($_GET["type"]) ? $_GET["type"] : null;
        switch($type){
            case "success":
                $color = "green";
                break;
            default:
                $color = "red";
                break;
        }
        echo "<span style='color:$color'>$message</span>";
    }