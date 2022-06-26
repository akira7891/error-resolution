@foreach($datas as $data)
データのアイデー{{$data->id}}　データのタイトル{{$data->title}}　データの内容{{$data->content}}　データの作成日{{$data->created_at}}　データの更新日{{$data->updated_at}}<br>
@endforeach
