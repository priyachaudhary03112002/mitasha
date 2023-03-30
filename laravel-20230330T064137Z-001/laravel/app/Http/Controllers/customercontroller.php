<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\welcomemail;
use App\Models\customer;
use App\Models\cart;
use App\Models\wishlist;
use Mail;
use Hash;
use Alert;

class customercontroller extends Controller
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
            'password' => 'required|min:3'
            
            ]);
        $data=new customer;
		$data->name=$request->name;
		$email=$data->email=$request->email;
		$data->password=Hash::make($request->password);
		$data->save();
        $data=['msg'=>"Registration Success",'sub'=>"Cosmetic Website"];
        Mail::to($email)->send(new welcomemail($data));

		Alert::success('success', 'Register Success');
		return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
            
            ]);

        
        $email=$request->email;
$data=customer::where('email','=',$email)->first();
if($data)   
{
$chk=Hash::check($request->password,$data->password);
if($chk)
{
      session()->put('cust_id',$data->id);
      session()->put('name',$data->name);
      session()->put('email',$data->email);
      Alert::success('Congrats', 'You\'ve Successfully Login');
      
      return redirect('/index');
}
else
{
  Alert::error('Login Failed', 'Wrong Password');
  return redirect()->back();
}
}
else
		{
			Alert::error('Login Failed', 'Wrong Email');
			return redirect()->back();
		}
    }

    public function login_page()
    {
		return view('frontend.login1');
    }

    public function registration_page()
    {
		return view('frontend.registration');
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
    public function profile1()
    {
        $wish_data=wishlist::where('cust_id','=',session('cust_id'))->get();
        $total_wish= $wish_data->count(); 
        $cart_data=cart::where('cust_id','=',session('cust_id'))->get();
        $total_cart = $cart_data->count();
        $data=customer::where("id",'=',session('cust_id'))->first();
		return view('frontend.profile1',['data'=>$data,'total_wish'=>$total_wish,'total_cart'=>$total_cart]);
    }

    public function edit_profile1($id)
    {
        $data=customer::where("id",'=',$id)->first();
		return view('frontend.edit_profile1',['data'=>$data]);
    }

    public function update_profile1(Request $request,$id)
    {
        $data=customer::find($id);
		$data->name=$request->name;
		$data->username=$request->username;
        $data->email=$request->email;
		$data->gender=$request->gender;
        $data->address=$request->address;
		$data->lag=implode(",",$request->lag);
		$data->mobile=$request->mobile;
		
		
		// img upload
		//$old_file=$data->file;
		if($request->hasFile('img'))// check file or not
		{
			$img=$request->file('img');		
			$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
			$img->move('frontend/images/upload/',$imgname);  // use move for move image in public/images
			$data->img=$imgname; // name store in db
			//unlink('frontend/images/upload/'.$old_file);
		}
		$data->update();
		Alert::success('success', 'Update Success');
		return redirect('/profile1');
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
    function logout()
	{
		session()->pull('cust_id');
		session()->pull('name');
        session()->pull('email');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index');
	}
}
