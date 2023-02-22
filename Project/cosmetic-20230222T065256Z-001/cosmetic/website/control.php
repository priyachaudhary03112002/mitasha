<?php

include_once('model.php');  // step 1  load mopdel 
class control extends model // step 2 extends model
{
	
	function __construct()
	{
		 session_start();
		model::__construct(); // step 3 call model __construct();		
		$path=$_SERVER['PATH_INFO'];// http://localhost/students/02Aug_PHP_Rajesh/project/website/control.php
		
		switch($path)
		{
			case '/':
			include_once('index.php');
			break;
			
			case '/index':
			include_once('index.php');
			break;
			
			
			case '/shop':
			include_once('shop.php');
			break;
			
			case '/cart':
			//$cart_arr=$this->select('cart');
			include_once('cart.php');
			break;
			
			case '/detail':
			include_once('detail.php');
			break;
			
			case '/checkout':
			include_once('checkout.php');
			break;
			
			case '/contact':
              if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$comment=$_REQUEST['comment'];
				
				
				$data=array("name"=>$name, "email"=>$email, "comment" => $comment);
			//print_r($data);
				
				$res=$this->insert('contact',$data);
				
				if($res)
				{
					echo "<script> alert('contact Success')</script>";
				}
				else
				{
					echo "FGAILED";
				}
			 }

			include_once('contact.php');
			break;
			
			 case '/profile':
			$where=array('cust_id'=>$_SESSION['cust_id']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break; 

			case '/editprofile':
			if(isset($_REQUEST['btncust_id']))
			{
				$cust_id=$_REQUEST['btncust_id'];
				$where=array('cust_id'=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->img;
				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$username=$_REQUEST['username'];
					$email=$_REQUEST['email'];
					$mobile=$_REQUEST['mobile'];
					$address=$_REQUEST['address'];
					$gender=$_REQUEST['gender'];
					$lag_arr=$_REQUEST['lag'];
					$lag=implode(",",$lag_arr);
					
					
					
					$file=$_FILES['img']['name'];  // get only input type="file"
					$path='upload/'.$file;   // PATH
					$tmp_file=$_FILES['img']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
					
					if($_FILES['img']['size']>0)
					{
						$data=array("name"=>$name,"username"=>$username,"email"=>$email,"mobile"=>$mobile,"address"=>$address,"gender"=>$gender,"lag"=>$lag,"img"=>$file);
						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							unlink('upload/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
					else
					{
						$data=array("name"=>$name,"username"=>$username,"email"=>$email,"mobile"=>$mobile,"gender"=>$gender,"address"=>$address, "lag"=>$lag);
						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
					
				}
				
			}
			include_once('editprofile.php');
			break;
		

			case '/register':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_pass=md5($password);
				$mobile=$_REQUEST['mobile'];
				$gender=$_REQUEST['gender'];
				$address=$_REQUEST['address'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);
				
				
				 $file=$_FILES['img']['name'];  // get only input type="file"
				$path='upload/'.$file;   // PATH
				$tmp_file=$_FILES['img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
				
				$data=array("name"=>$name, "email"=>$email, "username" => $username, "password"=>$enc_pass, "mobile" => $mobile, "address"=>$address,"gender"=>$gender,"lag"=>$lag,"img"=>$file);
			//print_r($data);
				
				$res=$this->insert('customer',$data);
				
				if($res)
				{
					echo "<script> alert('register Success')</script>";
				}
				else
				{
					echo "FGAILED";
				}
			 }
			include_once('register.php');
			break;
			
			
			case '/login':
		 if(isset($_REQUEST['login']))
			{
				$username=$_REQUEST['username'];
				//print_r($username);
				$password=$_REQUEST['password'];
				$enc_pass=md5($password);
				//print_r($password);
				$email=$_REQUEST['email'];
				//print_r($email);
				//$enc_pass=md5($pass);
				
				$where=array("username"=>$username,"password"=>$enc_pass,"email"=>$email);
				
				$run=$this->select_where('customer',$where);
				$chk=$run->num_rows; // all cond true or false by rows
				if($chk==1) // 1 means true
				{

					$fetch=$run->fetch_object(); //
					$cust_id=$fetch->cust_id;						
					$name=$fetch->name;	

					$_SESSION['cust_id']=$cust_id;
					$_SESSION['name']=$name;
					$_SESSION['username']=$username;
					echo "<script> alert('Login Success'); 
					window.location='index';
					</script>";
					
				}
				else
				{
					echo "<script> alert('Login Failed'); 
					</script>";
				}
				
			}
			include_once('login.php');
			break;
			
			
			
			case '/logout':
			unset($_SESSION['name']);
			unset($_SESSION['cust_id']);
			unset($_SESSION['username']);
			echo "<script> alert('Logout Success'); 
			window.location='index';
			</script>";
					
			break;
			
		}
	}
	
}
$obj=new control;

?>