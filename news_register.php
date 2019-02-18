<?php include_once("news_register.php") ?>
<?php include('server.php'); 
if(isset($_POST['register'])){
		$email = $_POST['email'];

		//Ensure that all fields are filled properly
		if(empty($email)){
			array_push($errors,"email subscription is required");
        }
        
		$sql = "INSERT INTO user_news (email) VALUES ('$email')";
		mysqli_query($db, $sql);	
		header('location:news_register.php'); // redirect to home page
		
	}
?>
<!DOCTYPE>
<html>
<head>
	<title>Subscription Form</title>
	<link rel="stylesheet" type="text/css" href="styles\style.css">
</head>
<body>
	<div class="header">
		<h2>Subscribe</h2>
	</div>
	
	<form method="post" action="">
		<!--Display errors here-->
		<div class="input_group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Your Email">
		</div>
		<div class="input_group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<button >
			<a href="home.php" style="color: blue">Home</a>
		</button>
		
	</form>
</body>
</html>
