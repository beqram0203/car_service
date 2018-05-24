<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\slide_add;
use App\service as s;
use App\SocialLink;
use App\Subscriber;
class loginController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function signin(Request $request ){
        $this->validate($request,[
            'email'=> 'required|email',
            'password'=> 'required'
        ]);
        $log = $request->only('email', 'password');


        if(auth::attempt($log)){
            $s=s::all();
            $ds=SocialLink::all();
            $sld=slide_add::all();
            $sub=Subscriber::all();
    
    
            //return view('admin.index',['sub'=>$sub->count(),'s'=>$s->count(),'sld'=>$sld->count(),'ds'=>$ds->count()]);
        
            return view('admin.index',['sub'=>$sub->count(),'s'=>$s->count(),'sld'=>$sld->count(),'ds'=>$ds->count()]);
        }
        else{
            return view('admin.login');
        }
    }
    public function logout(){
        auth::logout();
        return view('admin.login');
    }
}
