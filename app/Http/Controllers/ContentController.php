<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $data = Content::all();
        return view('content.index',['data'=>$data]);
    }
}
