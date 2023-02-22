<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Hash;
use Alert;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email',
            'comment' => 'required',
            

            
            ]);
        $data=new contact;
		$data->name=$request->name;
        $data->email=$request->email;
        $data->comment=$request->comment;
		
		$data->save();
		Alert::success('success', 'contact Success');
		return back();
    }

    
    public function manage_contact(Request $request)
    {
        $search=$request->search;
        if($search!="")
        {  
            $fetch=contact::where('contacts.name', 'LIKE' ,'%'.$search.'%')
            ->orWhere('contacts.comment', 'LIKE' ,'%'.$search.'%')
            ->get();
            
        }else{
        $fetch=contact::all();	  // select * from
           }
           return view('backend.manage_contact',compact('fetch','search'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
