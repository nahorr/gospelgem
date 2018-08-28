<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Gosgem</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<h4>Welcome to Gosgem!</h4>
	<br/>
		<p>Hi {{$user->name}},</p>
		<p>Please click on the below link to verify your email account.</p>	
		<p>Your registered email-id is {{$user['email']}}.</p> 
	<br/>
		<a href="{{url('user/verify', $user->verifyUser->token)}}"><button class="button-save large" style="background-color: #b5d100;">Verify Email</button></a>
	<br/>
		<p>Thank you - from Gosgem</p>

</body>
</html>
