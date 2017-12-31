window.onload = function(){
	document.getElementById("aaa").onclick = function(){ 
		var name = document.getElementById("uname").value;
		var pword = document.getElementById("password").value;
		var aaa = document.getElementById("login");
	   var span = document.getElementById("span");
		if(!name || !pword){
			alert("用户名或密码不能为空");
			return;
		}
		var data = "name="+name+"&pword="+pword;
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
			//	alert(xhr.responseText);
			
				if(xhr.responseText==0){
					span.innerHTML = "用户名或密码错误";
				}else{
					$('#mask').hide();
					$('.window').hide();
					aaa.innerHTML = name+",欢迎您";=
				}
			}
		}
		xhr.open("post","/index.php/Home/Index/index");
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send(data);
	}
}
