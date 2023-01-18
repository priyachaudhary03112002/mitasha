<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo;
use Alert;


class photocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function add_photo(Request $request)
    {
        $data=new photo;
		$data->name=$request->name;
		
		// img upload
		$img=$request->file('img');		
		$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		$img->move('backend/assets/img/upload/',$imgname);  // use move for move image in public/images
		$data->img=$imgname; // name store in db

        $multi_imgarr = [];
        if($request->hasfile('multi_img'))
         {
            foreach($request->file('multi_img') as $multi_img)
            {
                $name = time().rand(1000,9999).'_img.'.$multi_img->extension();
                $multi_img->move('backend/assets/img/upload/product/',$name);  
                $multi_imgarr[] = $name;  
            }
	$data->multi_img=implode(',',$multi_imgarr);
         }

		$data->save();
		Alert::success('success', 'photo Success');
		return back();
    }

    public function manage_photo()
    {
        $photo=photo::all();	  // select * from
	   return view('backend.manage_photo',['fetch'=>$photo]);
    }

    public function viewall()
    {
        $photo=photo::all();	  // select * from
	   return view('frontend.index',['data'=>$photo]);
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
