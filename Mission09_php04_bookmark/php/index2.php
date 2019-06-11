<?php
session_start();

echo $_SESSION["name"];
include "funcs.php";
chkSsid();
$pdo = db_con();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="index2.php">データ登録</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert2.php">
  <div class="jumbotron">
   <fieldset>
    <legend>本をブックマーク</legend>
     <label>書籍名：<input type="text" name="bookname"></label><br>
     <label>書籍URL：<input type="text" name="bookurl"></label><br>
     <label><textArea name="bookcomment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="登録">
    </fieldset>
     <a href="select.php">[マイページへ]</a>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
