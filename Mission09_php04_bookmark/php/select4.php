<?php
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
    $view .= '[編集]';
    $view .= '</a>';
    $view .= '　';
    $view .= '<a href="detail2.php?id='.$result["id"].'">';
    $view .= $result["bookname"].":".$result["bookurl"].":".$result["bookcomment"];
    $view .= '</a>';
    $view .= '　';
    $view .= '<a href="delete2.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .= '</a>';
    $view .= "</p>";
  }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
    <title>データ一覧</title>
  </head>
  <body>
    <h3>データ一覧</h3>
    <table border="1">
    <tr>
      <th>編集</th><th>書籍名</th><th>URL</th><th>コメント</th><th>削除</th>
    </tr>
    <?php while ( $result = $stmt->fetch(PDO::FETCH_ASSOC)){?>
      <tr>
        <td><a href="detail2.php">[編集]</a></td>
        <td><?php echo($result['bookname']); ?></td>
        <td><?php print($result['bookurl']); ?></td>
        <td><?php write($result['bookcomment']); ?></td>
        <td><a href="delete2.php">[削除]</a></td>
      </tr>
    <?php } ?>
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

