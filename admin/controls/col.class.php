<?php
	class Col {
		function add(){
			$col=D("columns");
			if ($col->insert()) {
				$this->success("添加频道成功！", 3, "index/col/{$rand}");	
			}else {
				$this->error($col->getMsg(), 5);
			}
		}
		function mod(){
			$col = D("columns");
			$rand = rand(1,100);
			if (isset($_POST["submod"])) {
				if ($col->query("UPDATE {$col->tabName} set cname=?,crank=? WHERE cid=?", "update", array("{$_POST[cname]}", "{$_POST[crank]}", "{$_POST[cid]}"))) {
					$this->success("修改频道成功！", 3, "index/col/{$rand}");	
				}else {
					$this->error($col->getMsg(), 5);
				}
			}
			$date = $col->where($_GET["cid"])->find();
			$this->assign("cols", $date);
			$this->display();
		}

		function del(){
			$rand = rand(1,100);
			$col=D("columns");
			if ($col->delete($_GET[cid])) {
				$this->success("删除频道成功！", 3, "index/col/{$rand}");	
			}else {
				$this->error($col->getMsg(), 5);
			}
		}

		function collist(){
			$col=D("columns");
			$collists=$col->order("crank asc")->select();
			$this->assign("col", $collists);
			$this->display();		
		}
	}
