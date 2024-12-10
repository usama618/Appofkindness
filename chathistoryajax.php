<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .chat-body{

    }
  </style>
</head>
<body>
  <div class="container">
  <div class="member_list" style="padding-top: 50px;">
               <ul class="list-unstyled">


                  <?php    
                  include 'connect.php';
                  session_start();
                  $myid = $_SESSION['id'];
                  $stack = array();
                  $query = "SELECT * FROM chat WHERE rcvid = '$myid'";
                  //print_r($query);
                  $result = mysqli_query($con, $query);
                  while ($row1 = mysqli_fetch_array($result)) {
                    $push = $row1['senderid'];
                    array_push($stack, $push);
                  }


                  asort($stack);
                  $stackuni = array_unique($stack);
                   $stackcompleted = array_values(array_filter($stackuni));
                  $stack2 = array_count_values($stack);
                  $arrlength = count($stackcompleted);
                  for($x = 0; $x < $arrlength; $x++) {
                     $senderid = $stackcompleted[$x];
                   $query = "SELECT * FROM chat WHERE senderid = '$senderid' AND rcvid = '$myid' ORDER BY date DESC";
                   //print_r($query);
                        $qry2 = mysqli_query($con,$query);
                           $row2 = mysqli_fetch_array($qry2); 

                        $date = $row2['date'];

                        $createDate = new DateTime($date);
                        $strip = $createDate->format('F j, Y, g:i a');

                           ?>

                           <div class="contianer" style="padding-top: 15px; border-bottom: 1px dotted #B3A9A9; padding-bottom: 15px;">
                            <?php
                            //unset($_SESSION['msggid']);
                           // print_r($_SESSION['msggid']);
                            
                            $senderidd=$row2['senderid'];
                            print_r($senderidd);
                            $_SESSION['senderid']=$senderidd; 
                            
                            ?>
                <a href="inbox1.php?userid=<?php echo $row2['senderid']; 
                ?>&id=<?php echo $row2['senderid'];  ?>">  
      
                     <div class="container" style="color: black;  ">
                       
                     <div class="chat-body clearfix">
                        <div class="header_sec" style="font-size: 28px; color: blue;">
                           <strong class="primary-font"><?php 

                            $sql3="Select * from login where id=$senderid";
                            //print_r($sql3);
                            $qry3=mysqli_query($con,$sql3);
                            $row3=mysqli_fetch_assoc($qry3);
                            //echo "Name: ";
                            echo $row3['fname'];
                              echo "&nbsp";
                           echo $row3['lname'] ?></strong> <strong class="pull-right" style="font-size: 12px;">
                                    <?php echo $strip; ?></strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font"><?php echo $row2['msg'] ?></strong> 
                        </div>
                     </div>
                  </li>
                         
                       </div>
                     </div>


                



                </a>
                </div>


               <?php 

               } 

               ?>
                  
                          
               </ul>
            </div>
          </div>
</body>
</html>           




            