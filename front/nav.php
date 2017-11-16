<nav class="navbar navbar-default navbar-fixed-top" id="nav">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="public/images/logo.png" alt="兼了个职" height="100%"></a>
				<!-- src前边加上__PUBLIC__/index/ -->
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">首页<span class="sr-only">(current)</span></a></li>
					<li><a href="hall.php">兼职大厅</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" id="signIn" data-toggle="modal" data-target="#signInModal">注册</a></li>
					<li><a href="#" id="signUp" data-toggle="modal" data-target="#signUpModal">登录</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" id="userToggle" style="display: none;">
					<li class="dropdown">
						<a href="#" id="user" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
						<ul class="dropdown-menu">
							<li><a href="#">消息</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">我的资料</a></li>
							<li><a href="#">我的兼职</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">退出</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</div><!-- /.container-fluid -->
</nav>