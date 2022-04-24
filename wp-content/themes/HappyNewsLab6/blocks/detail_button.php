<div class="row">
  <a  class="btn btn-default" href="/edit.php?id=<?= $_GET['id'] ?>">Редактировать</a>

  <form  class="col-md-1 " action="/functions/delete.php">
    <input type='hidden' name='id' value="<?= $_GET['id'] ?>" /> 
    <button class="btn btn-default" style="background:#922b3e;  color: white;" >Удалить</button>
  </form>
</div>

