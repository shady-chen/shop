$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});



//首页tab切换
function show(n){
	var tab = document.getElementById("tab");
	var allLi = tab.getElementsByTagName("li");  //获取id为tab的div下的所有li标签
	var allDiv = tab.getElementsByTagName("div");
		
	var len = allDiv.length; //获取数组长度
	
	
	for(var i=0;i<len;i++){
		allDiv[i].style.display = "none"; //隐藏元素并且不占用空间
		allLi[i].style.color = "black";
		//allLi[i].style.border = "1px";
		allLi[i].style.fontWeight = "normal";  //恢复默认
		allLi[i].style.background = "white";
	}
	
	allDiv[n].style.display = "block";
	allLi[n].style.color = "white";
	//allLi[n].style.borderBottom = "0px";
	allLi[n].style.fontWeight = "bold";
	allLi[n].style.background = "rgb(280,68,0)";
}


function plus(){
	document.getElementById("num").value ++;
}
function minus(){
	var a = document.getElementById("num").value;
	if(a <= 0){
		alert("操作不合理");
	}else{
		a--;
	}
	document.getElementById("num").value = a;
}


//返回顶部
 window.onscroll = function () {
    if (document.documentElement.scrollTop + document.body.scrollTop > 200) {
        document.getElementById("scrollto").style.display = "block";
    }
    else {
        document.getElementById("scrollto").style.display = "none";
    }
}

//header部分搜索框
	function search(){
		var search = document.getElementById("search").value;
		window.location.href = "/index.php/Goods/goodslist/search/"+search;
	}


