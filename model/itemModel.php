<?php
require_once("./../../config/config.php");

class ItemModel{

    function addItemDB($item_name,$item_cat,$unit_price){
        global $conn;
        $sql = "insert into furniture_item VALUES ('','$item_name','$item_cat','$unit_price')";
        if (mysqli_query($conn, $sql)) {
            // echo "Item created successfully !";
            return 1;
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
            return 0;
        }
        mysqli_close($conn);
    }
}

?>