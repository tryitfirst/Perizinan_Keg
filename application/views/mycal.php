<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<style type="text/css">
		.calendar {
			font-family: Serif; font-size: 20px;color:white;
		}
		table.calendar{
			margin: auto; border-collapse: collapse;
		}
		.calendar .days td{
			width: 80px; height: 80px; padding: 4px;
			border: 1px solid cyan;
			vertical-align:top;
			background: url(../images/atas.png);
		}
		.calendar .days td:hover{
			background-color: #FFF;
		}
		.calendar .highlight{
			font-weight: bold; color:red;font-size: 35px;
		}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>	
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
</head>
<body>
	<br>
	<br>
	<br>
	<h5><?php echo $calendar; ?></h5>
</body>
</html>