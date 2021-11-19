<?php

    include '../core/public.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $conn = newConnection();
        // $query = "DELETE FROM `Message` WHERE `userId`=$id";
        // $conn->query($query);
        // $query = "DELETE FROM `Comment` WHERE `userId`=$id";
        // $conn->query($query);
        // $query = "SELECT `cartId` FROM `Cart` WHERE `userId`=$id";
        // $result = $conn->query($query);
        // while($row = $result->fetch_array(MYSQLI_BOTH)){
        //     $cartId = $row['cartId'];
        //     $query = "DELETE FROM `ItemCart` WHERE `cartId`=$cartId";
        //     $conn->query($query);
        // }
        // $query = "DELETE FROM `cartId` WHERE `userId`=$id";
        // $query = "DELETE FROM `Users` WHERE `userId`=$id";
        $query = "UPDATE `Users` SET `state`=0 WHERE `userId`=$id";
        $result = $conn->query($query);
        $conn->close();
        if($result){
            header('Location: user-list');
        }
        else {
            header('Location: user-list');
        }
    }
    else {
        header('Location: user-list');
    }

?>