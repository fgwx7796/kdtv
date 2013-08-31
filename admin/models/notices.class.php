<?php
/**
 * 公告模型
 *
 * @packaged default
 * @author Marvin
 **/

class Notices {
	function add(){
		$notice=D("notices");
		$_POST["srttime"]=time();
		
		$result=$notice->insert();

		return $result;

	}

	function del(){
		$notice=D("notices");
	}

	function mod(){
		
	}

}
