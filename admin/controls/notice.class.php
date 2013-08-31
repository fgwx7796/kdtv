<?php
	class Notice {
		function add(){
			$notice=D("notices");
			$_POST["isshow"] = $_POST["isshow"] ==on ? 1:0;
			$_POST["strtime"] = strtotime($_POST["strtime"]);
			$_POST["stptime"] = strtotime($_POST["stptime"]);
			$result = $_POST["stptime"] - $_POST['strtime'];
			if ($notice->add() && $result > 0) {
				$this->success("添加公告成功", 3, "index/notice");
				
			}else {
				$this->error("添加公告失败，请重新添加", 3, "index/notice");
			}
		}
		function mod(){
			$notice = D("notices");
			$rand = rand(1, 100);
			if (isset($_POST["sub"])) {
				$_POST["isshow"] = $_POST["isshow"] ==on ? 1:0;
				$_POST["strtime"] = strtotime($_POST["strtime"]);
				$_POST["stptime"] = strtotime($_POST["stptime"]);
				$result = $_POST["stptime"] - $_POST['strtime'];
				if ($result > 0) {
					if ($notice->update()) {
						$this->success("修改公告成功", 3, "index/notice/{$rand}");
					}else {
						$this->error("修改公告失败，请重新修改", 3);
					}
				}else {
					$this->error("时间设置有误！", 3);
				}
			}else {
				$date = $notice->where($_GET["nid"])->find();
				$this->assign("notice", $date);
				$this->display();
			}
		}
		function del(){
			$rand = rand(1,100);
			$notice=D("notices");
			if ($notice->delete($_GET["nid"])) {
				$this->success("删除频道成功！", 3, "index/notice/{$rand}");	
			}else {
				$this->error("删除失败，请重试", 5);
			}
		}
		function noticelist(){
			$notice = D("notices");
			$num = $notice->total();
			$page = new Ajaxpage($num, 5);
			$date = $notice->limit($page->limit)->order("nid desc")->select();
			$this->assign("fpage", $page->fpage());	
			$this->assign("notice", $date);
			$this->display();
		}
	}
