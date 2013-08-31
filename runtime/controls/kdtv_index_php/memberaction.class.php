<?php
	/**
	 * 评论控制器
	 **/
	class MemberAction extends Common {
		
		function index(){
			$this->assign("date", $date);
            $this->display("public/header");
            $this->display();
            $this->display("public/footer");

		}
        

	}

