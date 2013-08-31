<?php
/**
 * 
 **/
class Member{
	
	function add(){
		$mem = D("members");
		
		if (isset($_POST["subpart"])) {
			$pt = D("parts");

			if ($pt->insert()) {
				$this->success("添加部门成功", 3, "index/member");
			}else {
				$this->error("添加部门失败，请重新添加", 3);
			}
		}else {
			$_POST["time"] = time();
			$_POST["face"] = $GLOBALS["public"]."uploads/faces/".$this->upload();
			if($mem->insert()) {
				$this->success("添加成员成功", 3, "index/member");
			}else {
				$this->error("添加成员失败，请重新添加", 3);
			}
		}
	}

	function mod(){
			if ($notice->update()) {
				$this->success("修改成员成功", 3, "index/member");
				
			}else {
				$this->error("修改成员失败，请重新修改", 3, "index/member/mod");
			}	
	}
	function del (){
		$rand = rand(1,100);
		$mem=D("members");
		if ($mem->delete($_GET["mid"])) {
			$this->success("删除成员成功！", 3, "index/member/{$rand}");	
		}else {
			$this->error("删除失败，请重试", 5, "index/member/{$rank}");
		}
	}

	function memlist(){
			$mem = D("members");
			$num = $mem->total();
			$page = new Ajaxpage($num, 10);
			$date = $mem->limit($page->limit)->order("mid desc")->query("SELECT `mid`, `mname`, `time`, `wname`, `pname` FROM `works`, `members`, `parts` WHERE `parts`.pid=`members`.pid and `works`.wid=`members`.wid", "select", "");
			$this->assign("fpage", $page->fpage());	
			$this->assign("mem", $date);
			$this->display();
	}
	private	function upload(){
			$up = new FileUpload();
			$up->set("path", PATH."/public/uploads/faces")
				->set("allowType", array("png", "jpg", "gif"))
				->set("israndname", true)
				->set("thumb", array("width"=>150, "height"=>200));
			if ($up->upload("face")) {	
				return $up->getFileName();
			}else {
				$this->error("上传图片失败，请重新上传！", 5);
			}
		}

}
