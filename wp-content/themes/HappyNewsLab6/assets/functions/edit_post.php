<?php require "../blocks/head.php" ?> 

<?php
var_dump($_FILES["img"]);
if(isset($_POST["id"]))
{   
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }

    if ($_FILES["img"]["name"] != '') {
        $stmt = $conn->prepare("UPDATE $db_table SET title = ?, topic=?, text=?, image=?  WHERE id = ? ");

        $img_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $new_path = "../uploads/". $img_name;

        $userid = $_POST["id"];
        $title = $_POST['title'];
        $topic = $_POST['topic'];
        $text = $_POST['text'];
        $image = $new_path;

        $stmt->bind_param("ssssi", $title, $topic, $text, $image, $userid);
        move_uploaded_file($tmp_name, $new_path);

        $result = $stmt->execute();
    } else {
        //шаг 1 - подготовка
        $stmt = $conn->prepare("UPDATE $db_table SET title = ?, topic=?, text=? WHERE id = ? ");

        $userid = $_POST["id"];
        $title = $_POST['title'];
        $topic = $_POST['topic'];
        $text = $_POST['text'];

        $stmt->bind_param("sssi", $title, $topic, $text, $userid);

        $result = $stmt->execute();
    }
    
    if($result){
        header("Location: ../detail.php?id=$userid");
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
}
?>