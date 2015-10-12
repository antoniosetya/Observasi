<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php  
	error_reporting(0);
	$nama = $_POST["nama"];
?>	

<?php
	include("header.php");
?>
<section class="scoring-temp">
	<ul id="scoring-report" style="width : 20%">
		<li id="1" onClick="score_report(this.id)">Report 1</li>
		<li id="2" onClick="score_report(this.id)">Report 2</li>
	</ul><!--
	
	--><ul class="scoring-teacher" style="width : 25%; background : blue;">
			<li id="1" onClick="score_teacher(this.id)">Teacher 1</li>
			<li id="2" onClick="score_teacher(this.id)">Teacher 2</li>
	</ul><!--
	
	--><ul class="rate" style="width : 55%">
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
	</ul>
</section>
<?php 
	include("footer.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
function score_report(id)
{
	$(".scoring-teacher").load("datadummy.html #teacher"+id);
}
</script>
<script type="text/javascript">
function score_teacher(id)
{
	$(".rate").load("datadummy.html #rate"+id);
}
</script>

</body>
</html>