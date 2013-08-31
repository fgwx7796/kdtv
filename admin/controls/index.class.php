<?php
	class Index {
		function demo(){
			$_POST["uid"] = "3";
			$_POST["ctime"] = time();
			
			$wall = D("walls");
			$rel = $wall->insert($_POST, 1, 1);
			if($rel){
				p($_POST);
			}else {
				$this->error($wall->getMsg(), 5);	
			}
					
		
		}
		function index(){
			$video=D("video");
			$num=$video->videonum();	//获取视频总数；

			$user=D("users");
			$usernum=$user->total();
			
			$this->assign("usernum", $usernum);
			$this->assign("videonum", $num);	
			$this->display("public/header_admin");
			$this->display();		
			$this->display("public/footer_admin");
		}		
		
		function notice(){
			$this->display("public/header_admin");
			$this->display();		
			$this->display("public/footer_admin");
		}
		function col(){
			$this->display("public/header_admin");
			$this->display();		
			$this->display("public/footer_admin");
		}
		function video(){
			$col = D("columns");
			$cols = $col->select();
			$this->assign("cols", $cols);
			$this->display("public/header_admin");
			$this->display();		
			$this->display("public/footer_admin");

		}
		


		function member(){
			$wk = D("works");
			$pt = D("parts");
			$wks = $wk->select();
			$pts = $pt->select();
			$this->assign("wk", $wks);
			$this->assign("pt", $pts);
			$this->display("public/header_admin");
			$this->display();		
			$this->display("public/footer_admin");
		}

		function wall(){
			$this->display("public/header_admin");
			$this->display();		
			$this->display("public/footer_admin");
		}
		function user(){
			$users = D("users");
			$date = $users->select();
			$this->assign("users", $date);
			$this->display("public/header_admin");
			$this->display();		
			$this->display("public/footer_admin");
		}
		function code(){
			echo new Vcode();
		}
	}
