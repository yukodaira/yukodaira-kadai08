<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>チルスポットリスト</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>スポットを登録してください</legend>
                <label>場所名:<input type="text" name="spotname"></label><br>
                <label>URL:<input type="text" name="spoturl"></label><br>
                <label>コメント:<input type="text" name="spotreview"></label><br>
                <!-- <label><textArea name="content" rows="4" cols="40"></textArea></label><br> -->
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
