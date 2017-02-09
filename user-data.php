<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心-编辑资料</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/mine.css">
	<link rel="stylesheet" href="css/user.css">
</head>
<body>
	<div class="container">
		<?php include'public/user-header.php' ?>
		<!-- warp -->
		<div class="warp">
			<div class="width user-tx bg-fff">
				<div class="user-pic mr15 img100"><img src="http://i.pengxun.cn/thumb/articles/20160321/131030195568079778@200x200.jpg" class="headImg" alt=""></div>
				<div class="f_l">加利福尼亚煎饼</div>
			</div>
			<div class="width mt10 bg-fff tx-top">
				<ul>
					<li>
						<span class="f_l">昵称：加利福尼亚煎饼</span>
					</li>
					<li>
						<span class="f_l">头像：</span>
						<a href='####' id="inputFileContainer" class="input_file_container">  选择文件 
                            <input type="file" id="file1" name="file1" class="input_file" onchange='this.form.submit()' hidefocus="true" />  
                            <span class="arrow-right"></span>     
                        </a> 
					</li>
					<li>
						<div class="tx-pic2 img100">
							<img src="http://i.pengxun.cn/thumb/articles/20160321/131030195568079778@200x200.jpg" class="headImg xzpic" alt="">
							<div class="width mt5">
								<a class="f_l pictures-rotating-left"></a>
								<a class="f_r pictures-rotating-right"></a>
							</div>
						</div>

					</li>
				</ul>
			</div>
		</div>
		<!-- /warp -->
		<?php include'public/user-mine-foot.php' ?>
	</div>
</body>
<script src="js/jquery-2.2.4.min.js"></script>
<script src = 'js/mine.js'></script>
<script src="js/user.js">
</script>
</html>