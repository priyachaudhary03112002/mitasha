<?php
class model
{
	public $conn="";
	 function __construct(){

	 	

	   $this->conn =new mysqli('localhost','root','','pharmacy');
}
  
   function select($tbl)
   {
   	   $sel="select * from $tbl";
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
   }



    function insert($tbl,$data)
	{
		
		
		$array_key=array_keys($data);
		$col=implode(",",$array_key);
		
		$array_values=array_values($data);
		$val=implode("','",$array_values);
		
		$ins="insert into $tbl($col) values ('$val')";
		$run=$this->conn->query($ins);
		return $run;
	}
	

	
	function select_where($tbl,$where)
	{
		$array_key=array_keys($where);
		$array_values=array_values($where);
		
		$sel="select * from $tbl where 1=1"; // 1=1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $array_key[$i]='$array_values[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
		
	}

	function select_where1($tbl,$where)
	{
		$array_key=array_keys($where);
		$array_values=array_values($where);
		
		$sel="select * from $tbl where CONCAT('book_id', 'cate_name', 'book_name', 'author','qty','price','rack_no') LIKE '%$search%'"; 
		
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $array_key[$i]='$array_values[$i]'";			
			$i++;
		}
		$run=$this->conn->query($sel);
		
		return $run;
		   
	}
		function update_where($tbl,$data,$where)
	{
		$upd="update $tbl set ";
		$darray_key=array_keys($data);
		$darray_values=array_values($data);
		$i=0;
		
		$count=count($data); 
		foreach($data as $d)
		{
			if($count==$i+1)
			{
				$upd.= "$darray_key[$i]='$darray_values[$i]'";
			}
			else
			{
				$upd.= "$darray_key[$i]='$darray_values[$i]',";
				$i++;
			}
		}
		$array_key=array_keys($where);
		$array_values=array_values($where);
		
		$upd.=" where 1=1"; // 1=1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$upd.=" and $array_key[$i]='$array_values[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);
		return $run;

	
}


	function delete_where($tbl,$where)
	{
		$array_key=array_keys($where);
		$array_values=array_values($where);
		
		$del="delete from $tbl where 1=1"; // 1=1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$del.=" and $array_key[$i]='$array_values[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);
		return $run;
		
	}

 }
$obj=new model;



?>