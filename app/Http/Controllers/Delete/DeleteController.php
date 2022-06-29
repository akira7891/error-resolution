<?php

namespace App\Http\Controllers\Delete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class DeleteController extends Controller
{
    public function __invoke(Request $request)
    {
        $dataId=$request->route("dataId");
        $data=Data::where("id",$dataId)->first();
        $data->delete();
        return redirect("/");
    }
}
