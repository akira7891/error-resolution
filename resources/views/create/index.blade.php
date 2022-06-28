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
        <div>
            <p>データのタイトル</p>
            <input type="text" name="title">
        </div>

        <div>
            <p>データの内容</p>
            <textarea type="text" name="content" rows="70" cols="100"></textarea>
        </div>

        <div>
            <input type="submit" value="データを記録する">
        </div>

    </form>
    
</body>
</html>
