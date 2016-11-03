<html>
<head>
	<style type="text/css">
	body
	{
		margin: 0;
		padding: 0;
		background-color:#D6F5F5;
		text-align:center;
	}
	.top-bar
		{
			width: 100%;
			height: auto;
			text-align: center;
			background-color:#FFF;
			border-bottom: 1px solid #000;
			margin-bottom: 20px;
		}
	.inside-top-bar
		{
			margin-top: 5px;
			margin-bottom: 5px;
		}
	.link
		{
			font-size: 18px;
			text-decoration: none;
			background-color: #000;
			color: #FFF;
			padding: 5px;
		}
	.link:hover
		{
			background-color: #9688B2;
		}
	</style>
	

</head>

<body>
	<!-- <div class="top-bar">
		<div class="inside-top-bar">
			<a href="http://www.eggslab.net"><img src="http://www.eggslab.net/wp-content/uploads/2015/03/eggslablogo.png" width="500px"></a>
			<br><br>
			<a href="http://www.eggslab.net/import-excel-file-data-in-mysql-database-using-php" class="link">&larr; Back to Article</a> | <a href="http://demos.eggslab.net/" class="link">More Demos &rarr;</a>
		</div>
	</div> -->
	 <hr style="margin-top:100px;" />
    <div style="border:1px dashed #333333; width:300px; margin:0 auto; padding:10px;">
    
	<form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>
<?php
	include ("connection.php");
	
	if(isset($_POST["submit"]))
	{
		$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
			$id = $filesop[0];
			$userid = $filesop[1];
			$name = $filesop[2];
			$email = $filesop[3];
			$mobile = $filesop[4];
			$post = $filesop[5];

			
			$sql = mysql_query("INSERT INTO users (fullname, userid, email, mobile, usertype) VALUES ('$name','$userid','$email','$mobile','$post')");
			$c = $c + 1;
			
		}
		
			if($sql){
				echo "You database has imported successfully. You have inserted ". $c ." recoreds";
			}else{
				echo "Sorry! There is some problem.";
			}

	}
?>
    
    </div>
    <hr style="margin-top:300px;" />	
    
   <!--  <div align="center" style="font-size:18px;"><a href="http://www.eggslab.net">&copy; Eggs Lab</a></div> -->

</body>
</html>