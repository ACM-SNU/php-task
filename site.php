<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<center>
	<?php 

	require "view.php"; // Refers to the main site. //
    
	$tip = (float)$_POST["bill"]*$_POST["inter"]; // Calculates the tip using bill * percent/100 formula. //
	$total = (float)$_POST["bill"]+(float)$tip; // Calculates total after adding tip to bill. //
	$flag = 0;
	if ($tip > 0){
		// If tip is greater than 0, then only we should print our result else not. //?>
		<?php
		echo "<div>Tip: $".$tip."<br> Total: $".$total."</div>";
		?>
	<?php
	}else{
		echo "<div>Either the tip is zero or the input is not valid.</div>";
	}

	?>
	
	</center>

</body>
</html>
