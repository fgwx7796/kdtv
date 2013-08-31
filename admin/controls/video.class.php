<?php
	class Video {
		function add(){
			$video=D("video");
			$file = PATH."/public/uploads/video/{$_POST["url"]}";
			$file = iconv("utf-8", "gbk", $file);
			$_POST["ltime"] = time();
			$_POST["aid"] = $_SESSION["aid"];
			$_POST["url"] = $GLOBALS["public"]."uploads/video/{$_POST["url"]}";
			$rand=rand(1,100);
			if (file_exists($file)) {
				$_POST["picurl"] = $GLOBALS["public"]."uploads/images/".$this->upload();
				if ($video->insert()) {
					$this->success("添加视频成功！", 3, "index/video/{$rand}");	
				}else {
					$this->error($video->getMsg(), 5);
				}
			}else {
			$this->error("添加视频失败，文件不存在", 5);
			}
		}
		function mod(){
			$video = D("video");
			if (isset($_POST["submod"])) {
				$file = PATH."/public/uploads/video/{$_POST["url"]}";
				$file = iconv("utf-8", "gbk", $file);
				$_POST["mtime"] = time();
				$_POST["aid"] = $_SESSION["aid"];
				$_POST["url"] = $GLOBALS["public"]."uploads/video/{$_POST["url"]}";
				$rand=rand(1,100);
				
				if (file_exists($file)) {
					if ($_FILES["picurl"]["error"]>0) {
						$result=$video->query("UPDATE {$video->tabName} set aid=?,title=?,url=?,mtime=?,summary=?,cid=?,top=? WHERE vid=?", "update", array($_POST["aid"], $_POST["title"], $_POST["url"], $_POST["mtime"], $_POST["summary"], $_POST["cid"], $_POST["top"], $_POST["vid"])); 
					}else {
						$_POST["picurl"] = $GLOBALS["public"]."uploads/images/".$this->upload();
						$result=$video->query("UPDATE {$video->tabName} set aid=?,title=?,url=?,picurl=?,mtime=?,summary=?,cid=?,top=? WHERE vid=?", "update", array($_POST["aid"], $_POST["title"], $_POST["url"], $_POST["picurl"], $_POST["mtime"], $_POST["summary"], $_POST["cid"], $_POST["top"], $_POST["vid"])); 
					}
					
					p($result);
					if ($result) {
						$this->success("修改视频成功！", 3, "index/video/{$rand}");
					}else {
						$this->error("修改视频失败！", 5);
					} 
				}else {
					$this->error("视频文件不存在", 5);
					
				}
			}else {
			$col = D("columns");
			$cols = $col->select();
			$this->assign("cols", $cols);

		
			
			$date = $video->where($_GET["vid"])->find();
			$date["url"] = str_replace(VIDEO_PATH, "", $date["url"]);
			$this->assign("video", $date);
			$this->display();
			}
		}

		function del(){
			$video=D("video");
			if ($video->delete($_GET[vid])) {
				$this->success("删除视频成功！", 3, "index/video/{$rand}");	
			}else {
				$this->error($video->getMsg(), 5);
			}
			
		}

		function videolist(){
			$video=D("video");

			$num=$video->videonum();	//获取视频总数；
			$page=new Ajaxpage($num, 5);
			$videolist=$video->limit($page->limit)->order("ltime desc")->select();		//获取所有视频；
		
		
			$this->assign("fpage", $page->fpage());
			$this->assign("video", $videolist);
			$this->display();		
		}
		
		private	function upload(){
			$up = new FileUpload();
			$up->set("path", PATH."/public/uploads/images")
				->set("maxSize", 1024*1024)
				->set("allowType", array("png", "jpg", "gif"))
				->set("israndname", true)
				->set("thumb", array("width"=>630));
			if ($up->upload("picurl")) {	
				return $up->getFileName();
			}else {
				$this->error("上传图片失败，请重新上传！", 5);
			}
		}
	}
