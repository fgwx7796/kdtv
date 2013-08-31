<?php
	class User {
		function add(){
			
		}
		function mod(){
			$user = D("users");
			$rand = rand(1,100);
			$uid = $_GET["uid"];
			$passwd = md5("000000");
			if ($user->query("UPDATE {$user->tabName} set passwd=? WHERE uid=?", "update", array($passwd, $uid))) {
				$this->success("重置密码成功！", 3, "index/user/{$rand}");
			}else {
				$this->error("重置密码失败！密码或许已经重置", 3);
			}

		}

		function del(){
			$user = D("users");
			$rand = rand(1,100);
			if ($user->delete($_GET["uid"])) {
				$this->success("删除用户成功！", 3, "index/user/{$rand}");	
			}else {
				$this->error("删除用户失败，请重新操作", 5);
				
			}
			
		}

		function userlist(){
			$user=D("users");

			$num=$user->total();	//获取视频总数；
			$page=new Ajaxpage($num, 5);
			$userlist=$user->limit($page->limit)->order("regtime desc")->select();		//获取所有视频；
		
		
			$this->assign("fpage", $page->fpage());
			$this->assign("user", $userlist);
			$this->display();		
		}
		
		private	function upload(){
			$up = new FileUpload();
			$up->set("path", PATH."/public/uploads/images")
				->set("maxSize", 1024*1024)
				->set("allowType", array("png", "jpg", "gif"))
				->set("israndname", true)
				->set("thumb", array("width"=>100, "height"=>100));
			if ($up->upload("picurl")) {	
				return $up->getFileName();
			}else {
				$this->error("上传图片失败，请重新上传！", 5);
			}
		}
	}
