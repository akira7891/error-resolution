<?php

namespace App\Http\Controllers\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class UpdateController extends Controller
{
    public function __invoke(Request $request)
    {
        $dataId=(int)$request->route('dataId');
        $data=Data::where("id",$dataId)->first();
        $data->title=$request->title;
        $data->content=$request->content;
        $data->save();
        return redirect("/$dataId");
    }
}
