<?php
// THIS IS ONLY EXAMPLE PAGE
include_once("Functions/GTServerBoost.php");
// Your server ip
$ip = '';

// Get server boosts in array
$Boosts = array();
$Boosts = ServerBoost($ip, 'boost_list');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta name="author" content="MBS" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>Server Boosts</title>

  <link rel="icon" type="image/png" href="http://static.gametracker.rs/favicon.ico">
</head>
<body>
	<!-- Number of boosts -->
	<p>Total: <?php echo ServerBoost($ip, 'total'); ?></p>
	<!-- Number of successful boosts -->
	<p>Successful: <?php echo ServerBoost($ip, 'successful'); ?></p>
	<!-- Number of failed boosts -->
	<p>Failed: <?php echo ServerBoost($ip, 'failed'); ?></p>
	<!-- Number of pending boosts -->
	<p>Pending: <?php echo ServerBoost($ip, 'pending'); ?></p>

	<!-- All boosts -->
	<table>
		<tr>
			<th width="150px">Time</th>
			<th width="150px">Text</th>
			<th width="150px">Number</th>
			<th width="150px">Status</th>
		</tr>
		<?php foreach($Boosts as $Boost) { ?>
		<tr>
			<td><?php echo $Boost['time']; ?></td>
			<td><?php echo $Boost['name']; ?></td>
			<td><?php echo $Boost['number']; ?></td>
			<td><?php echo $Boost['status']; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>