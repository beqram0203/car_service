<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\service as s;

class serviseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sl=s::all();
        return view('admin.service.index')->with(array('service'=>$sl));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.service.create');
        
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        
        
        $sl=new s;
        //echo date('d:m:y',$request->date);
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required|image|mimes:png,svg|max:2048',
            
            ]);
            $image = $request->file('image');
            
            $input['name'] = time().'.'.$image->getClientOriginalName();
            
            $image->move(public_path('/images/service'), $input['name']);
            
            
            $sl= new s;
            $sl->name = $request->name;
            $sl->URl ='/images/service/'.$input['name'];
            $sl->save();
            
            
            echo  $msg = "surati aitvirta warmatebit";
            return view('admin.service.create')->with(array('msg'=>$msg));
            
            
        }
        
        /**
        * Display the specified resource.
        *
        * @param  \App\slide_add  $slide_add
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
            // print_r($slide_add);
            $service = s::find($id);
            
            // show the view and pass the nerd to it
            return View('admin.service.show')
            ->with('service', $service);
        }
        
        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\slide_add  $slide_add
        * @return \Illuminate\Http\Response
        */
        public function edit($id)
        {
            $service = s::find($id);
            return View('admin.service.edit')
            ->with('service', $service);
        }
        
        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\slide_add  $slide_add
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, $id)
        {
            print_r($_POST);
            $sl=  s::find($id);
            $this->validate($request,[
                'name' => 'required',
                'date' => 'date'
                ]);
                if($request->image!=null){
                    $image = $request->file('image');
                    if(\File::exists(public_path($sl->URL))) {
                        \File::delete(public_path($sl->URL));
                    }
                    $input['name'] = time().'.'.$image->getClientOriginalName();
                    $sl->name = $request->name;
                    $image->move(public_path('/images/service'), $input['name']);

                    $d=$input['name'];
                    
                    
                }
                
                $sl->URl = '/images/service/'.$input['name'];
               
                $sl->save();
                
                
                
                return Redirect('admin/service');
              
            }
            
            /**
            * Remove the specified resource from storage.
            *
            * @param  \App\slide_add  $slide_add
            * @return \Illuminate\Http\Response
            */
            public function destroy($id)
            {
                $sl=s::find($id);
                
                if(\File::exists(public_path($sl->URL))) {
                    \File::delete(public_path($sl->URL));
                }
                $sl->delete();
                return redirect('admin/service');
            }
        }
        