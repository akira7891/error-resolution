<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class PageController extends Controller
{
    public function __invoke(Request $request)
    {
        $dataId=(int) $request->route('dataId');
        $data=Data::where('id',$dataId)->first();
        return view("data.page",["data"=>$data]);
    }
}
