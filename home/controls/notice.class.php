<?php
class Notice{
	function index(){

		$this->display("public/header");
		$this->display();
		$this->display("public/footer");

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
	function code(){
		echo new Vcode();
	}
}
