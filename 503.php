<?php

// Set settings here
$downtime = '12:00AM - 12:30AM EST';
$message = 'We sincerely apologize for the inconvenience.<br />Our site is currently undergoing scheduled<br />maintenance and upgrades, but will return shortly.<br />Thank you for your patience.';
$retryafter = 172800;
$basepath = '/';

// Stop editing file here!

// Send 503 HTTP Response
header('HTTP/1.1 503 Service Temporarily Unavailable', true, 503);
header('Status: 503 Service Temporarily Unavailable');
header('Retry-After: ' . (int) $retryafter);
?>
<html>
<head>
<title>Site Maintenance</title>
<style>
	body {
		min-width: 700px;
	}
	
	#wrapper {
		position: relative;
		margin: 150px auto;
		width: 600px;
		color: #000000;
		font-family: Myriad Pro;
	}
	
	#header h2 {
		height: 70px;
		padding-top: 10px;
		padding-right: 20px;
		
		background-color: #E1E1E1;
		background: -moz-linear-gradient(top,  rgba(225,225,225,1) 50%, rgba(254,254,254,1) 99%, rgba(255,255,255,0) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,rgba(225,225,225,1)), color-stop(99%,rgba(254,254,254,1)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  rgba(225,225,225,1) 50%,rgba(254,254,254,1) 99%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  rgba(225,225,225,1) 50%,rgba(254,254,254,1) 99%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  rgba(225,225,225,1) 50%,rgba(254,254,254,1) 99%,rgba(255,255,255,0) 100%); /* IE10+ */
		background: linear-gradient(top,  rgba(225,225,225,1) 50%,rgba(254,254,254,1) 99%,rgba(255,255,255,0) 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e1e1e1', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
		
		text-align: right;
		font-size: 60px;
		font-weight: normal;
	}
	
	#header img {
		float: left;
		position: absolute;
		bottom: 55%;
		left: 3%;
	}
	
	#header h3 {
		margin-top: -40px;
		padding-right: 20px;
		text-align: right;
		font-size: 40px;
		font-weight: normal;
	}
	
	#wrapper hr {
		width: 110%;
		margin-top: -20px;
		margin-bottom: 20px;
		margin-left: -5%;
		clear: both;
	}
	
	#message {
		font-size: 25px;
		text-align: center;
	}
</style>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<h2>Site Maintenance</h2>
			<img src="<?php echo $basepath; ?>503.png" />
			<h3><?php echo $downtime; ?></h3>
		</div>
		<hr />
		<div id="message"><?php echo $message; ?></div>
	</div>
</body>
</html>