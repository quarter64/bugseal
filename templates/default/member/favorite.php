<?php if(!defined('IN_MEMBER')) exit('Request Error!'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $cfg_webname; ?> - 会员中心 - 我的收藏</title>
<link href="<?php echo $cfg_webpath; ?>/templates/default/style/member.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $cfg_webpath; ?>/templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $cfg_webpath; ?>/templates/default/js/member.js"></script>
</head>

<body>
<?php require_once('header.php'); ?> 
<div class="mainbody">
	<div class="leftarea">
		<?php require_once(dirname(__FILE__).'/lefter.php'); ?>
	</div>
	<div class="rightarea">
		<h3 class="subtitle">我的收藏</h3>
		<?php
		$dopage->GetPage("SELECT * FROM `#@__userfavorite` WHERE uname='$c_uname' ORDER BY id DESC");
		if($dosql->GetTotalRow() > 0)
		{
		?>
		<form name="form" id="form" method="post">
		<ul class="list">
			<?php
			while($row = $dosql->GetArray())
			{
				if($row['molds'] == 1)
					$tbname = 'infolist';
				else if($row['molds'] == 2)
					$tbname = 'infoimg';
				else if($row['molds'] == 3)
					$tbname = 'soft';
				else if($row['molds'] == 4)
					$tbname = 'goods';
				else
					$tbname = '';

				$r = $dosql->GetOne("SELECT * FROM `#@__$tbname` WHERE id=".$row['aid']." AND delstate=''");
				if(isset($r) && is_array($r))
				{
			?>
			<li><input type="checkbox" name="checkid[]" id="checkid[]" value="<?php echo $row['id']; ?>" />&nbsp;&nbsp;<span class="time"><?php echo GetDateTime($row['time']); ?></span><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $r['title']; ?></a></li>
			<?php
				}
				else
				{
					echo '<li><input type="checkbox" name="checkid[]" id="checkid[]" value="'.$row['id'].'" />&nbsp;&nbsp;此条收藏的信息已不存在！(ID:'.$row['id'].')</li>';
				}
			}
			?>
		</ul>
		</form>
		<div class="options_b">选择： <a href="javascript:CheckAll(true);">全部</a> - <a href="javascript:CheckAll(false);">无</a> - <a href="javascript:DelAllNone('?a=delfavorite');" onclick="return ConfDelAll(0);">删除</a></div>
		<?php echo $dopage->GetList(); ?>
		<?php
		}
		else
		{
		?>
		<div class="nonelist">您还没有收藏哦！</div>
		<?php
		}
		?>
	</div>
	<div class="cl"></div>
</div>
<?php require_once('footer.php'); ?>
</body>
</html>
