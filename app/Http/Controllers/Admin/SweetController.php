<?php

namespace App\Http\Controllers\Admin;
Use App\Sweet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sweets= Sweet::all();
        return view('admin.sweet.index',compact('sweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sweet.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
        {
        $this->validate($request, [
            'PID' => 'required',
            'Sweet_name' => 'required',
            'Price' => 'required',
            'Quantity' =>'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->PID);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/sweet'))
            {
                mkdir('uploads/sweet', 0777 , true);
            }
            $image->move('uploads/sweet',$imagename);
        }else {
            $imagename = 'default.png';
        }
        $sweet = new Sweet();

        $sweet->PID = $request->PID;
        $sweet->Sweet_name = $request->Sweet_name;
        $sweet->Price = $request->Price;
        $sweet->Quantity = $request->Quantity;
        $sweet->image = $imagename;
        $sweet-> save();
        return redirect()->route('sweet.index')->with('successMsg', 'Sweet Successfully Saved');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $sweet=Sweet::find($id);
        return view('admin.sweet.edit',compact('sweet')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request, [
            'PID' => 'required',
            'Sweet_name' => 'required',
            'Price' => 'required',
            'Quantity' =>'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->PID);
        $sweet=Sweet::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/sweet'))
            {
                mkdir('uploads/sweet', 0777 , true);
            }
            $image->move('uploads/sweet',$imagename);
        }else {
            $imagename = $sweet->image;
        }

        $sweet->PID = $request->PID;
        $sweet->Sweet_name = $request->Sweet_name;
        $sweet->Price = $request->Price;
        $sweet->Quantity = $request->Quantity;
        $sweet->image = $imagename;
        $sweet-> save();
        return redirect()->route('sweet.index')->with('successMsg', 'Sweet Successfully Saved');
    
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
   {
         $sweet = Sweet::find($id);
         if( file_exists('uploads/sweet/.$sweet->image')){
         unlink('uploads/sweet/'.$sweet->image);
    }
         $sweet->delete();
         return redirect()->back()->with('successMsg','Sweet Successfully Deleted'); 
    }
}