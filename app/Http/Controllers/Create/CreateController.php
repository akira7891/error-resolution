<?php

namespace App\Http\Controllers\Create;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class CreateController extends Controller
{
    public function __invoke(Request $request)
    {
        $data=new Data;
        $data->title=$request->title;
        $data->content=$request->content;
        $data->save();
        return redirect("/");
    }
}
