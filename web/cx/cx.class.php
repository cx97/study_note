<?php
header("content-type:text/html;charset=utf-8");

class cx{

	public function db(){
		
		$con=$this->contact();

		$this->close($con);
	}

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

	public function show(){
		$con=$this->contact();

		$sql="SELECT * FROM user";

		$res=mysqli_query($con,$sql);



		//$rows=mysqli_fetch_row($res);

		//echo $rows[1];

		$rows_num=mysqli_num_rows($res);

		for($i=0;$i<$rows_num;$i++){

			$rows=mysqli_fetch_object($res);

			echo "用户姓名：".$rows->Username."&nbsp;&nbsp;&nbsp;&nbsp;ID：".$rows->Id."<BR>";
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

