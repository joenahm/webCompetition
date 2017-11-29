function setBackTop(){
	$(document).scroll(function(){	
		if( $(document).scrollTop() > 500){
			$("#backTop").show(100);
		}else{
			$("#backTop").hide(100);
		}
	});
	$("#backTop").click(function(){
		var backTopInterval = setInterval(backTop,0);
		var scrollTop = $(document).scrollTop();
		function backTop(){
			scrollTop -= 20;
			$(document).scrollTop(scrollTop);

			if( scrollTop <= 0 ){
				clearInterval(backTopInterval);
			}
		}
	});
}

function setDate(){
	for( var i = 0 ; i < $(".date").length ; i++ ){
		var time_stamp = parseInt($(".date").eq(i).html());
		var date = new Date();
		date.setTime(time_stamp*1000);
		$(".date").eq(i).html(date.toLocaleString());
	}
}

function checkMsg(){
	$("#messageBtn").click(function(){
		
	});
}


$(function(){
	setBackTop();

	for( var i = 0 ; i < $("form").length ; i++ ){
		$("form").get(i).onsubmit = function(){ //阻止表单提交
			return false;
		}
	}

	$('[data-toggle="tooltip"]').tooltip();

	//刷新登录状态
	refreshUserMode();
	//设置时间格式
	setDate();
	//查看消息
	checkMsg();
});	