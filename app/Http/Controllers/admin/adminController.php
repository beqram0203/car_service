<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\slide_add;
use App\service as s;
use App\SocialLink;
use App\Subscriber;
class adminController extends Controller
{
    public function index(){
        $s=s::all();
        $ds=SocialLink::all();
        $sld=slide_add::all();
        $sub=Subscriber::all();


        return view('admin.index',['sub'=>$sub->count(),'s'=>$s->count(),'sld'=>$sld->count(),'ds'=>$ds->count()]);
    }
    
}
