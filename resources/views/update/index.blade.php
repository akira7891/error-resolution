<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの編集</title>
</head>
<body>
    <form action="/update/{{$request->route('dataId')}}" method="post">
        @csrf
        <h1>データの編集</h1>
        <div>
            <p>データのタイトル</p>
            <input type="text" name="title" value="{{$data->title}}">
        </div>

        <div>
            <p>データの内容</p>
            <textarea type="text" name="content" rows="70" cols="100">{{$data->content}}</textarea>
        </div>

        <div>
            <input type="submit" value="データを記録する">
        </div>

    </form>
    
</body>
</html>
