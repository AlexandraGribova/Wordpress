<section class="card text-center" style="margin:0 auto;">
  <h3 class="form_title">Создание новости</h3>
  <form enctype="multipart/form-data" class="form" method="POST" action="/functions/new_post.php">
    <div class="form-group"><input required name="title" class="form-control" type="text" placeholder="Введите название..."></div>
    <div class="form-group"><textarea required name="topic" class="form-control" style="resize: none" placeholder="Введите краткое описание..."></textarea></div>
    <div class="form-group"><textarea required name="text" class="form-control" style="resize: none" rows="8" placeholder="Введите текст..."></textarea></div>
    <!-- <input required name="img" class="form_input" type="text" placeholder="Введите ссылку на изображение..."> -->
    <div class="form-group"><input required type="file" name='img' class="form-control" ></div>

    <button class="btn btn-default">Добавить новость</button>
  </form>
</section>
