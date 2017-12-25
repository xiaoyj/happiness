<?php 
@header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>婚礼上墙大屏幕</title>
<script type="text/javascript"> 
if(document.all){
	alert("Can't open, please change the browser!");
	window.history.back(-1); 
	}
</script> 

<link rel="stylesheet" href="css/wxwall.css" type="text/css">
<link rel="stylesheet" href="style/css/style.css" type="text/css">

</head>

<body>
	<div class = "main">
		<EMBED style=" z-index:-2;RIGHT: 250px; POSITION: absolute; TOP: 55px; absolute: " align=right src=".style/<?php echo $style?>/images/flash.swf" width=1600 height=625 type=application/x-shockwave-flash wmode="transparent" quality="high" ;></EMBED>
		<EMBED style="z-index:-2;LEFT: 250px; POSITION: absolute; TOP: 55px; absolute: " align=right src=".style/<?php echo $style?>/images/flash.swf" width=1600 height=625 type=application/x-shockwave-flash wmode="transparent" quality="high" ;></EMBED>
		<div class="top" onClick="viewExplan();" data-position="right center" data-content="二维码，快捷键M">
			<?php
				echo '<div class ="top-logo">';
			?>
			<div class="sides">
			<?php
				echo '<img src="logo/1.png" width=455px height=135px class="active side"/>';
			?>
		</div>
	</div>

	<div class="keyword ui shape">
		<div class = "side">
			<div class="k active side">关注我们的官方账号<stong>Test</stong><br>发送您想说的话即可上墙！</div>
		</div>
	</div>
	
	<div id="explan" onClick="viewExplan();" class="ui primary segment" >
    <div class="ui ribbon green label"><b style="font-size:50px;">上墙关注：</b></div>
    <div class="erweima">
    <center><div class="mabox">
    	<?php
    		echo'<div class="pic"><center><a class="ui green label"><b style="font-size:2em;line-height: 1.7em;text-transform:lowercase;">微信:Test</b></a></center><img src="logo/code.jpg" width=362px height=362px;/></div>';
    	?>
    </div></center>
	</div>
	</div>
</div>
</body>
</html>