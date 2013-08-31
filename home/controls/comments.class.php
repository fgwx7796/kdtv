<?php
	/**
	 * 评论控制器
	 **/
	class Comments{
		
		function add(){
			$comment = D("comments");

			$_POST["ctime"] = time();
			$_POST["uid"] = $_SESSION["uid"];
			if(strtoupper($_POST["code"]) != $_SESSION["code"]){
				$this->error("验证码输入不正确", 3, "");
			}
			if ($comment->insert()) {
				$this->success("留言成功!", 2);
			}else{
				$this->error($comment->getMsg(), 5);
			}

		}

		function code(){
			echo new Vcode();
		}


	}

