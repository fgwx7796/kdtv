<?php
class VideoAction extends Common {
	function index(){
		$video = D("video");
		$date = $video->where(array("vid"=>$_GET["vid"]))->select();

		$this->assign("date", $date);
		$this->display("public/header");
		$this->display();
		$this->display("public/footer");
	}

	function player(){
		$video = D("video");
		$vd = $video->where(array("vid"=>$_GET['vid']))->find();
		$comment = D("comments");
		$coms = $comment->order("ctime desc")->query("SELECT userName, faceurl2 as face, content, ctime FROM comments, users WHERE comments.vid={$_GET['vid']} AND users.uid = comments.uid", "select", "");

		$this->assign("video", $vd);
		$this->assign("comment", $coms);
		$this->display("public/header");
		$this->display();
		$this->display("public/footer");
	}

	function videolist(){
			$video=D("video");

			$num=$video->where(array("cid"=>$_GET['cid']))->total();
			$page=new Ajaxpage($num, 12);
			$videolist=$video->limit($page->limit)->where(array("cid"=>$_GET['cid']))->order("ltime desc")->select();
	
			$this->assign("fpage", $page->fpage());
			$this->assign("video", $videolist);
			$this->display();		
	}
	function videolistindex(){
			$video=D("video");

			$videolist=$video->limit(0, 6)->where(array("cid"=>$_GET['cid']))->order("ltime desc")->select();

			$this->assign("video", $videolist);
			$this->display("videolist");		
	}
	function recommend(){
		$video=D("video");

		$videolist=$video->limit(0, 5)->where(array("cid"=>$_GET['cid']))->order("good desc")->select();

		$this->assign("video", $videolist);
		$this->display();
	}
	function code(){
		echo new Vcode();
	}
}
