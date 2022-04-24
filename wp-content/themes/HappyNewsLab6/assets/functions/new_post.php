<?php require "../blocks/head.php" ?> 

<?php
if (isset($_POST['title']) && isset($_POST['topic']) && isset($_POST['text']) && ($_FILES['img']['name'] != '')){

  $img_name = $_FILES['img']['name'];
  $tmp_name = $_FILES['img']['tmp_name'];
  $new_path = "../uploads/". $img_name;

  $title = $_POST['title'];
  $topic = $_POST['topic'];
  $text = $_POST['text'];
  $image = $new_path;

  $stmt = $conn->prepare("INSERT INTO $db_table(title, topic, text, image) VALUES (?, ?, ?, ?)");

  $stmt->bind_param("ssss", $title, $topic, $text, $image);

  $result = $stmt->execute();
  if ($result) {
    move_uploaded_file($tmp_name, $new_path);
    header("Location: /index.php");
  } else {
    echo "Произошла ошибка при выполнении запроса";
  }
}

?>