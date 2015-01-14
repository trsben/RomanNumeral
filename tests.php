<!doctype html>
<html class="no-js" ng-app="RomanNumeral">
<head>
	<title>Roman Numeral Conversion - Tests</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/normalize.css">
	
	<style type="text/css">
		body {
			padding: 0 10px;
		}
		
		.pass {
			color: green;
		}

		.fail {
			color: red;
		}
	</style>
</head>
<body>
	<?php  require_once('functions.php'); ?>

	<h2>Generate Tests</h2>

	<?php
		$generateTest = new Test_RomanNumeralGenerator_Generate();
		$generateTest->runTests();
	?>

	<h2>Parse Tests</h2>

	<?php
		$parseTest = new Test_RomanNumeralGenerator_Parse();
		$parseTest->runTests();
	?>
</body>
</html>
