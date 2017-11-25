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

function checkSignIn(phone, username, password, usertype){
	var status = checkPhone(phone) 
	&& checkUsername(username) 
	&& checkPassword(password) 
	&& checkUsertype(usertype);

	return status;
}

function checkSignUp(username, password){
	var status = checkUsername(username)
	&& checkPassword(password);

	return status;
}

function changeUserMode(dataBack){
	if( dataBack.status ){
		$("#username-stage").html(dataBack.username);
		$("#signInUpPanel").hide(100);
		$("#userToggle").show(200);
	}else{
		$("#username-stage").html("");
		$("#signInUpPanel").show();
		$("#userToggle").hide(100);
	}
}

function getUserMode(userInfo){
	$.ajax({
		url:'/p/webCompetition/public/index.php/index/index/login',
	    type:'POST',
	    async:true,
	    data:{
	        username:userInfo['username'],
	        password:userInfo['password']
	    },
	    dataType:'json',
	    success:function(data){
			changeUserMode(data);
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
			changeUserMode(data);
	    }
	});
}

function signIn(){
	$("#phone").blur(function(){
		checkPhone($("#phone"));
	});

	$("#si-username").keydown(function(){
		checkPhone($("#phone"));
	});

	$("#si-username").blur(function(){
		checkPhone($("#phone"));
		checkUsername($("#si-username"));
	});

	$("#si-password").keydown(function(){
		checkPhone($("#phone"));
		checkUsername($("#si-username"));
	});

	$("#si-password").blur(function(){
		checkPhone($("#phone"));
		checkUsername($("#si-username"));
		checkPassword($("#si-password"));
	});

	$("#signInBtn").click(function(){
		var status = checkSignIn($("#phone"),$("#si-username"),$("#si-password"),$(".usertype"));

		if( status ){
			var info = [];
			info['phone'] = $("#phone").val();
			info['username'] = $("#si-username").val();
			info['password'] = $("#si-password").val();
			for( var i = 0 ; i < $(".usertype").children("input").length ; i++ ){
				var itemObj = $(".usertype").children("input").eq(i);
				if( itemObj.is(":checked") ){
					info['usertype'] = itemObj.val();
				}
			}
			
			$("#signInModal").modal('hide');

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
					changeUserMode(data);
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

function signUp(){
	$("#signUpBtn").click(function(){
		var status = checkSignUp($("#su-username"),$("#su-password"));

		if( status ){
			var info = [];
			info['username'] = $("#su-username").val();
			info['password'] = $("#su-password").val();

			$("#signUpModal").modal('hide');
			getUserMode(info);
		}
	});
}

function logOut(){
	$("#logOut").click(function(){
		var outInfo = [];
		outInfo['username'] = null;
		outInfo['password'] = null;
		getUserMode(outInfo);
		refreshUserMode();
	});
}

$(function(){
	signIn();
	signUp();
	logOut();
});
/* 表单验证要求DOM结构丝毫不得改变 */