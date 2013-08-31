<?php
	class Wall {
		function add(){
			$wall=D("walls");
			$_POST["isshow"] = $_POST["isshow"] ==on ? 1:0;
			$_POST["strtime"] = strtotime($_POST["strtime"]);
			$_POST["stptime"] = strtotime($_POST["stptime"]);
			$result = $_POST["stptime"] - $_POST['strtime'];
			if ($wall->add() && $result > 0) {
				$this->success("添加公告成功", 3, "index/wall");
				
			}else {
				$this->error("添加公告失败，请重新添加", 3, "index/wall");
			}
		}
		function mod(){
			$wall = D("walls");
			$rand = rand(1, 100);
			if (isset($_POST["sub"])) {
				$_POST["isshow"] = $_POST["isshow"] ==on ? 1:0;
				$_POST["strtime"] = strtotime($_POST["strtime"]);
				$_POST["stptime"] = strtotime($_POST["stptime"]);
				$result = $_POST["stptime"] - $_POST['strtime'];
				if ($result > 0) {
					if ($wall->update()) {
						$this->success("修改公告成功", 3, "index/wall/{$rand}");
					}else {
						$this->error("修改公告失败，请重新修改", 3);
					}
				}else {
					$this->error("时间设置有误！", 3);
				}
			}else {
				$date = $wall->where($_GET["nid"])->find();
				$this->assign("wall", $date);
				$this->display();
			}
		}
		function del(){
			$rand = rand(1,100);
			$wall=D("walls");
			if ($wall->delete($_GET["wid"])) {
				$this->success("删除频道成功！", 3, "index/wall/{$rand}");	
			}else {
				$this->error("删除失败，请重试", 5);
			}
		}
		function walllist(){
			$wall = D("walls");
			$num = $wall->total();
			$page = new Ajaxpage($num, 10);
			$date = $wall->limit($page->limit)->order("wid desc")->query("SELECT wid,content,username,ctime FROM `walls`, `users` WHERE `walls`.uid=`users`.uid", "select", "");

			$this->assign("fpage", $page->fpage());	
			$this->assign("wall", $date);
			$this->display();
		}
	}
