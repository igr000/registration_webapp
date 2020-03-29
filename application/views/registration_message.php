<!DOCTYPE html>
<!------------------------------------------------------------------------------
-- Registration_message page lets the user know whether his/her registration ---
-- has been successful or not. -------------------------------------------------
--------------------------------------------------------------------------------
-- Author: Irene Gayle Roque ---------------------------------------------------
------------------------------------------------------------------------------->
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #FDFEFE;
		background: #AED6F1;
		font-family: 'Roboto', sans-serif;
	}
</style>
</head>
<body>
	<!-- Displays 'Registration Successful' or 'Registration Failed' -->
	<h1><?php echo $title; ?></h1>
	<hr>
	<!-- Displays ''Please check your email to activate your account' or 'Something went wrong. Please try again later.' -->
	<em><?php echo $message; ?></em>

</body>
</html>