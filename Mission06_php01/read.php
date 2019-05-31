<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
    <h3>顧客情報</h3>
<?php

$filename = 'data/data.txt';
$fp = fopen($filename, 'r');

while (!feof($fp)) {
  $txt = fgets($fp);
  echo $txt.'<br>'; 
}
fclose($fp);
?>

<!-- 表に埋め込む -->
<?
$filename = 'data/data.txt'; //データファイル名
$line = file($filename);
echo '<TABLE cellpadding="4" cellspacing="1" style="background-color : #aaaaaa;"><TBODY>';
for ($a = 0; $a < count($line); $a++) {
    $data = split(",", $line[$a]); //タブ区切り "\t"　　カンマ区切り ","
    echo '<TR>';
    if ($a == 0) $style = 'background-color : #e5e5e5;'; else $style = 'background-color : #ffffff;';
    for ($b = 0; $b < count($data); $b++) echo '<TD style="' . $style . '">' . $data[$b] . '</TD>';
    echo '</TR>';
}
echo '</TBODY></TABLE>';
?>
<table border="1">
        <tr>
            <th>会社名</th>
            <th>競合他社</th>
            <th>担当者名</th>
            <th>メモ</th>
        </tr>
        <tr>
            <td><input type="text" name="customer"></td>
            <td><input type="text" name="competitor"></td>
            <td><input type="text" name="namec"></td>
            <td><input type="textarea" name="memo"></td>
        </tr>
</table>

<ul>
<li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>