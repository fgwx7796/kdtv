<?php
	class Col {
		function index(){
			$columns = D("columns");
			$col = $columns->find($_GET["cid"]);

			$this->assign("col", $col);	
			
			$this->display("public/header");
			$this->display();		
			$this->display("public/footer");
		}		
		function Col(){
			
		}
	}
