<?php 

//print_r($_POST);
// if (!empty($_POST)) {
// 	print_r($_POST);
// }
if ($_SERVER['REQUEST_METHOD']== 'POST') {

	if (mail('keyser.abarca@gmail.com', 'New message', htmlspecialchars($_POST['message']) ))
		$status="Thank you for your message";
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
	<ul>
		<li>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name">
		</li>
		<li>
			<label for="email">Email:</label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="message">Message</label><br>
			<textarea name="message" id="message" cols="30" rows="10"></textarea>

		</li>
		<li>
			<input type="submit" value="Go!">
		</li>
	</ul>
	</form>
	<?php 
		if (isset($status)){
			echo $status;
		}
	 ?>	
</body>
</html>