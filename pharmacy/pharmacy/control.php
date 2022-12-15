<?php
include_once('model.php');
class control extends model
{
     function __construct(){
       session_start();
     	model:: __construct();
     	$path=$_SERVER['PATH_INFO'];

     	 switch ($path) {

     	 	case '/':
            include_once('index.php');
     	 	break;
          
           case '/index':
           include_once('index.php');
     	 	break;

           case '/add_medicine':
            if(isset($_REQUEST['submit']))
      {
        $medicine_name=$_REQUEST['medicine_name'];
        $qty=$_REQUEST['qty'];
        $price=$_REQUEST['price'];
        $add_date=$_REQUEST['add_date'];
        $add_by=$_REQUEST['add_by'];

        $data=array("medicine_name"=>$medicine_name,"qty"=>$qty,"price"=>$price,"add_date"=>$add_date,"add_by"=>$add_by);
      //print_r($data);
        
        $res=$this->insert('medicine',$data);
        
        
        if($res)
        {
          
        }
        else
        {
          
        }
      } 

           include_once('add_medicine.php');
     	 	break;
     
        case '/medicine_edit': 
          if(isset($_REQUEST['editmedicine']))
      {
        $med_id=$_REQUEST['editmedicine'];
        $where=array('med_id'=>$med_id);
        $run=$this->select_where('medicine',$where);
        $fetch=$run->fetch_object();
        
               
        if(isset($_REQUEST['submit']))
        {
          $medicine_name=$_REQUEST['medicine_name'];
          $qty=$_REQUEST['qty'];
          $price=$_REQUEST['price'];
          $add_date=$_REQUEST['add_date'];
          $add_by=$_REQUEST['add_by'];
    
            $data=array("medicine_name"=>$medicine_name,"qty"=>$qty,"price"=>$price,"add_date"=>$add_date,"add_by"=>$add_by);
            $res=$this->update_where('medicine',$data,$where);
            if($res)
            {
              echo "<script> 
              window.location='manage_medicine';
              </script>";
            }
          }        
      }
      include_once('editmedicine.php');
        break;

     	 	case '/manage_medicine': 
         $medicine_arr=$this->select('medicine');
      include_once('manage_medicine.php');
        break;

            case '/medicine_delete':
           
      if(isset($_REQUEST['deletemedicine']))
      {
        $med_id=$_REQUEST['deletemedicine'];
        $where=array("med_id"=>$med_id);
        $run=$this->delete_where('medicine',$where);
        if($run)
        {
          echo "<script> alert('Delete Success'); 
          window.location='manage_medicine';
          </script>";
        } 
      }
      break;

      case '/view_medicine':
      $medi_arr=$this->select('medicine');
        include_once('view_medicine.php');
        break;

      case '/login':
      if(isset($_REQUEST['submit']))
      {
        $name=$_REQUEST['name'];
        $password=$_REQUEST['password'];
        $enc_pass=md5($password);
        
        $where=array("name"=>$name,"password"=>$enc_pass);
        $run=$this->select_where('register',$where);
        $chk=$run->num_rows; // all cond true or false by rows
        if($chk==1) // 1 means true
        {

          $fetch=$run->fetch_object(); 
          $reg_id =$fetch->reg_id;            
           $name=$fetch->name;
          
            
             $_SESSION['reg_id']=$reg_id;
             $_SESSION['name']=$name;


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

      case '/register':
      if(isset($_REQUEST['submit']))
      {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $enc_pass=md5($password);
               
        
        $data=array("name"=>$name,"email"=>$email,"password"=>$enc_pass);
        $res=$this->insert('register',$data);
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
      case '/ph_logout':
      unset($_SESSION['name']);
      unset($_SESSION['reg_id']);
      echo "<script> alert('Logout Success'); 
      window.location='index';
      </script>";
      
      break;

  }  

  }      
}
$obj= new control;

?>