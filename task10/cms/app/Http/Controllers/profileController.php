<?php


namespace app\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class profileController extends BaseController
{
    public function showProfile($name){
        return view('profile') -> with('name',$name);
    }
}
