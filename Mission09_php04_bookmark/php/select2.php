<?php
session_start();

echo $_SESSION["name"];
include "funcs.php";
chkSsid();
$pdo = db_con();

//1.  DB接続します
try {
$pdo = new PDO('mysql:dbname=gs_kdi_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ表示SQL作成
$stmt = $pdo->prepare("SELECT * FROM Mission08_bookmark_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    //$resultにデータが入ってくるのでそれを活用して[html]に表示させる為の変数を作成して代入する
    $view .= "<p>";
    $view .= '<a href="detail2.php?id='.$result["id"].'">';
    $view .= "■".$result["bookname"];
    $view .= '　';
    $view .= '[編集]';
    $view .= '</a>';
    $view .= '　';
    $view .= '<a href="delete2.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .= '</a>'.'<br>';
    $view .= '<a href="detail2.php?id='.$result["id"].'">';
    $view .= $result["bookurl"]."<br>".$result["bookcomment"];
    $view .= '</a>';
    $view .= "</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>データ一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
<?php include("menu.php"); ?>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<a href="select.php">[戻る]</a>
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
