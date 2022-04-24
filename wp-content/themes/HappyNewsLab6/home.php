<?php
/*
Template Name: home
*/

$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'news'; // Имя БД
$db_table = "news_table"; // Имя Таблицы БД

$conn = new mysqli($db_host, $db_user, $db_password, $db_base);
?>
<?php get_header(); ?>

  <main class="row">
    <?php require "blocks/nav.php" ?>

    <?php require "blocks/content.php" ?>

  </main>
  <?php get_footer(); ?>

