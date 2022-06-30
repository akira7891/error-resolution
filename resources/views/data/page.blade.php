<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        p{white-space: pre-wrap;}
    </style>
    <title>データの内容</title>
</head>
<body>
    <a href="/">戻る</a>
    <br>
    作成日{{$data->created_at}}　更新日{{$data->updated_at}}
    <h1>{{$data->title}}</h1>
    <p>{{$data->content}}</p>
    <a href="/update/{{$request->route('dataId')}}">データを編集する</a>
    <br>
    <a href="/delete/{{$request->route('dataId')}}">データを削除する</a>
</body>
</html>
