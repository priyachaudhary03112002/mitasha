<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Hash;
use Alert;


class categoryController extends Controller
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
    public function add_category(Request $request)
    {

        $validated = $request->validate([
            'cate_name' => 'required|alpha',
            'cate_img' => 'required|mimes:jpeg,png,jpg,gif,svg'
            
            ]);

        $data=new category;
		$data->cate_name=$request->cate_name;
		
		// img upload
		$img=$request->file('cate_img');		
		$cate_imgname=time().'_img.'.$request->file('cate_img')->getClientOriginalExtension();
		$img->move('backend/assets/img/upload/',$cate_imgname);  // use move for move image in public/images
		$data->cate_img=$cate_imgname; // name store in db

		$data->save();
		Alert::success('success', 'category Success');
		return back();
    }

    function manage_category(Request $request)
	{

        $search=$request->search;
        if($search!="")
        {  
            $fetch=category::where('categories.cate_name', 'LIKE' ,'%'.$search.'%')
            ->get();
            
        }else{
        $fetch=category::all();	  // select * from
       
            }
            return view('backend.manage_category',compact('fetch','search'));
	}

    public function category()
    {
        return view('backend.add_category');
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
            $category=category::all();
            $data=category::where("id",'=',$id)->first();
    		return view('backend.edit_category',['category'=>$category,'fetch'=>$data]);
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
        $data=category::find($id);
		$data->cate_name=$request->cate_name;
		
		
		// img upload
		$old_file=$data->cate_img;
		if($request->hasFile('cate_img'))// check file or not
		{
			$cate_img=$request->file('cate_img');		
			$cate_imgname=time().'_img.'.$request->file('cate_img')->getClientOriginalExtension();
			$cate_img->move('backend/assets/img/upload/',$cate_imgname);  // use move for move image in public/images
			$data->cate_img=$cate_imgname; // name store in db
			unlink('backend/assets/img/upload/'.$old_file);
		}
		$data->update();
		Alert::success('success', 'Update Success');
		return redirect('/manage_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=category::find($id);
		$data->delete();
		Alert::success('success', 'Delete Success');
		return back();
    }
}
