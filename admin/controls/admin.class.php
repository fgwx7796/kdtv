<?php
	class Admin extends Action {
	
		function login(){
			$this->display();
		}

		function islogin(){
			P($_POST);
			if($_POST["adminname"]=="" || $_POST["passwd"]==""){
				$this->error("用户名和密码不能为空!", 3, "login");
			}
	
			if(strtoupper($_POST["code"]) != $_SESSION["code"]){
				$this->error("验证码输入不正确", 3, "login");
			}
		
			$user=D("admins");

			$data=$user->field("aid, adminname,passwd,rankid")->where(array("adminname"=>$_POST["adminname"],"passwd"=>md5($_POST["passwd"])))->find();
			if($data){
				$_SESSION=$data;
				$_SESSION["adminIsLogin"]=true;
				$this->redirect("index/index");
			}else{
				$this->error("用户登录账号用误", 3, "login");
			}
			
		}

		function islogout(){
			$username=$_SESSION["username"];

			$_SESSION=array();

			if(isset($_COOKIE[session_name()])){
				setCookie(session_name(), '', time()-3600, '/');
			}

			session_destroy();

			$this->success("再见{$username}!", 3, "login");
		}

		function code(){
			echo new Vcode();
		}

		function reg(){
			$this->display();
		}

		function insert(){
			$user=D("admins");
			
			$_POST["passwd"]=md5($_POST["passwd"]);
			$_POST["repasswd"]=md5($_POST["repasswd"]);
			P($_POST);
			if($user->insert()){
				$this->success("用户注册成功!", 2, "login");
			}else{
				$this->error($user->getMsg(), 5, "reg");
			}
		}
		function del(){
			$user=D("admins");
			$result=$user->where(array("aid"=>$_GET["aid"]))->delete();
			if($result){
				$this->success("用户删除成功!");
			}else{
				$this->error($user->getMsg());
			}
		}

		function update(){
			$user=D("admins");
			$result=$user->update();
			if($result){
				$this->success("用户修改成功!");
			}else{
				$this->error($user->getMsg());
			}
		}
	}
