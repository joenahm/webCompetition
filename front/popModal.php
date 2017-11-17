<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">注册</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group has-feedback">
						<label for="phone" class="col-sm-2 control-label">电话</label>
						<div class="col-sm-10">
							<input type="tel" class="form-control" id="phone" name="phone" placeholder="请输入你的电话号码">	
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label for="si-username" class="col-sm-2 control-label">用户名</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="si-username" name="si-username" placeholder="只能是字母数字下划线, 且必须以字母开头">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label for="si-password" class="col-sm-2 control-label">密码</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="si-password" name="si-password" placeholder="请输入密码">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group has-feedback">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="radio">
								<label class="usertype">
									<input type="radio" name="usertype" value="student"> 我是学生
								</label>
								<label class="usertype">
									<input type="radio" name="usertype" value="merchant"> 我是商家
								</label>
								<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
								<span class="help-block"></span>
							</div>
						</div>
					</div>			
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="signInBtn">注册</button>
					<button type="reset" class="btn">重置</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">登录</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group has-feedback">
						<label for="su-username" class="col-sm-2 control-label">用户名</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="su-username" name="su-username" placeholder="请输入用户名">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label for="su-password" class="col-sm-2 control-label">密码</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="su-password" name="su-password" placeholder="请输入密码">
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
								<span class="help-block"></span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="buttom" class="btn btn-primary" id="signUpBtn">登录</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="public/js/formCheck.js"></script>
<!-- src前边加上__PUBLIC__/index/ -->