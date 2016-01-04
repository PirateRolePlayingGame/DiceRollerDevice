<!DOCTYPE html>
<html>
<head>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/DiceIconFont.css">
</head>
<body>
<div class="container">
	<div class="well text-center">
		<span class="big-dice icon-Dice-d4-Opaque"></span>
		<span class="big-dice icon-Dice-d6-Opaque"></span>
		<span class="big-dice icon-Dice-d8-Opaque"></span>
		<span class="big-dice icon-Dice-d10-Opaque"></span>
		<span class="big-dice icon-Dice-d12-Opaque"></span>
		<span class="big-dice icon-Dice-d20-Opaque"></span><br><br>
		<form class="form-inline" id="forml" action="" onsubmit="return(roleada())" method="POST">

			Tipo de dados  <select class="form-control" id="tipo">
    			<option>d4</option>
    			<option>d6</option>
			    <option>d8</option>
			    <option selected>d10</option>
			    <option>d12</option>
			    <option>d20</option>
  			</select>

			Cantidad  <input class="form-control" type="number" id="cant">
			<button type="submit" class="btn btn-default">Roll</button>
		</form>
		
	</div>

	<span id="show">
	</span>
</div>
</body>


<script type="text/javascript" src="roll.js"></script>



</html>