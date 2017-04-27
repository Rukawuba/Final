<html lang="en">
	<head>
	<meta charset="UTF-8">
	<title> To Do</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>	
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
	
	</head>

	<body>
		<div class="list">
			<h1 class ="header"> To Do List </h1>

			<ul>
				<li><span class="item">Figure out how to connect a database</span></li>
				   <a href="#" class="done-button"> Mark as done</a>
				<li><span class="Item done">Learn PHP</span></li>

				</ul>


		<form class="item-add" action="add.php" method="post">
			<input type="text" name="name" placeholder="Type a new item here" class="input" required>
						<input type="submit" value="add" class="submit">

				</form>
			</div>
		</body>
	</html>


