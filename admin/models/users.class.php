<?php
/**
 * 视频模型
 *
 * @packaged default
 * @author Marvin
 * @function usernum upload userlist
 **/

class Users {
	//返回用户总数；
	function usernum(){
		$user=D("user");
		$num=$user->total();
		return $num;
	}

	//获取用户列表
	function userlist($cid){
		if (isset($cid)) {
			$user=D("user");
			$result=$user->where(array("cid"=>$cid))->select();	
		}else {
			$user=D("user");
			$result=$user->select();
		}
		return $result;
	}
}
