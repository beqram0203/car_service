<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use Illuminate\Support\Facades\DB;
use App\slide_add;
use App\service as s;
use App\SocialLink;

class mianConroller extends Controller
{
    
    public function index()
    {
        $s=s::all();
        $ds=SocialLink::all();
        $sld=slide_add::all();
        foreach ($sld as $key=>$v ) {
            //echo  $k=$v->date;
            //echo $key['month']=substr($k,6,2);
            //echo date_format(strtotime($v->date), 'm');
        }
        return view('indexm',['slide'=>$sld,'service'=>$s,'icn'=>$ds]);
    }
    public function form(Request $request)
    {
        $msg="";
        $this->validate($request,[
            'name'=> 'required|string',
            'email'=> 'required|email',
            'subject'=> 'required|string',
            'textarea'=> 'required|string',
            'gender'=> 'required|in:male,female',
            'option'=> 'required'
            ]);
            
            $ds= new Subscriber;
            
            if($ds->where('email',$request->email)->count()==0){
                //try{
                    $ds->name = $request->name;
                    $ds->email = $request->email;
                    $ds->subject = $request->subject;
                    $ds->Text = $request->textarea;
                    $ds->Gender = $request->gender;
                    
                    
                    if (isset($request->option)) {
                        foreach ($request->option as $opt) {
                            if($request->option==1)
                            DB::table('onimage')->insert(['email'=>$request->email]);
                            
                            if($request->option==2)
                            DB::table('onpromotion')->insert(['email'=>$request->email]);
                            
                            if($request->option==3)
                            DB::table('onupdate')->insert(['email'=>$request->email]);
                            
                            if($request->option==4)
                            DB::table('onjob')->insert(['email'=>$request->email]);
                            
                            $ds->Option.= $opt;
                        }
                        
                        
                        $ds->save();
                        $msg="the message sent successfully!";
                    }
                    else{
                        $msg="unda shedgebodes minimum ertisgan";
                        
                    }
                    
                }
                // catch(exeption $e){
                    //     echo "dafiqsirda shecdoma. gtxovt sheavsot yvela forma";
                    // }
                    else{
                          
                        $msg="the email is already token";
                        
                    }
                    $sg=$msg;
                    
                    $s=s::all();
                    $d=slide_add::all();
                    $ds=SocialLink::all();
                    return view('indexm',['slide'=>$d,'service'=>$s,'icn'=>$ds])->withErrors($msg);
                    
                }
                public function ds(){
                    $sl=Subscriber::all();
                    return view('admin.Subscriber',['slide'=>$sl]);
    
                }
                
            }
            