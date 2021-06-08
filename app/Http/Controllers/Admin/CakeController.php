<?php

namespace App\Http\Controllers\Admin;
use App\Cake;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cakes = Cake::all();
        return view('admin.cake.index',compact('cakes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.cake.create');
    }

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
            'Cake_name' => 'required',
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
            if (!file_exists('uploads/cake'))
            {
                mkdir('uploads/cake', 0777 , true);
            }
            $image->move('uploads/cake',$imagename);
        }else {
            $imagename = 'default.png';
        }
        $cake = new Cake();

        $cake->PID = $request->PID;
        $cake->Cake_name = $request->Cake_name;
        $cake->Price = $request->Price;
        $cake->Quantity = $request->Quantity;
        $cake->image = $imagename;
        $cake-> save();
        return redirect()->route('cake.index')->with('successMsg', 'Cake Successfully Saved');
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
        $cake=Cake::find($id);
        return view('admin.cake.edit',compact('cake')); 
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
            'Cake_name' => 'required',
            'Price' => 'required',
            'Quantity' =>'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->PID);
        $cake=Cake::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/cake'))
            {
                mkdir('uploads/cake', 0777 , true);
            }
            $image->move('uploads/cake',$imagename);
        }else {
            $imagename = $cake->image;
        }

        $cake->PID = $request->PID;
        $cake->Cake_name = $request->Cake_name;
        $cake->Price = $request->Price;
        $cake->Quantity = $request->Quantity;
        $cake->image = $imagename;
        $cake-> save();
        return redirect()->route('cake.index')->with('successMsg', 'Cake Successfully Saved');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cake = Cake::find($id);
         if( file_exists('uploads/cake/.$cake->image')){
         unlink('uploads/cake/'.$cake->image);
    }
         $cake->delete();
         return redirect()->back()->with('successMsg','Cake Successfully Deleted'); 
    }
}
