<section class="col-md-10">
<?php
if(isset($_GET["id"]))
{
    ?>
    <div>
    <?
    require "detail_button.php";

    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $userid = $_GET["id"];

    //шаг 1 - подготовка
    $stmt = $conn->prepare("SELECT * FROM $db_table WHERE id = $userid");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($row) {
      $str = nl2br($row['text']);
      ?>
        <div>
          <div >
            <!-- title -->
            <h3><strong>
            <?=$row['title']?>
            </strong></h3>
          </div>

          <div >
            <!-- date -->
            <br>
            <small>
            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <?=$row['date']?>
            </small>
            
          </div>
        </div>

        <!-- image -->
        <img src='<?=$row['image']?>' style="width: 50vw;  margin: 2em 0;"/>

        <p >
          <!-- text -->
          <?=$str?>
          
          
        </p>
        </div>
      <?php
    }
    else {
        echo "Ошибка: " . $conn->error;
    }
}
?>
</section>
