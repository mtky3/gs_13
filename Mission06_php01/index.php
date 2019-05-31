<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    <h3>顧客情報管理</h3>
<form action="write.php" method="post">

    <div class="form-item">
        <label for="customer">会社名：</label><br />
        <input type="text" name="customer">
    </div>

    <div class="form-item">
        <label for="competitor">競合他社：</label><br />
        <select name="competitor" id="competitor">
            <option value="" selected></option>
            <option value="JID">JID</option>
            <option value="CASA">CASA</option>
            <option value="EPOS">EPOS</option>
        </select>
    </div>

    <div class="form-item">
        <label for="namec">担当者名：</label><br />
    <input type="text" name="namec">
    </div>

    <div class="form-item">
        <label for="memo">メモ：</label><br />
        <textarea name="memo" cols="20" rows="5"></textarea>
    </div>

    <input type="submit" value="登録">
</form>

<ul>
<li><a href="read.php">履歴を表示</a></li>
</ul>
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
        <tr>
        <td><input type="text" name="customer"></td>
            <td><input type="text" name="competitor"></td>
            <td><input type="text" name="namec"></td>
            <td><input type="textarea" name="memo"></td>
        </tr>
        <tr>
        <td><input type="text" name="customer"></td>
            <td><input type="text" name="competitor"></td>
            <td><input type="text" name="namec"></td>
            <td><input type="textarea" name="memo"></td>
        </tr>
        <td><input type="text" name="customer"></td>
            <td><input type="text" name="competitor"></td>
            <td><input type="text" name="namec"></td>
            <td><input type="textarea" name="memo"></td>
        </tr>
    </table>

</body>
</html>