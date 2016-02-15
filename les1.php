<?php 
	$var = date('H:i');

	if ($var > "04:00"&& $var < "06:59"){
		$image = "morning";
	}
	elseif ($var > "07:00"&& $var < "11:59"){
		$image = "late-morning";
	}
	elseif($var  > "12:00"&&  $var < "13:59"){
		$image = "afternoon";
	}
	elseif($var  > "14:00"&&  $var < "17:59"){
		$image = "late-afternoon";
	}
	elseif ($var > "18:00"&& $var < "19:59"){
			$image = "evening";
	}
	elseif($var  > "20:00"&&  $var < "21:59"){		 
		$image = "late-evening";
	}
	elseif ($var > "22:00"&& $var < "23:59"){		
		$image = "night";
	}
	elseif($var  > "00:00"&&  $var < "04:00"){		 
		$image = "late-night";
	}
?>
<!DOCTYPE html>
<html>

	<head>
	<script>
		function startTime() {
		    var today = new Date();
		    var h = today.getHours();
		    var m = today.getMinutes();
		    var s = today.getSeconds();
		    m = checkTime(m);
		    s = checkTime(s);
		    document.getElementById('txt').innerHTML =
		    h + ":" + m + ":" + s;
		    var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
		    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		    return i;
		}
	</script>
		<title><?=$image?></title>
		<meta charset="utf-8">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body style="background-image:url(images/<?php echo $image;?>.png)" onload="startTime()">
		
		<div class="head">
			<h1>Good <?=$image?></h1>
			<div id="txt"></div>
		</div>


	</body>
</html>