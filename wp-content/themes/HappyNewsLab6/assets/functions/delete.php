<?php require "../blocks/head.php" ?> 

<?php

if(isset($_GET["id"]))
{   
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }

    $userid = $_GET["id"];

    //шаг 1 - подготовка
    $stmt = $conn->prepare("DELETE FROM $db_table WHERE id = $userid ");
    $result = $stmt->execute();

    if($result){
        header("Location: ../index.php");
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
}
?>
