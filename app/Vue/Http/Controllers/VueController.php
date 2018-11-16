<?php

namespace App\Vue\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Auth\Models\User;
use Illuminate\Http\Request;
use Validator;
use DateTime;

class VueController extends BaseController
{
    public function index()
    {
        return view('vue.index');
    }
    public function listvue()
    {
        return User::get();
    }
    public function addvue(Request $request){
        
        $validate = Validator::make($request->all(),[
            'name'     => 'required|min:5',
            'email'    => 'unique:users|required',
            'password' => 'required|min:6',
        ]);

      
        if(!$validate->fails()){

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->created_at = new DateTime();
            $user->save();

            return response([
                'message'=>"success"
            ],200);

        }else{
            return response([
                'message'=>$validate->errors()
            ],404);
        }
        
    }
    public function delvue($id){

        $user = User::find($id);
        $user->delete();

        return response([
            'message'=>"success"
        ],200); 

    }
    public function geteditvue($id){
        $user = User::find($id);
        return $user;
    }
    public function editvue($id,Request $request){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->updated_at = new DateTime();
        $user->save();
        
        return response([
            'message'=>"success"
        ],200); 
    }
}
