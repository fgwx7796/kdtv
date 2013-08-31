function del(url, id){
	var obj=document.getElementById(id);
	var ajax=Ajax();
	ajax.get(url,function(data){
			obj.innerHTML=data;
		});
}
