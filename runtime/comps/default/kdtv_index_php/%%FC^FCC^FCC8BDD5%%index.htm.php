<?php /* Smarty version 2.6.18, created on 2013-08-30 16:06:09
         compiled from notice/index.htm */ ?>
<div class="center_content_pages">
	<div class="pages_banner">公告列表</div>
	<div class="right_about2">
		
		<div id="fpage" class="">
				无公告
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
	setPage("<?php echo $this->_tpl_vars['app']; ?>
/notice/noticelist?page=1");
</script>