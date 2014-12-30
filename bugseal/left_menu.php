<?php require_once(dirname(__FILE__).'/inc/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧菜单</title>
<link href="templates/style/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/tinyscrollbar.js"></script>
<script type="text/javascript" src="templates/js/leftmenu.js"></script>
</head>
<body>
<div class="quickBtn"> <span class="quickBtnLeft"><a href="infoimg_add.php" target="main">添新闻</a></span></div>

<div class="tGradient"></div>
<div id="scrollmenu">
	<div class="scrollbar">
		<div class="track">
			<div class="thumb">
				<div class="end"></div>
			</div>
		</div>
	</div>
	<div class="viewport">
		<div class="overview"> 
			<!--scrollbar start-->
			<div class="menubox">
				<div class="title on" id="t1" onclick="DisplayMenu('leftmenu01');" title="点击切换显示或隐藏"> 网站系统管理 </div>
				<div id="leftmenu01"> <a href="admin.php" target="main">管理员管理</a> 
					<a href="admingroup.php" target="main" title="管理组管理" class="admingroup">管理组管理</a> 
					<a href="web_config.php" target="main">网站信息配置</a> 
					<a href="upload_filemgr_sql.php" target="main">上传文件管理</a>
				</div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu02');" title="点击切换显示或隐藏"> 栏目内容管理 </div>
				<div id="leftmenu02" style="display:none"> 
					<a href="info.php" target="main">单页信息管理</a>  
					<a href="infoimg.php" target="main">新闻信息管理</a> 
				</div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu03');" title="点击切换显示或隐藏"> 模块扩展管理 </div>
				<div id="leftmenu03" style="display:none"><a href="member.php" target="main">用户管理</a> 
					<a href="userfavorite.php" target="main">用户收藏管理</a> 
					<a href="usercomment.php" target="main">用户评论管理</a>
					<div class="hr_1"> </div>
					<a href="message.php" target="main">留言模块管理</a> 
					<a href="weblink.php" target="main">友情链接管理</a>  
					<a href="vote.php" target="main">投票模块管理</a>
					<a href="usergroup.php" target="main" title="用户组管理" class="usertype"></a> 
					<a href="adtype.php" target="main" title="广告位管理" class="adtype"></a> 
					<a href="weblinktype.php" target="main" title="友情链接类别" class="weblinktype"></a> </div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu04');" title="点击切换显示或隐藏"> 商品订单管理 </div>
				<div id="leftmenu04" style="display:none"> 
					<a href="goodstype.php" target="main">商品类别管理</a> 
					<a href="goodsbrand.php" target="main">品牌类型管理</a>
					<a href="goodsflag.php" target="main" title="商品信息属性管理" class="goodsinfoattr"></a>
					<div class="hr_1"> </div>
					<a href="goods.php" target="main">商品列表管理</a> 
					<a href="goodsorder.php" target="main">商品订单管理</a>
					<div class="hr_1"> </div>
					<a href="postmode.php" target="main">配送方式管理</a> 
					<a href="paymode.php" target="main">支付方式管理</a>
					<a href="getmode.php" target="main">货到方式管理</a> 
				</div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu06');" title="点击切换显示或隐藏"> 帮助与更新 </div>
				<div id="leftmenu06" style="display:none;"> 
					<a href="sysevent.php" target="main">操作日志</a>
					<div class="hr_1"> </div>
					<a href="upload_file.php" target="main">上传新文件</a> 
					<a href="help.php" target="main">开发帮助</a> </div>
			</div>
			<!--scrollbar end--> 
		</div>
	</div>
</div>
<div class="bGradient"></div>

<div class="copyright"> © 2014 <a href="http://www.zhuanyiwang.cn/" target="_blank">虫印雷鸟</a><br />
	All Rights Reserved. </div>
</body>
</html>