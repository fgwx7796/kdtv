<?php
	class Common extends Action {
		function init(){
			$col = D("columns");
			$cols = $col->select();

			$this->assign("cols", $cols);	
		}		
	}
