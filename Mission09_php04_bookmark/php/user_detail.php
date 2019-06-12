<?php
$id = $_GET["id"];

include "funcs.php";
chkSsid();
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
}
$row = $stmt->fetch();

//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザーデータ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">ユーザー登録内容変更</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="select.php">
  <div class="jumbotron">
   <fieldset>
    <legend>登録内容</legend>
     <label>ユーザー名：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>ユーザーID：<input type="text" name="lid" value="<?=$row["lid"]?>"></label><br>
     <label>パスワード：<input type="text" name="lpw" value="<?=$row["lpw"]?>"></label><br>
     <input type="submit" value="決定">
    </fieldset>
  </div>

<!-- Main[End] -->


</body>
</html>
