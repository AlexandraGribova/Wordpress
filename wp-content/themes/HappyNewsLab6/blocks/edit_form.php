<?php
if(isset($_GET["id"]))
{   
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $userid = $_GET["id"];

    //шаг 1 - подготовка
    $stmt = $conn->prepare("SELECT * FROM $db_table WHERE id = $userid");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row){
        ?>
        <section class="card text-center" style="margin:0 auto;">
        <h3 class="form_title">Редактирование новости</h3>
        <form enctype="multipart/form-data" class="form" method="POST" action="/functions/edit_post.php">
       <input required type='hidden' name='id' value='<?=$_GET['id']?>' />
        <div class="form-group"><input required name="title" class="form-control" type="text" value='<?=$row['title']?>'></div>
        <div class="form-group"><textarea required name="topic" class="form-control" style="resize: none" ><?=$row['topic']?></textarea></div>
        <div class="form-group"><textarea required name="text" class="form-control" style="resize: none" rows="8" placeholder="Введите текст..."><?=$row['text']?></textarea></div>
        <!-- <input required name="img" class="form_input" type="text" placeholder="Введите ссылку на изображение..."> -->
        <div class="form-group"><input required type="file" name='img' class="form-control" ></div>

        <button class="btn btn-default">Изменить новость</button>
        </form>
        </section>


      
        <?php
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
}

?>


