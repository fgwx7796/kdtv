<?php
	class Common extends Action {
		function init(){
			if(!(isset($_SESSION["adminIsLogin"]) && $_SESSION["adminIsLogin"]==true)){
				$this->redirect("admin/login");
			}
		}		
	}
