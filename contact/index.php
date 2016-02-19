<!DOCTYPE html>
<html>

<header>
<?php include('../includes/header.php'); ?>
<style>
#header {
    background-color:lightgrey;
    color:black;
    text-align:center;
    padding:5px;
}
#section {
    width:350px;
    float:left;
    padding:10px;	 	 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 
}
</style>
</head>

<body>
<?php include('../includes/navigation.php');?>

<div id="header">
<h2>Contact Us</h2>
</div>


<div id="section">
<h3>ABCafe</h3>
<address> 68 Jalan Sg Long 1, Kajang 43000 Selangor</address>

<h3>Reservations</h3>
<p>Telephone +60 031324230 <br/>reservations@abcafe.com </p>

<h3>Feedback</h3>
<form>
	<form method="post" action="register.php">
		<fieldset>
			<legend>Visitor Information</legend>
				<label for="name">Name:</label>
				<input id="name" name="name" type="text" value="" maxlength="255" />
				<br/><br/>

				<label for="email">Email:</label>
				<input id="email" name="email" type="text" value="" maxlength="255" />
				<br/><br/>
	
				<label for="more">Message:</label><br/>
				<textarea id="more" name="more" rows="10" cols="80"></textarea>
		</fieldset>
	<button type="submit">Send</button>
</form>
</div>


<div id="footer">
<?php include('../includes/footer.php');?>
</div>



</body>
</html>