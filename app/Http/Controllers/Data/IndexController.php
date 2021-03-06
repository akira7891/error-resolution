<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $datas=Data::orderBy('created_at','DESC')->get();
        return view('data.index',['datas'=>$datas]);
    }
}
