<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap/2.3.2/css/bootstrap.css">
	<script type="text/javascript" src="jquery/1.8.3/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/2.3.2/js/bootstrap.js"></script>
</head>
<body>
	<?php $full_url =  $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; ?>

	<table class="table" >
		<caption><h3>Document</h3></caption>
		<thead>
			<tr>
				<th>Path jQuery</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>http://<?php echo $full_url ?>jquery/1.7.2/jquery.js</td>
			</tr>
			<tr>
				<td>http://<?php echo $full_url ?>jquery/1.8.3/jquery.js</td>
			</tr>
			<tr>
				<td>http://<?php echo $full_url ?>jquery/1.9.1/jquery.js</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td><b>Path jQuery UI</b></td>
			</tr>
			<tr>
				<td>http://<?php echo $full_url ?>jquery-ui/1.11.1/jquery-ui.min.css</td>
			</tr>
			<tr>
				<td>http://<?php echo $full_url ?>jquery-ui/1.11.1/jquery-ui.min.js</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td><b>Path Bootstrap</b></td>
			</tr>
			<tr>
				<td>http://<?php echo $full_url ?>bootstrap/2.3.2/css/bootstrap-responsive.min.css</td>
			</tr>
			<tr>
				<td>http://<?php echo $full_url ?>bootstrap/2.3.2/css/bootstrap.css</td>
			</tr>
			<tr>
				<td>http://<?php echo $full_url ?>bootstrap/2.3.2/js/bootstrap.js</td>
			</tr>


			<tr>
				<td><b>Echo Log</b></td>
			</tr>
			<tr>
				<td>http://<?php echo $full_url ?>js/echo_log.js</td>
			</tr>
		</tbody>
	</table>

</body>
</html>