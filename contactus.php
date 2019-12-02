<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<title>Contact US</title>
	<style type="text/css">
		body {
		    margin: 0;
		    font-family:sans-serif;
		    color: white;
		    text-align: left;
		    background:black;
		}
		.msg-box {
			vertical-align: top;
		}
		.sub-btn {

		}
    </style>
</head>
	<body>
	<h1>Contact Us</h1>
	<p>Please fill out this form to contact us</p>
	<form method="post" action="_contact.php" name="form">
        <p><label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name" required></p>
        <p><label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter your E-mail" required></p>
        <p><label for="message">Question:</label>
        <textarea name="msg" class="msg-box" cols="36" rows="4" placeholder="Enter your question here..." required></textarea></p>
        <div class="g-recaptcha" data-sitekey="6LfnmsUUAAAAAEPReq5JN0pChKySf76RfjHK_uvN"></div>
      	<br/>
        <input type="submit" name="submit" class="sub-btn" value="Send"> 
	</form></body>
</html>