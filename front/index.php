<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?> <!-- 包含head的内容 -->
</head>
<body>
	<?php include('nav.php'); ?> <!-- 包含导航 -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron" id="banner">
					<h1 style="color: #555">欢迎来到兼了个职！</h1>
					<p>这是一个方便商家，面向学生的兼职信息发布检索平台</p>
					<p><b>如果你是商家</b>：你可以在这里方便快捷地找到满足你要求的、优秀的学生兼职资源</p>
					<p><b>如果你是学生</b>：你可以在这里方便快捷地找到适合你特长的、薪资合理的兼职信息</p>
					<p>
						<a class="btn btn-success btn-lg" href="#" role="button">我是商家</a>
						<a class="btn btn-info btn-lg" href="#" role="button">我是学生</a>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading panelHead">
						<h3 class="panel-title">最新兼职信息</h3>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<li class="jobInfo"><a href="#">2017.11.10 那哪那谁谁谁发的兼职</a></li>
							<li class="jobInfo"><a href="#">2017.11.10 那哪那谁谁谁发的兼职</a></li>
							<li class="jobInfo"><a href="#">2017.11.10 那哪那谁谁谁发的兼职</a></li>
							<li class="jobInfo"><a href="#">2017.11.10 那哪那谁谁谁发的兼职</a></li>
						</div>
						<div class="col-md-6">
							<li class="jobInfo"><a href="#">2017.11.10 那哪那谁谁谁发的兼职</a></li>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading panelHead">
						<h3 class="panel-title">优秀商家推荐</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4 merchant">
								<div class="thumbnail">
									<img src="public/images/merchant.jpg" alt="商家">
									<div class="caption text-center">
										<h3>商家1</h3>
										<p>商家介绍</p>
										<p><a href="#" class="btn btn-default center-block" role="button">查看详情</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 merchant">
								<div class="thumbnail">
									<img src="public/images/merchant.jpg" alt="商家">
									<div class="caption text-center">
										<h3>商家2</h3>
										<p>商家介绍</p>
										<p><a href="#" class="btn btn-default center-block" role="button">查看详情</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 merchant">
								<div class="thumbnail">
									<img src="public/images/merchant.jpg" alt="商家">
									<div class="caption text-center">
										<h3>商家3</h3>
										<p>商家介绍</p>
										<p><a href="#" class="btn btn-default center-block" role="button">查看详情</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 merchant">
								<div class="thumbnail">
									<img src="public/images/merchant.jpg" alt="商家">
									<div class="caption text-center">
										<h3>骚的一批</h3>
										<p>商家介绍</p>
										<p><a href="#" class="btn btn-default center-block" role="button">查看详情</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 merchant">
								<div class="thumbnail">
									<img src="public/images/merchant.jpg" alt="商家">
									<div class="caption text-center">
										<h3>骚的一批</h3>
										<p>商家介绍</p>
										<p><a href="#" class="btn btn-default center-block" role="button">查看详情</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 merchant">
								<div class="thumbnail">
									<img src="public/images/merchant.jpg" alt="商家">
									<div class="caption text-center">
										<h3>骚的一批</h3>
										<p>商家介绍</p>
										<p><a href="#" class="btn btn-default center-block" role="button">查看详情</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>	<!-- 包含页脚和返回顶部按钮 -->
</body>
<?php include('popPanel.php'); ?> <!-- 包含弹窗 -->
<script src="public\js\common.js"></script>
</html>