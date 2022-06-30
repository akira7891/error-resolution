

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ一覧</title>
</head>
<body>
    <a href="/create">データの新規登録</a>
    <h1>データ一覧</h1>
    @foreach($datas as $data)
    <a href="/{{$data->id}}">{{$data->title}}</a>　作成日{{$data->created_at}}　更新日{{$data->updated_at}}
    <br>
    @endforeach
</body>
</html>
