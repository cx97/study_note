<?php


class cx{

	public function db(){		
		$con=$this->contact();
		$this->close($con);
	}

	//sql登入验证
	public function login($username,$password){
		$con=$this->contact();
		$sql="SELECT * FROM user where Account='".$username."' and Password='".$password."'";
		$res=mysqli_query($con,$sql);
		$rows=mysqli_num_rows($res);
		if($rows==1){
			return true;
		}
		return false;
		$this->close($con);
	}

	//获取content表内容，以二维数组返回，标签为id
	public function show(){
		$content=array();
		$con=$this->contact();
		mysqli_query($con,"set names 'utf8'");
		$sql="SELECT * FROM content order by date desc";
		$res=mysqli_query($con,$sql);
		$rows_num=mysqli_num_rows($res);
		for($i=0;$i<$rows_num;$i++){
			$rows=mysqli_fetch_object($res);
			$content[$i]=array($rows->id,$rows->witer,$rows->title,$rows->content,$rows->date);
		}
		return $content;
		$this->close($con);
	}

	public function addcontent($witer,$title,$content){
		$con=$this->contact();
		mysqli_query($con,"set names 'utf8'");
		$sql="INSERT INTO content (witer,title,content,date) values ('".$witer."','".$title."','".$content."','".date('Y-m-d h:i:s')."')";
		mysqli_query($con,$sql);
		$res=mysqli_affected_rows($con);
		if($res==1){
			echo "add ok";
		}



		$this->close($con);
	}

	private function contact(){
		$con=mysqli_connect("localhost","root","","cx");
		if(!$con){
			die(mysqli_error());
		}
		return $con;
	}

	private function close($con){
		$close=mysqli_close($con);
		if(!$close){
			die(mysqli_error());
		}
	}

}

