<?php 
	include 'connect.php';
	session_start();
	$senderid = $_SESSION['id'];
	//$rcvid=$_SESSION['senderid'];
	$rcvid=$_GET['id'];
	print_r($rcvid);
	
	//$rcvid = $_GET['userid'];
	$combinedID = $senderid.$rcvid;
	$combinedID1= $rcvid.$senderid;
	$query = "SELECT * FROM chat WHERE combinedID = '$combinedID' OR combinedID= '$combinedID1'";
	print_r($query);

	$result2 = mysqli_query($con,$query);
	while ($row2 = mysqli_fetch_assoc($result2)){

			if ($row2['senderid']==$senderid) {
		 ?>
		<div class="chat friend">
			<div class="user-photo"><img src="img/agent4.jpg"></div>
			<p class="chat-message">
			<?php echo $row2['msg']; ?></p><span style="color: white;"><?php //echo formatDate($row2['date']); ?></span>

		</div>
				<?php } 
				else
					{ ?>
				<div class="chat self">
			<div class="user-photo"><img src="img/agent4.jpg"></div>
			<p class="chat-message">			
			<?php echo $row2['msg'];?></p><span style="color: white;"> <?php //echo formatDate($row2['date']); ?></span></p>

		</div>

		<?php

		 } 
	} ?>
