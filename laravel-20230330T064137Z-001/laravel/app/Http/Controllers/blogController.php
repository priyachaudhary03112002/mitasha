<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\cart;
use App\Models\wishlist;
use Alert;

class blogController extends Controller
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

    public function add_blog(Request $request)
    {

        $data=new blog;
		$data->title=$request->title;
        $data->description=$request->description;

       
		// img upload
		$image=$request->file('image');		
		$imagename=time().'img.'.$request->file('image')->getClientOriginalExtension();
		$image->move('backend/assets/img/upload/',$imagename);  // use move for move image in public/images
		$data->image=$imagename; // name store in db

		$data->save();
		Alert::success('success', 'Blog Success');
		return back();
    }

    public function viewall() 
    { 
        $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
       $total_cart = $cart_data->count();
       $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
       $total_wish= $wish_data->count();       
	   $blog=blog::all();
       return view('frontend.blog',['data'=>$blog,'total_cart'=>$total_cart,'total_wish'=>$total_wish]);
    }
    public function singleblog_edit($id)
    {
            $data=blog::where("id",'=',$id)->first();
            $fetch=blog::inRandomOrder()->limit(3)->get();
            $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
            $total_cart = $cart_data->count();
            $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
            $total_wish= $wish_data->count();
            return view('frontend.blog-single',['fetch'=>$data,'data'=>$fetch,'total_cart'=>$total_cart,'total_wish'=>$total_wish]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

       
    function manage_blog()
	{
		$blog=blog::all();
        return view('backend.manage_blog',['fetch'=>$blog]);
	}
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

    public function edit_blog($id)
    {
        $data=blog::where("id",'=',$id)->first();
        return view('backend.edit_blog',['fetch'=>$data]);
    }

    public function blog_update(Request $request, $id)
    {
       
        $data=blog::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
                          
        // img upload
        $old_file=$data->image;
        if($request->hasFile('image'))
        {
            $image=$request->file('image');		
            $imagename=time().'_img.'.$request->file('image')->getClientOriginalExtension();
            $image->move('backend/assets/img/upload/',$imagename);  
            $data->image=$imagename; 
            unlink('backend/assets/img/upload/'.$old_file);
        }        
       
        $data->update();
        Alert::success('success', 'Update Success');
        return redirect('/manage_blog');
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
        $data=blog::find($id);
		$data->delete();
		Alert::success('success', 'Delete  blog Success');
		return back();
    }
}
