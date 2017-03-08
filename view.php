<!doctype html>
<head>
	<title> TIP CALCULATOR </title>
	<link rel="stylesheet" href="style.css">
</head>

<body bgcolor="yellow">
	
	<center>
	
		<h2> <parent>Tip Calculator </parent></h2>
		
		
			<form action = 'site.php' method = 'post'>
				<pr>BILL $: <input type="text" name="bill" value="<?php echo isset($_POST['bill']) ? $_POST['bill'] : '1000' ?>"><br>

				<?php
					$data = [
					0.1,
					0.15,
					0.2
				];
				?>
				
				<br>
				<u>Tip percentage:</u> <br>
				<br>
				
				<?php foreach($data as $val){ ?>
					<input type='radio' name='inter' value=<?php echo $val; ?> checked> <?php echo $val*100;?> %;
				<?php } ?>
				<br>
				
				<br>
				<input type="submit">
				</pr>
			</form>
		</fontized>
		
	</center>
	
	
</body>
</html>