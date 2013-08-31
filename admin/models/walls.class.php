<?php
/**
 * 留言墙模型
 *
 * @packaged default
 * @author Marvin
 **/
class Walls{
	function add(){
		$wall=D("walls");
		$_POST["uid"]=$_SESSION["uid"];
		$_POST["ctime"]=time();
		$result=$wall->insert();

	}

} // END class 

		
