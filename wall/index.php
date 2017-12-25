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
	alert("ie浏览器无法正常解析本页，请使用谷歌内核的流量器浏览。如（360浏览器，猎豹浏览器等）");
	window.history.back(-1); 
	}
</script> 
</head>

<body>
	<div class="main">
   <EMBED style=" z-index:-2;RIGHT: 250px; POSITION: absolute; TOP: 55px; absolute: " align=right src=".style/<?php echo $style?>/images/fl.swf" width=1600 height=625 type=application/x-shockwave-flash wmode="transparent" quality="high" ;></EMBED>
   <EMBED style="z-index:-2;LEFT: 250px; POSITION: absolute; TOP: 55px; absolute: " align=right src=".style/<?php echo $style?>/images/fl.swf" width=1600 height=625 type=application/x-shockwave-flash wmode="transparent" quality="high" ;></EMBED>

<div class="l"></div>
<div class="r"></div>
<div class="top" onClick="viewExplan();" data-position="right center" data-content="二维码，快捷键M">
	<?php 
		$i=1;
		for(;$i<20;$i++){
			if(file_exists('logo/'.$i.'.png')){
			}else{
				break;
			}
		}
		if ($i <= 2){
			echo '<div class="top-logo">';
		}else{
			echo '<div class="ui shape top-logo">';
		}
	
	?>
	<div class="sides">
	<?php 
		for($i=1;$i<20;$i++){
			if(file_exists('logo/'.$i.'.png')){
				if($i==1){
					echo '<img src="logo/1.png" width=455px height=135px class="active side"/>';
				}else{
					echo '<img src="logo/'.$i.'.png" width=455px height=135px class="side"/>';
				}
			}
		}
	
	?>
	</div>

</div>
<div class="kword ui shape ">
	<div class="sides">
		<div class="k active side">关注我们的官方账号<strong><?php echo $dianplu_wxh;?></strong> <br>发送<?php  echo $xuanzezu[0];?>您想说的话即可上墙！</div>

		<div class="k side"><?php  echo $xuanzezu[1];?></div>

		<div class="k side"><?php  echo $xuanzezu[2];?></div>
	</div>
</div>
</div>
    <div class="wall">
        <div class="left">
     
        </div>
      <div class="center">
            <div class="list">
                <ul id="list"></ul>
            </div>
            <div class="footer"></div>
        <div class="btns">
</body>
</html>