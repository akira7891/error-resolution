<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの登録画面</title>
</head>
<body>
    <form action="/create" method="post">
        @csrf
        <input type="text" name="title">
        <input type="text" name="content">
        <input type="submit" value="送信する">
    </form>
    
</body>
</html>
