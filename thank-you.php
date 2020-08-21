<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Thank you</title>

	<link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width">


</head>

<body>


	<div class="page-wrapper">
		<div class="page-left">
			<div class="logo">Buxton</div>
			<h1>Sign up today to receive your weekly fill of all the best mineral water gossip.</h1>
			<img class="waterfall-img" src="images/waterfalls.png">
		</div>
		<div class="page-right complete">
			<div>
				<h2>Thank you, you are now subscribed</h2>
				<p><?php echo $_POST['name']; ?></p>
				<p><?php echo $_POST['how']; ?></p>
				<p><?php echo $_POST['email']; ?></p>
				<p><?php echo $_POST['phone']; ?></p>
				<p><?php echo $_POST['comments']; ?></p>
			</div>	
		</div>
	</div>


</body>
</html>