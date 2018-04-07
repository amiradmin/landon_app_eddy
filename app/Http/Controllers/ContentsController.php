<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContentsController extends Controller
{
    //
    public function home(Request $request)
    {
        $data = [];
        $data['version'] = '0.1.2';
        $last_update = $request->session()->has('last_update')?
        $request->session()->pull('last_update') : 'none';
        $data['last_update']=$last_update;
        return view('contents/home', $data);
    }

    public function upload(Request $request)
    {
        
        $data = [];
        if($request->isMethod('post')){
            echo "OK";
            $this->validate(
                $request,
                [
                    'image_update'=>'mimes:jpeg, png,jpg'
                ]

            );
            Input::file('image_upload')->move('images','attractions.jpg');
            return redirect('/');
        }
       
        return view('contents/upload', $data);
    }
}
