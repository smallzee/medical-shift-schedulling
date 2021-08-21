<?php

namespace App\Http\Controllers\user;

use App\Duty_shifting;
use App\Http\Controllers\Controller;
use App\ShiftingCategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        $data['page_title'] = "Dashboard";

        $duty_shifting = Duty_shifting::where('staff',\auth()->user()->id)->orderBy('id','desc')->first();

        $data['duty'] = $duty_shifting;

        if ($duty_shifting->next_shifting_date >= date('m-d-Y')){

            if ($duty_shifting->shifting_category_id == 1){
                $shifting_category_id = 2;
            }elseif ($duty_shifting->shifting_category_id == 2){
                $shifting_category_id = 3;
            }else{
                $shifting_category_id = 1;
            }

            $nxt_date = strtotime("next ".date('l')) - 24;
            $next_shifting_date = date('m-d-Y',$nxt_date);
            $description = date('l') ." - ". date('l',$nxt_date );


            Duty_shifting::create([
                'staff'=>\auth()->user()->id,
                'shifting_category_id'=>$shifting_category_id,
                'next_shifting_date'=>$next_shifting_date,
                'description'=>$description
            ]);

        }



        return view('users.dashboard',$data);
    }

    public function password(){
        $data['page_title'] = "Change Password";
        return view('users.password',$data);
    }

    public function update_password(Request $request){
        $validator = Validator::make($request->all(),[
            'password'=>'required',
            'npassword'=>'required'
        ]);


        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        if (auth()->user()->password != Hash::make($request->password)){
            return back()->with('flash_error','Invalid old password entered');
        }

        $user = User::findOrFail(auth()->user()->id);
        $user->password = $request->npassword;

        if ($user->save()){
            return back()->with('flash_info','Password has been changed successful');
        }
    }

    public function logout(){
        Auth::guard()->logout();
        return redirect('/auth/login')->with('flash_info','You have logged out successfully');
    }
}
