<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?> <!-- 包含head的内容 -->
	<title>兼职大厅-兼了个职-大学生兼职平台</title>
	<link rel="stylesheet" href="public/css/hall.css">
</head>
<body>
	<?php include('nav.php'); ?> <!-- 包含导航 -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="well well-white">
					<div class="input-group">
						<div class="input-group-btn">
							<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">兼职 <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="#">兼职</a></li>
								<li><a href="#">商家</a></li>
								<li><a href="#">学生</a></li>
							</ul>
						</div><!-- /btn-group -->
						<input type="text" class="form-control" placeholder="想搜点儿什么呢...">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">搜 索</button>
						</span>
					</div><!-- /input-group -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">兼职分类</h3>
					</div>
					<div class="panel-body">
						<a href="" class="btn btn-link"><h4>分类1:</h4></a>
						<div class="well">
							<a href="" class="btn btn-link">子分类1 <span class="label label-danger">热 !</span></a>
							<a href="" class="btn btn-link">子分类2</a>
							<a href="" class="btn btn-link">子分类3 <span class="label label-success">新 !</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel">
					<div class="panel-body">
						<a href="detail.php" class="btn btn-link"><h4>这是第一条兼职信息</h4></a><div class="text-right publisher"><a href="">xxx</a>发布于2017.11.15</div>
						<hr>
						<a href="" class="btn btn-link"><h4>这是第er条兼职信息</h4></a><div class="text-right publisher"><a href="">xxx</a>发布于2017.11.15</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>	<!-- 包含页脚和返回顶部按钮 -->
</body>
<?php include('popModal.php'); ?> <!-- 包含弹窗 -->
<script src="public\js\common.js"></script>
</html>