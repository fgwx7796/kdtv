<?php
class User extends Action {
		function islogin(){
			if($_POST["username"]=="" || $_POST["passwd"]==""){
				$this->error("用户名和密码不能为空!", 3, "login");
			}
	
			if(strtoupper($_POST["code"]) != $_SESSION["code"]){
				$this->error("验证码输入不正确", 3);
			}
			$_POST["alias"] = $_POST["username"];
		
			$user=D("users");

			$data=$user->field("uid, username, passwd, alias, faceurl1, faceurl2")->where(array("username"=>$_POST["username"],"passwd"=>md5($_POST["passwd"])))->find();
			if(isset($data)){
				$_SESSION=$data;
				$_SESSION["isLogin"]=true;
				$this->success("登录成功！{$_POST['username']}", 3);

			}else{
				$this->error("用户登录账号用误", 3);
			}
			
		}

		function islogout(){
			$username=$_SESSION["username"];

			$_SESSION=array();

			if(isset($_COOKIE[session_name()])){
				setCookie(session_name(), '', time()-3600, '/');
			}

			session_destroy();

			$this->success("再见{$username}!", 3);
		}

		function code(){
			echo new Vcode();
		}

		function reg(){
			$this->display();
		}

		function insert(){
			$user=D("users");
			
			p($_POST);
			if (!isset($_POST["faceurl1"])) {
				$_POST["faceurl1"] = $GLOBALS["public"]."uploads/faces/default1.jpg";
				$_POST["faceurl2"] = $GLOBALS["public"]."uploads/faces/default2.jpg";
			}else {
				$facename = $this->upload();
				$_POST["faceurl1"] = $GLOBALS["public"]."uploads/faces/".$facename;
				$_POST["faceurl2"] = $GLOBALS["public"]."uploads/faces/".$this->face2($facename);
			}

			$_POST["alias"] = $_POST["username"];
			$_POST["passwd"]=md5($_POST["passwd"]);
			$_POST["repasswd"]=md5($_POST["repasswd"]);
			$_POST["regtime"]=time();
			if($user->insert()){
				$this->success("用户注册成功!", 2, "index/index");
			}else{
				$this->error($user->getMsg(), 5, "reg");
			}
		}
		private	function upload(){
			$up = new FileUpload();
			$up->set("path", PATH."/public/uploads/faces")
				->set("maxSize", 1024*1024)
				->set("allowType", array("png", "jpg", "gif"))
				->set("israndname", true)
				->set("thumb", array("width"=>150, "height"=>200));
			if ($up->upload("faceurl1")) {
				return $up->getFileName();
			}else {
				$this->error("上传图片失败，请重新上传！", 5);
			}
		}

		private function face2($facename){
			$face2 = new Image(PROJECT_PATH."public/uploads/faces");
			if ($faceurl = $face2->thumb("$facename", 50, 50, "f2_")) {
				return $faceurl;
			}
		}
	}

