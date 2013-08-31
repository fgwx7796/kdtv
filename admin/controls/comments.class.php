<?php
/**
 * 模型
 *
 * @packaged default
 * @author Marvin
 **/

class  Comment{
	function add(){
		$com=D("comtents");
		$_POST["ctime"]=time();
		$_POST["uid"]=$_SESSION["uid"];
		$_POST["vid"]=$_GET["vid"];
		if ($com->insert()) {
			$this->success("发布评论成功!", 2);
		}else{
			$this->error($video->getMsg(), 5);
		}
	}

	function del(){
		$com=D("comtents");
		if ($com->delete()) {
			$this->success("删除评论成功!", 2);
		}else{
			$this->error($video->getMsg(), 5);
	}
}
