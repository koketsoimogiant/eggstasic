<!DOCTYPE html>
<html>
<head>
	<title>Send an Email</title>
</head>
<body style="background-color: lightpink; color: black; height: 100%; width: 100%;">
	<div style="text-align: center;">
		<h1>Send E-mail</h1>
		<form action="sendmail.php" method="post">
			<input type="text" name="name" placeholder="Fullname">
			<input type="text" name="mail" placeholder="Your Email">
			<input type="text" name="subject" placeholder="Subject">
			<textarea name="message" placeholder="message"></textarea>
			<input type="submit" name="submit" value="Send Mail">
		</form>
	</div>
</body>
</html>