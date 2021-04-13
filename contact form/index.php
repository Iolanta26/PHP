<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=contact, initial-scale=1.0">
	<title>Contact me form</title>
</head>
<body>
	<form method="POST" id="submission-form" action="contact.php">
	<input type="text" name="username" id="username" placeholder="Enter your username">	
	<input type="password" name="password" id="password" placeholder="Pick a password">
	<input type="email" name="email" id="email" placeholder="Your email">
	<textarea name="message" id="message cols="30" rows="10" placeholder="Message here"></textarea>	
	<button type="submit">Send email</button>
	</form>
</body>
<!-- <script>
document.getElementById('submission-form').addEventListener('submit', (event)=>{
	event.preventDefault();

	const username = event.target.username;
	const password = event.target.password;
	const message = event.target.message;

	fetch('/contact.php', {
		params: {
			username,
			password,
			message
		}
	})
	console.log(username, password, message);
} )
</script> -->
</html>