<?php /* Smarty version 2.6.18, created on 2013-08-30 16:37:48
         compiled from col/index.htm */ ?>
<div class="center_content_pages">
	<div class="pages_banner"><?php echo $this->_tpl_vars['col']['cname']; ?>
</div>
	<div class="left_content"> 
		<div id="fpage" class="leftbox">
			无视频
		</div>
				
	</div> <!--end of left content-->


	<div class="right_content">
	   <div class="box290">
		<h2>推荐视频</h2>
			<ul class="left_menu" id="recombox">
				
			</ul>
		</div>
	</div>
<div class="clear"></div>
	</div>  

		<script>
		var cache=new Array();
		function setPage(url){
			var obj=document.getElementById("fpage");
			
			if(typeof(cache[url])=="undefined"){
				var ajax=Ajax();

				ajax.get(url,function(data){
						obj.innerHTML=data;
						cache[url]=data;	
					});
			}else{
				obj.innerHTML=cache[url];	
			}	
		}
		function ajaxBox(url, id){
			var obj=document.getElementById(id);
					obj.style.display = "block";
			var ajax=Ajax();
			ajax.get(url,function(data){
					obj.innerHTML=data;
					obj.style.display = "block";
				});
		}
		function ajaxQuery(url){
			var ajax=Ajax();
			ajax.get(url);
		}
		setPage("<?php echo $this->_tpl_vars['app']; ?>
/video/videolist?cid=<?php echo $this->_tpl_vars['col']['cid']; ?>
&page=1");
		ajaxBox("<?php echo $this->_tpl_vars['app']; ?>
/video/recommend?cid=<?php echo $this->_tpl_vars['col']['cid']; ?>
", "recombox");
	</script>
