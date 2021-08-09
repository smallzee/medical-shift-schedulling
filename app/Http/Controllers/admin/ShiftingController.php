<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShiftingController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shifting_category(){
        $data['page_title'] = "Shifting Category";
        return view('admin.shifting-category',$data);
    }
}
