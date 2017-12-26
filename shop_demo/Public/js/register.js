
//表单验证
function checkForm(){
	var a = document.getElementById("usernameSpan");
	if(a.innerHTML){
		alert("用户名错误");
		return false;
	}
	 if(document.form.rValue.checked)  
        {
        return true;
        }else{
			alert("您未同意协议");	
			return false;
		}

}

function registUsername(){
	var a = document.getElementById("username").value;
	var b = document.getElementById("usernameSpan");
	var len = a.length;
	if(len == 0){
		b.innerHTML = "用户名不能为空";
	}
	else if(len < 2 || len > 10 ){
		b.innerHTML = "用户名必须是3-10位非空字符";		
	}
	else{
		b.innerHTML = "";	
	}
}


function registPswordTwo(){
	var c = document.getElementById("passwords").value;
	var a = document.getElementById("passwordTwo").value;
	
	var b = document.getElementById("passwordTwoSpan");
	
	

		if(a != c){
			b.innerHTML = "两次输入的密码不同!";
		}else{
			b.innerHTML = "";	
		}
}



	//  密码强度验证部分

//CharMode函数  
//测试某个字符是属于哪一类.  
function CharMode(iN){  
if (iN>=48 && iN <=57) //数字  
return 1;  				   	     //数字类型是1
if (iN>=65 && iN <=90) //大写字母  
return 2;  					     //大写字母类型是2
if (iN>=97 && iN <=122) //小写  
return 4;  						 //小写字母类型是1
else  
return 8; 						//特殊字符是8  
}  

//bitTotal函数  
//计算出当前密码当中一共有多少种模式  
function bitTotal(num){  
modes=0;  
for (i=0;i<4;i++){  
if (num & 1) modes++;  
num>>>=1;  
}
  
return modes;  
}  


//checkStrong函数  
//返回密码的强度级别  
function checkStrong(sPW){  
if (sPW.length<=4)  
return 0; //密码太短  
Modes=0;  
for (i=0;i<sPW.length;i++){  
//测试每一个字符的类别并统计一共有多少种模式.  
Modes|=CharMode(sPW.charCodeAt(i));  
}  

return bitTotal(Modes);  

}  

//pwStrength函数  
//当用户放开键盘或密码输入框失去焦点时,根据不同的级别显示不同的颜色  

function pwStrength(pwd){  
O_color="WHITE";  
L_color="#FF0000";  
M_color="#FF9900";  
H_color="#d65cd7";  
if (pwd==null||pwd==''){  
Lcolor=Mcolor=Hcolor=O_color;  
}  
else{  
S_level=checkStrong(pwd);  
switch(S_level) {  
case 0:  
Lcolor=Mcolor=Hcolor=O_color;  
case 1:  
Lcolor=L_color;  
Mcolor=Hcolor=O_color;  
break;  
case 2:  
Lcolor=Mcolor=M_color;  
Hcolor=O_color;  
break;  
default:  
Lcolor=Mcolor=Hcolor=H_color;  
}  
}  

document.getElementById("strength_L").style.background=Lcolor;  
document.getElementById("strength_M").style.background=Mcolor;  
document.getElementById("strength_H").style.background=Hcolor;  
return;  
} 

//验证电子邮箱
  function registerEmail()
          {
             var temp = document.getElementById("email").value;
             var span = document.getElementById("emailSpan");
             //对电子邮件的验证
            var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
          
          if(!myreg.test(temp)){
                 span.innerHTML = "请输入有效的邮箱地址！";
           }
           else{
            	span.innerHTML = "";
            }
        }
//验证手机号
	function registerPhone(){
		var temp = document.getElementById("phone").value;
        var span = document.getElementById("phoneSpan");
      	 var reg = /^0?1[3|4|5|8][0-9]\d{8}$/;
      	 //13,14,15,18开头的手机号
			 if (!reg.test(temp)){
			      span.innerHTML = "号码格式错误!";
			 }else{
			      span.innerHTML = "";
			 };

	}


window.onload = function(){
	var fm = document.getElementById("register");
   fm.onsubmit = function() {
   }
   
}