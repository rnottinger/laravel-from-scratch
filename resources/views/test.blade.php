<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Test Complete</h1>
	<p>
		<?=htmlspecialchars($name, ENT_QUOTES);?>
		<!--
			automatically compile down and escape the variable
			and we will get the exact same thing
		-->
		{{ $name }}
		<!--
			will not escape it
			and there are situations where you will want this
			example if you are fetching html from the database that you authored. in those situations you want it rendered and interpreted
		-->
		{{!! $name !!}}
		<!--
			php doesn't understand this templating syntax
			it has to be compiled down first
			so when you load this in the browser
			then laravel will take care of it for you
			storage/framework/views
				ultimately this compiled file
					is what is sent to the browser
		-->
	</p>
</body>
</html>