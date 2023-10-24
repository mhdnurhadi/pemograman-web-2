
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />

	<style>
		.box-1 {
		width: 100px;
		height: 100px;
		border: 1px solid #333;
		margin-top: 10px;
		margin-bottom: 20px;
		}
		.box-2 {
		width: 100px;
		height: 100px;
		border: 1px solid #333;
		margin-top: 10px;
		margin-bottom: 20px;
		
		}
		.box-3 {
		width: 100px;
		height: 100px;
		border: 1px solid #333;
		margin-top: 10px;
		margin-bottom: 20px;
		
		}
		.text-align {
		font-size: 20px;
		}
		.container {
		display: flex;
		}
		
	</style>	
</head>

<body>
	<?php
	$a="A";
	$b="B";
	$c="C";
	?>
	
<div class="wrapper">
	<div class="box-1">
		<div class="text-align">
		<p><center><?php echo$a?></center></p>

	</div>
</div>
</div>
	
<div class="container">
	<div class="box-1">
		<div class="text-align">
		<p><center><?php echo$a?></center></p>
	</div>
</div>

	<div class="box-2">
		<div class="text-align">
			<p><center><?php echo$b?></p></center>
			</div>
		</div>
	</div>
	
	<div class="container">
	<div class="box-1">
		<div class="text-align">
		<p><center><?php echo$a?></center></p>
	</div>
</div>

	<div class="box-2">
		<div class="text-align">
			<p><center><?php echo$b?></p></center>
			</div>
		</div>
	<div class="box-3">
		<div class="text-align">
			<p><center><?php echo$c?></p></center>
			</div>
		</div>


</div>
</div>

	
</body>
</html>

