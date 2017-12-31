
//更改商品页面 验证表单信息
function checkForm(){
	var type = document.getElementById("gd_type").value;
	var from = document.getElementById("gd_from").value;
	if(type == 'null'){
		alert("请选择商品类型");
		return false;
	}else if(from == 'null'){
		alert("请选择商品产地");
		return false;
	}else{
		return true;
	}
}


//更改商品图片
function changeImg(){
	var img = document.getElementById('img');
	img.style.display = "block";
}