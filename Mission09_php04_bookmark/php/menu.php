<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <?= $_SESSION["name"] ?>さん、こんにちは
            <a class="navbar-brand" href="select2.php">データ一覧</a>　
            <?php if($_SESSION["kanri_flg"]=="1"){ ?>
            <a class="navbar-brand" href="user.php">ユーザー登録</a>　
            <a class="navbar-brand" href="user_select.php">ユーザー一覧</a>　
            <?php }?>
            <a class="navbar-brand" href="main.php">ログアウト</a>
        </div>
    </div>
</nav>