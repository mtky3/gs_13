<?php

$customer = $_POST["customer"];
$competitor = $_POST["competitor"];
$namec = $_POST["namec"];
$memo = $_POST["memo"];

$str = $customer.",".$competitor.",".$namec.",".$memo;
$file = fopen("data/data.txt","r+");
// for( $count = 0; fgets( $file ); $count++ );
$count = fgets( $file, 200 );
$count++;
rewind( $file );
fputs($file, $count.",".date("Y-m-d,H:i:s").",".$str."\n");
fclose($file);
header('Location: http://localhost/Mission06_php01/index.php');

?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

</body>
</html>


<!-- 
&lt;?php
$fpt = fopen( &quot;count.txt&quot;, &quot;r+&quot; );
$count = fgets( $fpt, 7 );
$count++;
rewind( $fpt );
fputs( $fpt, $count );
fclose( $fpt );
echo 'サイトOPENから'.$count.'回目の訪問です。';
?&gt;  -->