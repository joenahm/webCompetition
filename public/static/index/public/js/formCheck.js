function setSuccess(obj){
	obj.parents(".has-feedback").attr("class","form-group has-feedback has-success");
	obj.nextAll(".glyphicon").attr("class","glyphicon form-control-feedback glyphicon-ok");
	obj.nextAll(".help-block").text("");
}

function setWarning(obj, msg){
	obj.parents(".has-feedback").attr("class","form-group has-feedback has-warning");
	obj.nextAll(".glyphicon").attr("class","glyphicon form-control-feedback glyphicon-warning-sign");
	obj.nextAll(".help-block").text(msg);
}

function setError(obj, msg){
	obj.parents(".has-feedback").attr("class","form-group has-feedback has-error");
	obj.nextAll(".glyphicon").attr("class","glyphicon form-control-feedback glyphicon-remove");
	obj.nextAll(".help-block").text(msg);
}

function checkPhone(phoneObj){
	var status;
	if( isNaN(phoneObj.val()) ){
		status = false;
		setError(phoneObj,"电话号码必须为数字！");
	}else if( phoneObj.val().length < 7 ){
		status = false;
		setWarning(phoneObj,"电话号码不能短于7位！");
	}else{
		status = true;
		setSuccess(phoneObj);
	}

	return status;
}

function checkUsername(usernameObj){
	var status;
	if( usernameObj.val().length > 25 || usernameObj.val()=="" ){
		status = false;
		setWarning(usernameObj,"用户名不能长于25位且不能为空！");
	}else if( !usernameObj.val().match("^[0-9a-zA-z-_]+$") ){
		status = false;

		setError(usernameObj,"用户名不能有字母、数字、下划线之外的字符！");
	}else{
		status = true;
		setSuccess(usernameObj);
	}

	return status;
}

function checkPassword(passwordObj){
	var status;
	if( passwordObj.val().length > 25 || passwordObj.val()=="" ){
		status = false;
		setError(passwordObj,"用户名不能长于25位且不能为空！");
	}else{
		status = true;
		setSuccess(passwordObj);
	}

	return status;
}

function checkUsertype(usertypeObj){
	var radioArr = usertypeObj;
	var status = false;
	for( var i = 0 ; i < radioArr.length ; i++ ){
		if( radioArr.eq(i).children("input").is(":checked") ){
			status = true;
		}
	}

	if( status ){
		setSuccess(usertypeObj);
	}else{
		setWarning(usertypeObj,"请选择一种用户类型！");
	}

	return status;
}

function checkSignUp(phone, username, password, usertype){
	var status = checkPhone(phone)
	&& checkUsername(username)
	&& checkPassword(password)
	&& checkUsertype(usertype);

	return status;
}

function checkSignIn(username, password, usertype){
	var status = checkUsername(username)
	&& checkPassword(password)
	&& checkUsertype(usertype);

	return status;
}

function changeUserMode(dataBack, type){
	if( dataBack.status ){
		$("#signInUpPanel").hide(100);
		if( dataBack.usertype == "student" ){
			$(".username-stage").eq(0).html(dataBack.username);
			$("#userToggle").show(200);
		}else if( dataBack.usertype == "merchant" ){
			$(".username-stage").eq(1).html(dataBack.username);
			$("#merchantToggle").show(200);
		}
	}else{
		$("#username-stage").html("");
		$("#signInUpPanel").show();
		$("#userToggle").hide(100);
		$("#merchantToggle").hide(100);
		if( type == "login" ){
			$("#statusBack").modal('show');
			$("#statusBack").find("#statusBackModalLabel").text("登录");
			$("#statusBack").find(".glyphicon").attr("class","glyphicon glyphicon-remove");
			$("#statusBack").find("#msgBack").text("登录失败！");
		}else if( type == "signup" ){
			$("#statusBack").modal('show');
			$("#statusBack").find("#statusBackModalLabel").text("注册");
			$("#statusBack").find(".glyphicon").attr("class","glyphicon glyphicon-remove");
			$("#statusBack").find("#msgBack").text("注册失败，用户名已存在！");
		}
	}
}

