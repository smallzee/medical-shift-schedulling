<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\ShiftingCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function add_shifting_category(){
        $data['page_title'] = "Add Shifting Category";
        return view('admin.add-shifting-category',$data);
    }

    public function create_shifting_category(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:shifting_category|max:50|min:3',
            'schedule'=>'required'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $shifting_category = new ShiftingCategory([
            'name'=>$request->name,
            'schedule'=>$request->schedule
        ]);

        if ($shifting_category->save()){
            return back()->with('flash_info','Shifting category has been added successfully');
        }
    }

    public function edit_shifting_category(ShiftingCategory $shiftingCategory){
        $data['page_title'] = "Edit Shifting Category";
        $data['shifting_category'] = $shiftingCategory;
        return view('admin.edit-shifting-category',$data);
    }

    public function update_shifting_category(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required|max:50|min:3',
            'schedule'=>'required'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        $shifting_category = ShiftingCategory::findOrFail($request->id);
        $shifting_category->name = $request->name;
        $shifting_category->schedule = $request->schedule;

        if ($shifting_category->save()){
            return back()->with('flash_info','Shifting category has been update successfully');
        }
    }

    public function shifting(){
        $data['page_title'] = "All Staffs Shifting Scheduling";
        return view('admin.shitfing',$data);
    }
}
