<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\StoreUserRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $artists=[['name'=>'مجید رضوی','music_title'=>'sss','cover'=>'razavi.jpg'],['name'=>'فرزاد فلاحی','music_title'=>'qqq','cover'=>'Faraz-Fallahi-Deltang_resize_36.jpg']];
        return view('index',compact('artists'));
    }

    public function create()
    {
        //
    }

    public function store(StoreUserRequest $request)
    {

    }

    public function edite()
    {
        //
    }

    public function update()
    {

    }
}
