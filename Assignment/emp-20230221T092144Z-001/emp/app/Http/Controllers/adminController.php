<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Notification;
use Mail;
use App\Mail\welcomemail;
use App\Notifications\welcomeNotification;
use session;
use Alert;
use Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    


    public function index(Request $request)
    {
        $data=new admin;
		$data->name=$request->name;
		$email=$data->email=$request->email;
		$data->password=Hash::make($request->password);	  
        $data->save();

        $data=['msg'=>"Registration Success","sub"=>"Employee management success.."];
		Mail::to($email)->send(new welcomemail($data));

        Alert::success('success','admin success');
        return back();
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userlogin(Request $request)
    {
        $email=$request->email;
		$data=admin::where('email','=',$email)->first();
		if($data)   
		{
			$chk=Hash::check($request->password,$data->password);
			if($chk)
			{
                session()->put('id',$data->id);
					session()->put('name',$data->name);
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
			Alert::error('Login Failed', 'Wrong email');
			return redirect()->back();
		}	
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function logout()
	{
		session()->pull('id');
		session()->pull('name');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index'); 
	}
    public function store(Request $request)
    {
        //
    }

    public function sendNotification()
    {
        $admin = admin::all();
   
        $data = ['greeting' => 'Hi mitasha..',
            'body' => 'This is my first notification from Nicesnippests.com',
            'thanks' => 'Thank you for using Nicesnippests.com tuto!'];

        //$admin->notify(new welcomeNotification($details));
  
        Notification::send($admin, new welcomeNotification($data));
      // Notification::sendNow($admin, new welcomeNotification($data));
       // dd('done');
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
