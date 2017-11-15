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

function setPopPanel(){
	$("#mask").height($(document).height());

	var panelArr = $(".popPanel");
	for( var i = 0 ; i < panelArr.length ; i++ ){
		panelArr.eq(i).css({"left":(($(document).width()-panelArr.eq(i).width())/2)+"px"});
	}
}

function closePanel(panelName){
	$(panelName).hide(100);
	$("#mask").fadeOut(100);
}

function openPanel(panelName){
	$("#mask").fadeIn(100);
	$(panelName).show(100);
}


$(function(){
	setBackTop();
	setPopPanel();

	$("form").get(0).onsubmit = function(){ //阻止表单提交
		return false;
	}
});	