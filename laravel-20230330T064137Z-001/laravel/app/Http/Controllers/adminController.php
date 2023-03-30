<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Hash;
use Alert;
use session;


class adminController extends Controller
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
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3'


            
            ]);
        $data=new admin;
		$data->name=$request->name;
        $data->username=$request->username;
        $data->password=Hash::make($request->password);
        $data->email=$request->email;
       
		$data->save();
		Alert::success('success', 'admin Success');
		return back();
    }


    public function login(Request $request)
    {

        $validated = $request->validate([
            
            'email' => 'required|email',
            'password' => 'required|min:3'


            
            ]);
        $email=$request->email;
$data=admin::where('email','=',$email)->first();
if($data)  
{
$chk=Hash::check($request->password,$data->password);
if($chk)
{
      session()->put('id',$data->id);
      session()->put('name',$data->name);
      session()->put('email',$data->email);
      Alert::success('Congrats', 'You\'ve Successfully Login');
      
      return redirect('/dashboard');
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
       
    public function login_admin()
    {
		return view('backend.login');
    }

    public function register_admin()
    {
		return view('backend.register');
    }

    public function dashboard()
    {
		return view('backend.dashboard');
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

    public function logout()
	{
		session()->pull('id');
		session()->pull('name');
		session()->pull('email');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/login');
	}

}
