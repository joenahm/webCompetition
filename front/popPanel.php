<div id="popPanel">
	<div id="mask"></div>
	<div class="panel panel-default popPanel" id="signInPanel">
		<div class="panel-heading">
			<h3 class="panel-title">注册</h3>
		</div>
		<div class="panel-body">
			<form class="form-horizontal">
				<div class="form-group">
					<label for="phone" class="col-sm-2 control-label">电话</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="phone" name="phone" placeholder="请输入你的电话号码">
					</div>
				</div>
				<div class="form-group">
					<label for="username" class="col-sm-2 control-label">用户名</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="username" name="username" placeholder="只能是字母数字下划线, 且必须以字母开头">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">密码</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="radio">
							<label>
								<input type="radio" name="usertype" value="student"> 我是学生
							</label>
							<label>
								<input type="radio" name="usertype" value="merchant"> 我是商家
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">注册</button>
						<button type="reset" class="btn ">重置</button>
						<button class="btn btn-warning" onclick="closePanel('#signInPanel')">取消</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="panel panel-default popPanel" id="signUpPanel">
		<div class="panel-heading">
			<h3 class="panel-title">登录</h3>
		</div>
		<div class="panel-body">
			<form class="form-horizontal">
				<div class="form-group">
					<label for="username" class="col-sm-2 control-label">用户名</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">密码</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">登录</button>
						<button class="btn btn-warning" onclick="closePanel('#signUpPanel')">取消</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>