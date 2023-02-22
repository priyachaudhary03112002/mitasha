<?php
include_once('../website/model.php');
class control extends model
{
	
	function __construct()
	{
		session_start();
		 model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/':
			include_once('index.php');
			break;


			case '/index':
               if(isset($_REQUEST['login']))
			{
				$name=$_REQUEST['name'];
				$password=$_REQUEST['password'];
				$enc_pass=md5($password);
				
				$where=array("name"=>$name,"password"=>$enc_pass);
				$run=$this->select_where('admin',$where);
				$chk=$run->num_rows; // all cond true or false by rows
				if($chk==1) // 1 means true
				{

                      $fetch=$run->fetch_object(); //
					$admin_id =$fetch->admin_id;						
					$name=$fetch->name;
					


					$_SESSION['admin_id']=$admin_id;
					$_SESSION['admin_name']=$name;
					

					echo "<script> alert('Login Success'); 
					window.location='dashboard';
					</script>";
					
				}
				else
				{
					echo "<script> alert('Login Failed'); 
					</script>";
				}
				
			}

			include_once('index.php');
			break;
			
			case '/register':
              if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				$enc_pass=md5($password);
				$email=$_REQUEST['email'];
					
				$data=array("name"=>$name, "username" => $username, "password"=>$enc_pass,"email"=>$email);
			//print_r($data);
				
				$res=$this->insert('admin',$data);
				
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
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_category':
			if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				$cate_img=$_REQUEST['cate_img'];
				
				 $file=$_FILES['cate_img']['name'];  // get only input type="file"
				$path='image/'.$file;   // PATH
				$tmp_file=$_FILES['cate_img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
				
				$data=array("cate_name"=>$cate_name,"cate_img"=>$file);
			//print_r($data);
				
				$res=$this->insert('category',$data);
				
				if($res)
				{
					echo "<script> alert('category form Success')</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}	

			include_once('add_category.php');
			break;
			 
			
			case '/manage_category':
			$category_arr=$this->select('category');
			//$run=$this->conn->query($category_arr);
			//$fetch=$run->fetch_object();
			//$category_id =$fetch->category_id;

			//print_r($category_arr);
			include_once('manage_category.php');
			break;

			case '/admin_cate_edit':
			if(isset($_REQUEST['editbtn']))
			{
				$category_id=$_REQUEST['editbtn'];
				$where=array('category_id'=>$category_id);
				$run=$this->select_where('category',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->cate_img;
				
				if(isset($_REQUEST['submit']))
				{
					$cate_name=$_REQUEST['cate_name'];
					$cate_img=$_REQUEST['cate_img'];
					
					$file=$_FILES['cate_img']['name'];  // get only input type="file"
					$path='image/upload/'.$file;   // PATH
					$tmp_file=$_FILES['cate_img']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
					
					if($_FILES['cate_img']['size']>0)
					{
						$data=array("cate_name"=>$cate_name,"cate_img"=>$file);
						$res=$this->update_where('category',$data,$where);
						if($res)
						{
							unlink('image/upload/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='manage_category';
							</script>";
						}
					}
					else
					{
						$data=array("cate_name"=>$cate_name);
						$res=$this->update_where('category',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_category';
							</script>";
						}
					}
					
				}
				
			}
			include_once('editcategory.php');
			if(isset($_REQUEST['editbtn']))
			{
				$category_id=$_REQUEST['editbtn'];
				$where=array('category_id'=>$category_id);
				$run=$this->select_where('category',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->cate_img;
				
				if(isset($_REQUEST['submit']))
				{
					$cate_name=$_REQUEST['cate_name'];
					$cate_img=$_REQUEST['cate_img'];
					
					$file=$_FILES['cate_img']['name'];  // get only input type="file"
					$path='image/upload/'.$file;   // PATH
					$tmp_file=$_FILES['cate_img']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
					
					if($_FILES['cate_img']['size']>0)
					{
						$data=array("cate_name"=>$cate_name,"cate_img"=>$file);
						$res=$this->update_where('category',$data,$where);
						if($res)
						{
							unlink('image/upload/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='manage_category';
							</script>";
						}
					}
					else
					{
						$data=array("cate_name"=>$cate_name);
						$res=$this->update_where('category',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_category';
							</script>";
						}
					}
					
				}
				
			}

			break;

			 case '/delete':
			
			if(isset($_REQUEST['deletebtn']))
			{
				$category_id=$_REQUEST['deletebtn'];
				$where=array("category_id"=>$category_id);
				
				// if img delete
				$run=$this->select_where('category',$where);
				$fetch=$run->fetch_object();
				$file=$fetch->cate_img;
				$run=$this->delete_where('category',$where);
				if($run)
				{
					unlink('image/upload/'.$file);
					echo "<script> alert('Delete Success'); 
					window.location='manage_category';
					</script>";
				}					
			}
			
			if(isset($_REQUEST['deletebtn']))
			{
				$category_id=$_REQUEST['deletebtn'];
				$where=array("category_id"=>$category_id);
				$run=$this->delete_where('category',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_category';
					</script>";
				}	
			}
			break;

			case '/editproduct':
			$category=$this->select('category');
				if(isset($_REQUEST['btnproduct']))
			{
				$product_id =$_REQUEST['btnproduct'];
				$where=array('product_id'=>$product_id);
				$run=$this->select_where('product',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->prod_img;
				
				if(isset($_REQUEST['submit']))
				{
					$prod_name=$_REQUEST['prod_name'];
					$prod_mainprice=$_REQUEST['prod_mainprice'];
					$prod_discprice=$_REQUEST['prod_discprice'];
					$cate_img=$_REQUEST['prod_img'];
					$prod_desc=$_REQUEST['prod_desc'];
					
					$file=$_FILES['prod_img']['name'];  // get only input type="file"
					$path='image/upload/'.$file;   // PATH
					$tmp_file=$_FILES['prod_img']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH

					$category_id=$_REQUEST['category_id'];

					if($_FILES['prod_img']['size']>0)
					{
						$data=array("prod_name"=>$prod_name,"prod_mainprice"=>$prod_mainprice,"prod_discprice"=>$prod_discprice,"prod_desc"=>$prod_desc,"prod_img"=>$file,"category_id"=>$category_id);
						$res=$this->update_where('product',$data,$where);
						if($res)
						{
							unlink('image/upload/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='manage_product';
							</script>";
						}
					}
					else
					{
						$data=array("prod_name"=>$prod_name,"prod_mainprice"=>$prod_mainprice,"prod_discprice"=>$prod_discprice,"prod_desc"=>$prod_desc,"category_id"=>$category_id);
						$res=$this->update_where('product',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_product';
							</script>";
						}
					}
					
				}
				
			}


			include_once('editproduct.php');
			break;

		    case '/deleteproduct':
			if(isset($_REQUEST['delete_btn_product']))
			{
				$product_id=$_REQUEST['delete_btn_product'];
				$where=array("product_id"=>$product_id);
				
				// if img delete
				$run=$this->select_where('product',$where);
				$fetch=$run->fetch_object();
				$file=$fetch->prod_img;
				$run=$this->delete_where('product',$where);
				if($run)
				{
					unlink('image/upload/'.$file);
					echo "<script> alert('Delete Success'); 
					window.location='manage_product';
					</script>";
				}					
			}
			
			if(isset($_REQUEST['delete_btn_product']))
			{
				$product_id=$_REQUEST['delete_btn_product'];
				$where=array("product_id"=>$product_id);
				$run=$this->delete_where('product',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_product';
					</script>";
				}	
			}
			break;


              case '/editblog':
				if(isset($_REQUEST['editblogbtn']))
			{
				$blog_id =$_REQUEST['editblogbtn'];
				$where=array('blog_id'=>$blog_id);
				$run=$this->select_where('blog',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->img;
				
				if(isset($_REQUEST['submit']))
				{
					$title=$_REQUEST['title'];
					$description=$_REQUEST['description'];
					$img=$_REQUEST['img'];
					
					$file=$_FILES['img']['name'];  // get only input type="file"
					$path='image/upload/'.$file;   // PATH
					$tmp_file=$_FILES['img']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
					
					if($_FILES['img']['size']>0)
					{
						$data=array("title"=>$title,"description"=>$description,"img"=>$file);
						$res=$this->update_where('blog',$data,$where);
						if($res)
						{
							unlink('image/upload/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='manage_blog';
							</script>";
						}
					}
					else
					{
						$data=array("title"=>$title,"description"=>$description);
						$res=$this->update_where('blog',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_blog';
							</script>";
						}
					}
					
				}
				
			}


			include_once('editblog.php');
			break;

			case '/deleteblog':
			if(isset($_REQUEST['deleteblogbtn']))
			{
				$blog_id =$_REQUEST['deleteblogbtn'];
				$where=array("blog_id "=>$blog_id);
				
				// if img delete
				$run=$this->select_where('blog',$where);
				$fetch=$run->fetch_object();
				$file=$fetch->img;
				$run=$this->delete_where('blog',$where);
				if($run)
				{
					unlink('image/upload/'.$file);
					echo "<script> alert('Delete Success'); 
					window.location='manage_blog';
					</script>";
				}					
			}
			
			if(isset($_REQUEST['deleteblogbtn']))
			{
				$blog_id=$_REQUEST['deleteblogbtn'];
				$where=array("blog_id"=>$blog_id);
				$run=$this->delete_where('blog',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_blog';
					</script>";
				}	
			}
			break;
			
			case '/add_product':
			$category=$this->select('category');
			if(isset($_REQUEST['submit']))
			{
				$prod_name=$_REQUEST['prod_name'];		
				$prod_mainprice	=$_REQUEST['prod_mainprice'];
				$prod_discprice	=$_REQUEST['prod_discprice'];
				$prod_img=$_REQUEST['prod_img'];
				$prod_desc	=$_REQUEST['prod_desc'];
				
				 $file=$_FILES['prod_img']['name'];  // get only input type="file"
				$path='image/'.$file;   // PATH
				$tmp_file=$_FILES['prod_img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH

				$category_id =$_REQUEST['category_id'];
				
				$data=array("prod_name"=>$prod_name, "prod_mainprice"=>$prod_mainprice, "prod_discprice" => $prod_discprice, "prod_desc"=>$prod_desc, "prod_img"=>$file,"category_id"=>$category_id);
			//print_r($data);
				
				$res=$this->insert('product',$data);
				
				if($res)
				{
					echo "<script> alert('product form Success')</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}	
			include_once('add_product.php');
			break;
			
             

			case '/manage_product':
			$product_arr=$this->select('product');
			include_once('manage_product.php');
			break;
			
			case '/add_blog':
			if(isset($_REQUEST['submit']))
			{
				$title=$_REQUEST['title'];
				$img=$_REQUEST['img'];
				$description=$_REQUEST['description'];
				
				 $file=$_FILES['img']['name'];  // get only input type="file"
				$path='image/'.$file;   // PATH
				$tmp_file=$_FILES['img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
				
				$data=array("title"=>$title,"img"=>$file,"description" =>$description);
			//print_r($data);
				
				$res=$this->insert('blog',$data);
				
				if($res)
				{
					echo "<script> alert('blog form Success')</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}	
			include_once('add_blog.php');
			break;

			case '/manage_blog':
			$blog_arr=$this->select('blog');
			include_once('manage_blog.php');
			break;

			case '/contact_report':
			$contact_arr=$this->select('contact');
			include_once('contact_report.php');
			break;

			case '/customer_report':
			$customer_arr=$this->select('customer');
			include_once('customer_report.php');
			break;


			case '/cart_report':
			$cart_arr=$this->select('cart');
			include_once('cart_report.php');
			break;

			 case '/profile':
			$where=array('admin_id'=>$_SESSION['admin_id']);
			$run=$this->select_where('admin',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;

			case '/editprofile':
			if(isset($_REQUEST['btnaid']))
			{
				$admin_id =$_REQUEST['btnaid'];
				$where=array('admin_id'=>$admin_id);
				$run=$this->select_where('admin',$where);
				$fetch=$run->fetch_object();

				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$username=$_REQUEST['username'];
					
					$data=array("name"=>$name,"email"=>$email,"username"=>$username);
					$res=$this->update_where('admin',$data,$where);
				if($res)
						{
						echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
					
				}	
			include_once('editprofile.php');
			break;

			case '/order_report':
			$order_arr=$this->select('order_tbl');
			include_once('order_report.php');
			break;

			case '/adminlogout':
			unset($_SESSION['admin_name']);
			unset($_SESSION['admin_id']);
			echo "<script> alert('Logout Success'); 
			window.location='dashboard';
			</script>";
			
			break;


			
		}
	}
	
}
$obj=new control;

?>
	