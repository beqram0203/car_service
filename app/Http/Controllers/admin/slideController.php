<?php

namespace App\Http\Controllers\admin;

use App\slide_add;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class slideController extends Controller
{
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $sl=slide_add::all();
        return view('admin.slide.index')->with(array('slides'=>$sl));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.slide.create');
        
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        
        
        $sl=new slide_add;
        //echo date('d:m:y',$request->date);
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required|image|mimes:png,svg|max:2048',
            'date' => 'date'
            ]);
            $image = $request->file('image');
            
            $input['name'] = time().'.'.$image->getClientOriginalName();
            
            $image->move(public_path('/images/slide'), $input['name']);
            
            
            
            $sl= new slide_add;
            $sl->name = $input['name'];
            $sl->URl ='/images/slide/'.$input['name'];
            $sl->headName = $request->name;
            $sl->date = $request->date;
            $sl->save();
            
            
            echo  $msg = "surati aitvirta warmatebit".public_path($sl->URl);
            return view('admin.slide.create')->with(array('msg'=>$msg));
            
            
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
            $slide = slide_add::find($id);
            
            // show the view and pass the nerd to it
            return View('admin.slide.show')
            ->with('slide', $slide);
        }
        
        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\slide_add  $slide_add
        * @return \Illuminate\Http\Response
        */
        public function edit($id)
        {
            $slide = slide_add::find($id);
            return View('admin.slide.edit')
            ->with('slide', $slide);
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
            $sl=  slide_add::find($id);
            $this->validate($request,[
                'headName' => 'required',
                'date' => 'date'
                ]);
                if($request->image!=null){
                    $image = $request->file('image');
                    if(\File::exists(public_path($sl->URl))) {
                        \File::delete(public_path($sl->URl));
                    }
                    $input['name'] = time().'.'.$image->getClientOriginalName();
                    $sl->name = $input['name'];
                    $image->move(public_path('/images/slide'), $input['name']);
                    $d=$input['name'];
                }
                
                
                
                $sl->URl ='/images/slide/'.$input['name'];
                $sl->headName = $request->headName;
                $sl->date = $request->date;
                $sl->save();
                
                
                
                return Redirect('admin/slide');
                
            }
            
            /**
            * Remove the specified resource from storage.
            *
            * @param  \App\slide_add  $slide_add
            * @return \Illuminate\Http\Response
            */
            public function destroy($id)
            {
                $sl=slide_add::find($id);
                
                if(\File::exists(public_path($sl->URl))) {
                    \File::delete(public_path($sl->URl));
                }
                $sl->delete();
                return redirect('admin/slide');
            }
            
        }
        