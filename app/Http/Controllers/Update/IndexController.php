<?php

namespace App\Http\Controllers\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $dataId=(int)$request->route('dataId');
        $data=Data::where("id",$dataId)->first();
        return view('update.index',["data"=>$data,"request"=>$request]);
    }
}