function getUserMode(userInfo, type){
	$.ajax({
		url:'/p/webCompetition/public/index.php/index/index/login',
		type:'POST',
		async:true,
		data:{
			username:userInfo['username'],
			password:userInfo['password'],
			usertype:userInfo['usertype']
		},
		dataType:'json',
		success:function(data){
			changeUserMode(data,type);
		},
		error:function(){
			$("#statusBack").modal('show');
			$("#statusBack").find("#statusBackModalLabel").text("登录");
			$("#statusBack").find(".glyphicon").attr("class","glyphicon glyphicon-remove");
			$("#statusBack").find("#msgBack").text("登录失败！");
		}
	});
}

function refreshUserMode(){
	$.ajax({
		url:'/p/webCompetition/public/index.php/index/index/refreshUserMode',
		type:'POST',
		async:true,
		dataType:'json',
		success:function(data){
			changeUserMode(data,"refresh");
		}
	});
}

function signUp(){
	$("#phone").blur(function(){
		checkPhone($("#phone"));
	});

	$("#su-username").keydown(function(){
		checkPhone($("#phone"));
	});

	$("#su-username").blur(function(){
		checkPhone($("#phone"));
		checkUsername($("#su-username"));
	});

	$("#su-password").keydown(function(){
		checkPhone($("#phone"));
		checkUsername($("#su-username"));
	});

	$("#su-password").blur(function(){
		checkPhone($("#phone"));
		checkUsername($("#su-username"));
		checkPassword($("#su-password"));
	});

	$("#signUpBtn").click(function(){
		var status = checkSignUp($("#phone"),$("#su-username"),$("#su-password"),$(".usertype"));

		if( status ){
			var info = [];
			info['phone'] = $("#phone").val();
			info['username'] = $("#su-username").val();
			info['password'] = $("#su-password").val();
			for( var i = 0 ; i < $(".usertype").children("input").length ; i++ ){
				var itemObj = $(".usertype").children("input").eq(i);
				if( itemObj.is(":checked") ){
					info['usertype'] = itemObj.val();
				}
			}

			$("#signUpModal").modal('hide');

			$.ajax({
				url:'/p/webCompetition/public/index.php/index/index/datareturn',
				type:'POST',
				async:true,
				data:{
					phone:info['phone'],
					username:info['username'],
					password:info['password'],
					usertype:info['usertype']
				},
				dataType:'json',
				success:function(data){
					$("#statusBack").modal('show');
					$("#statusBack").find("#statusBackModalLabel").text("注册");
					$("#statusBack").find(".glyphicon").attr("class","glyphicon glyphicon-ok");
					$("#statusBack").find("#msgBack").text("注册成功！");
					changeUserMode(data,"signup");
				},
				error:function(){
					$("#statusBack").modal('show');
					$("#statusBack").find("#statusBackModalLabel").text("注册");
					$("#statusBack").find(".glyphicon").attr("class","glyphicon glyphicon-remove");
					$("#statusBack").find("#msgBack").text("注册失败！");
				}
			});
		}
	});

}

function signIn(){
	$("#signInBtn").click(function(){
		var status = checkSignIn($("#si-username"),$("#si-password"),$(".si-usertype"));

		if( status ){
			var info = [];
			info['username'] = $("#si-username").val();
			info['password'] = $("#si-password").val();
			for( var i = 0 ; i < $(".si-usertype").children("input").length ; i++ ){
				var itemObj = $(".si-usertype").children("input").eq(i);
				if( itemObj.is(":checked") ){
					info['usertype'] = itemObj.val();
				}
			}

			$("#signInModal").modal('hide');
			getUserMode(info,"login");
		}
	});
}

function logOut(){
	var func = function(){
		var outInfo = [];
		outInfo['username'] = null;
		outInfo['password'] = null;
		outInfo['usertype'] = null;
		getUserMode(outInfo,"logou");
		refreshUserMode();
	};
	$(".logOut").eq(0).click(func);
	$(".logOut").eq(1).click(func);
}

$(function(){
	signUp();
	signIn();
	logOut();
});
/* 表单验证要求DOM结构丝毫不得改变 */
