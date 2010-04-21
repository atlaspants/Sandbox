<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<title></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="css/common.css"/>
</head>
<?
$me = $_SERVER["PHP_SELF"];
$lastSlash = strrpos($me,"/");
$thisPage = substr($me, $lastSlash + 1);
?>

<body>

<div id="gears"><img src="img/gearsAnimated.gif" /></div>
<div id="title">Deployment Example</div>
<div id="identity"><span class="label">Server:</span>&nbsp;&nbsp;&nbsp;&nbsp;<? echo file_get_contents('./identity.txt'); ?></div>
<!--<div id="updated"><span class="label">Updated:</span>&nbsp;&nbsp;<? //echo date ("m/d H:i:s a", filemtime($thisPage)); ?></div>-->

<div id="updated"><span class="label">Updated:</span>&nbsp;&nbsp;<? echo date ("m/d H:i:s a"); ?></div>

</body>
</html>