<?php
/**
 * 视频模型
 *
 * @packaged default
 * @author Marvin
 * @function videonum upload videolist
 **/

class Video {
	//返回视频总数；
	function videonum(){
		$video=D("video");
		$num=$video->total();
		return $num;
	}
/*function upload(){
		$video=D("video");
		$_POST["ltime"]=time();
		$_POST["aid"]=$_SESSION["aid"];
		return $video->insert();
	}
 */	
	//获取视频列表
	function videolist($cid){
		$video=D("video");
		if (isset($cid)) {
			$result=$video->where(array("cid"=>$cid))->select();	
		}else {
			$result=$video->select();
		}
		return $result;
	}
}
