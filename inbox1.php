<?php
  session_start();
?>


<?php
include_once 'connect.php';
$senderid = $_SESSION['id'];
$rcvid = $_GET['userid'];
$_SESSION['send']=$senderid;
$send=$_SESSION['send'];
if(isset($_POST['chat-send'])){
  $msg = mysqli_real_escape_string($con,$_POST['msg']);
  //print_r($msg);
  //exit();
  // $uemail = mysqli_real_escape_string($conn,$_POST['email']);
   $senderid = $_SESSION['id'];
$rcvid = $_GET['userid'];
  $combinedid = $senderid.$rcvid;
  // $uemail = mysqli_real_escape_string($conn,$_POST['email']);
    $sql = "INSERT INTO `chat`( `senderid`, `rcvid`, `msg`, `combinedid`, `sender`) VALUES ('$senderid','$rcvid','$msg','$combinedid','$send')";
    print_r($sql);
    $result = mysqli_query($con,$sql);
    // if ($result) {
    //  echo "<embed loop ='false' src='ding.mp3' hidden='true' autoplay='true'></embed>";
    // }
  
}
?>








<!DOCTYPE html>
<html>

<head>
  <title>message</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
 <style type="text/css">

      .all{
  margin:0;
  padding:0;
  font-family: sans-serif;
  box-sizing: border-box;
}

.chatbox{
  width: 90%;
  min-width: 300px;
  height: 80%;
  background-color: white;
  padding: 25px;
  margin: 20px auto;
  margin-top: 5px;
  
  

}

.chatlogs{
  padding: 5px;
  width: 100%;
  height: 333px;
  overflow-x:hidden;
  overflow-y:scroll; 



}
.chatlogs::-webkit-scrollbar{
  width: 10px;
}
.chatlogs::-webkit-scrollbar-thumb{
  border-radius: 5px;
  background-color: grey;

}

.chat{
  display: flex;
  flex-flow: row wrap;
  align-items: flex-start;
  margin-bottom: 10px;
}
.chat .user-photo{
  width: 60px;
  height: 60px;
  background: #ccc;
  border-radius: 50%; 
  overflow: hidden;

}
.chat .user-photo img{
  width: 100%;
  height: 100%;

}

.chat .chat-message{
  width: 70%;
  padding: 15px;
  margin: 5px 10px 0;
  border-radius: 10px;
  color: #fff;
  font-size: 15px; 
}
.friend .chat-message{
  background: #3f344b;
}
.self .chat-message{
  background: #972a2a;
  order: -1;
}

.chat-form{
  margin-top: 10px;
  display: flex;
  align-items: flex-start;

}
.chat-form textarea{
  color: black;
  width: 80%;
  height: 50px;
  resize: none;
  border: 2px solid #e1edb0;
  border-radius: 5px;
  padding: 10px;
  font-size: 15px;

}
.chat-form  textarea:focus{
  background: #fff
}
.chat-form  textarea::-webkit-scrollbar{
  width: 10px;
}
.chat-form  textarea::-webkit-scrollbar-thumb{
  border-radius: 5px;
  background-color: grey;

}



}

  </style>
  <script>
    <?php
      $userid=$_GET['userid'];

    ?>
  function ajax(){
    var urll= "inboxajax.php";
    var params= "id=<?php echo $userid;  ?>";
    var req = new XMLHttpRequest();

    req.onreadystatechange = function(){
      if (req.readystate = 4 && req.status ==200) {
        document.getElementById('chat2').innerHTML = req.responseText;
      }
    }
    req.open('GET',"inbox1ajax.php"+"?"+params,true);
    req.send();
  }
  setInterval(function(){ajax()},500);
</script>
</head>
<body>
<?php
  include('menu.php');
  include('connect.php');
  
?>


  <div class="subheading"><h2>Chat</h2></div>
<section>

  <div class="all" >
<div class="chatbox">
  <div class="chatlogs" onload="ajax()">
    <div id="chat2"></div>

<!--    <div class="chat self">
      <div class="user-photo"><img src="photos/dhaba1.jpg"></div>
      <p class="chat-message">Yo!!</p>

    </div> -->

  </div>

<form action="inbox1.php?userid=<?php echo $rcvid?>" method="POST">
  <div class="chat-form">
    
    <input type="hidden" name="user" value="userID">
    <textarea name=" msg" placeholder="Type here...."></textarea>
    <button name="chat-send" type="submit" style="font-size:35px" class="btn btn-primary">Send</button>
</form>
  </div>




</div>
</div>
<br><br>
</section>
</div>



</body>
</html>



