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
	var status;
	for( var i = 0 ; i < radioArr.length ; i++ ){
		alert(radioArr.eq(i).val());
	}
}

$(function(){
	$("#signInBtn").click(function(){
		var status = checkPhone($("#phone")) && checkUsername($("#username")) && checkPassword($("#password")) && checkUsertype($(".usertype"));

		if( status ){
			alert("验证成功！");
		}
	});
});