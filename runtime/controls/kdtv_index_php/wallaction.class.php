<?php
	/**
	 * 评论控制器
	 **/
	class WallAction extends Common {
		
		function walllist(){
			$wall = D("walls");
			$num = $wall->total();
			$page=new Ajaxpage($num, 2);
			$walls = $wall->order("ctime desc")->query("SELECT alias, faceurl2 as face, content, ctime FROM walls, users WHERE walls.uid=users.uid LIMIT {$page->limit}", "select", "");
			$this->assign("fpage", $page->fpage());
			$this->assign("wall", $walls);
			$this->display();
		}
		function add(){
			$wall = D("walls");

			$_POST["ctime"] = time();
			$_POST["uid"] = $_SESSION["uid"];
			$rand = rand();
			if(strtoupper($_POST["code"]) != $_SESSION["code"]){
				$this->error("验证码输入不正确", 3, "");
			}
			if ($wall->insert()) {
				$this->success("留言成功!", 2, "index/index?{$rand}");
			}else{
				$this->error($user->getMsg(), 5);
			}

		}

		function code(){
			echo new Vcode();
		}


	}

