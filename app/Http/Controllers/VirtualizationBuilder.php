<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VirtualizationBuilder extends Controller
{
    /**
     * @throws FileNotFoundException
     */
    public function getData(Request $request){
        return json_decode(Storage::disk("public")->get("tableData.json"), true);
    }
}
