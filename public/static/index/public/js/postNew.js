function sortSelect(){
	var btns = $(".sortitem");
	function binding(btn, data){
		btn.click(function(){
			$("#sortback").text(data);
		});
	}
	for( var i = 0 ; i < btns.length ; i++ ){
		binding(btns.eq(i),btns.eq(i).attr("data"));
	}
}

function postNew(){
	$.ajax({
		url:'/p/webCompetition/public/index.php/index/index/InsertInformation',
		type:'POST',
		async:true,
		data:{
			title:$("#jobtitle").val(),
			salary:$("#salary").val(),
			info:$("#jobinfo").val(),
			isurgent:$("#isurgent").is(":checked"),
			sort:$("#sortback").html()
		},
		dataType:'json',
		success:function(data){
			$("#postBack").modal('show');
			$("#postBack").find("#postBackModalLabel").text("发布兼职");
			$("#postBack").find(".glyphicon").attr("class","glyphicon glyphicon-ok");
			$("#postBack").find("#postmsgBack").text("发布成功！");
			changeUserMode(data,true);
		},
		error:function(){
			$("#postBack").modal('show');
			$("#postBack").find("#postBackModalLabel").text("发布兼职");
			$("#postBack").find(".glyphicon").attr("class","glyphicon glyphicon-remove");
			$("#postBack").find("#postmsgBack").text("发布失败！");
		}
	});
}

$(function(){
	sortSelect();

	$("#postOut").click(function(){
		postNew();
	});
});