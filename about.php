<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 2 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>    </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="Keywords" content=" ">
<meta name="Description" content=" ">
<link rel="shortcut icon" href=" " type="image/x-icon">
<link href="templates/default/style/style.css" rel="stylesheet" type="text/css" media="screen">

</head>


<?php require_once('header.php'); ?>

<div class="main">
		<div class="OneOfTwo">
		<div class="subCont"> <?php echo Info($cid); ?> </div>
	</div>
</div>

<?php require_once('footer.php'); ?>
</html>