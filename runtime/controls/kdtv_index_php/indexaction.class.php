<?php
	class IndexAction extends Common {
		function index(){
			$video = D("video");
			$videos = $video->where(array("top" =>1))->select();
			$newVideos = $video->order("ltime desc")->limit(0, 9)->select();
		
			$this->assign("topVideo", $videos);	
			$this->assign("newVideo", $newVideos);	

			$this->display("public/header");
			$this->display();		
			$this->display("public/footer");
		}		
		function Col(){
			
		}
	}
