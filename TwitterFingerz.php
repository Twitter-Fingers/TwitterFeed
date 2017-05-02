<html>
<head>
<!-- Title -->
<title>Twitter Fingerz</title>

<script 

type="text/javascript">




</script>
<link rel="stylesheet" href="table_design.css">
<h1><font color = “#4099FF”><center>Twitter-Fingerz</center></font></h1>
<h2><center>by Anisha Carter, Taylor Clark, Dominique Collins, Julian Mathis, Sydney Parker, and Dorian Woods<center></h2>
<!--||-->
</head>
<body>

	<?php require __DIR__. '../../../vendor/autoload.php';
	   // connect to mongodb
	    $m =  new MongoDB\Client;

		
	   echo "Connection to database successfully" ."<br>" . PHP_EOL;
	   
	   //select a database
	   $db = $m->test;
	   echo "Database test selected" . "<br>" . PHP_EOL;
	?>
<br>
<button type='button' onclick='startStream()'> Start Stream</button>
<button type='button' onclick='stopStream()'> Stop Stream</button>
<br>

<div id="searchbox">

<!--Search Box for User-->
<form action="mongoSearch.php" method="get">
<input type="submit">
<input type="text" name="name"><br>

</form>

</div>


<h1>Stream Window</h1>		
	
<!-- Scrollable box the stream of tweets will be displayed in -->
<div id="startStream" style="height:300px;width:1220px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">

	
	<?php include 'tmhOAuth/StreamAccess.php';

			//echo $testTweet;
	
	?>
</div>




<h1>Search Window</h1>	

<div style="height:220px;width:1220px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
SEARCH RESULTS.

</div>

<!-- Test for php require (Julian)




	<table><center>
	<thead>
		<TD><font color = black><center>USER</center></font></TD><TD><font color = black><center>TWEETS</center></font></TD>
	</thead>
		
	</center></table>
	<a class="twitter-timeline" data-height="500" href="https://twitter.com/MarketWatch/lists/finance-twitter">A Twitter List by MarketWatch</a> 
	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	<?php
	   // connect to mongodb
	   //$m = new MongoClient();
		
	   //echo "Connection to database successfully";
	   // select a database
	   //$db = $m->mydb;
		
	   //echo "Database mydb selected";
	?>
</body>

</html>
