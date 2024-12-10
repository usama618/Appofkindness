<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <title></title>
  <style type="text/css">
    .mail-box {
    border-collapse: collapse;
    border-spacing: 0;
    display: table;
    table-layout: fixed;
    width: 100%;
}
.mail-box aside {
    display: table-cell;
    float: none;
    height: 100%;
    padding: 0;
    vertical-align: top;
}

.mail-box .lg-side {
    background: none repeat scroll 0 0 #fff;
    border-radius: 0 4px 4px 0;
    width: 75%;
    padding-top: 52px;
}

.user-head .inbox-avatar {
    float: left;
    width: 65px;
}









ul.inbox-nav li {
    display: inline-block;
    
    width: 100%;
}
ul.inbox-nav li a {
    color: #6a6a6a;
    display: inline-block;
    line-height: 45px;
    padding: 0 20px;
    width: 100%;
}

ul.inbox-nav li a i {
    color: #6a6a6a;
    font-size: 16px;
    padding-right: 10px;
}
ul.inbox-nav li a span.label {
    margin-top: 13px;
}
ul.labels-info li h4 {
    color: #5c5c5e;
    font-size: 13px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    text-transform: uppercase;
}
ul.labels-info li {
    margin: 0;
}
ul.labels-info li a {
    border-radius: 0;
    color: #6a6a6a;
}
ul.labels-info li a:hover, ul.labels-info li a:focus {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}
ul.labels-info li a i {
    padding-right: 10px;
}
.nav.nav-pills.nav-stacked.labels-info p {
    color: #9d9f9e;
    font-size: 11px;
    margin-bottom: 0;
    padding: 0 22px;
}
.inbox-head {
    background: none repeat scroll 0 0 #CCCC99;
    border-radius: 0 4px 0 0;
    color: #fff;
    min-height: 80px;
    padding: 20px;

}
.inbox-head h3 {
    display: inline-block;
    font-weight: 300;
    margin: 0;
    padding-top: 6px;
}
.inbox-head .sr-input {
    border: medium none;
    border-radius: 4px 0 0 4px;
    box-shadow: none;
    color: #8a8a8a;
    float: left;
    height: ;
    padding: 0 10px;
}
.inbox-head .sr-btn {
    background: none repeat scroll 0 0 #00a6b2;
    border: medium none;
    border-radius: 0 4px 4px 0;
    color: #fff;
    height: 20px;
    padding: 0 20px;
}
.table-inbox {
    border: 1px solid #d3d3d3;
    margin-bottom: 0;
    width:100%;
    border-radius: 10px;
}
.table-inbox tr td {
    padding: 12px !important;
}
.table-inbox tr td:hover {
    cursor: pointer;
}
.table-inbox tr td .fa-star.inbox-started, .table-inbox tr td .fa-star:hover {
    color: #f78a09;
}
.table-inbox tr td .fa-star {
    color: #d5d5d5;
}
.table-inbox tr.unread td {
    background: none repeat scroll 0 0 #f7f7f7;
    font-weight: 600;
}
ul.inbox-pagination {
    float: right;
}
ul.inbox-pagination li {
    float: left;
}
.mail-option {
    display: inline-block;
    margin-bottom: 10px;
    width: 100%;
}
.mail-option .chk-all, .mail-option .btn-group {
    margin-right: 5px;
}
.mail-option .chk-all, .mail-option .btn-group a.btn {
    background: none repeat scroll 0 0 #fcfcfc;
    border: 1px solid #e7e7e7;
    border-radius: 3px !important;
    color: #afafaf;
    display: inline-block;
    padding: 5px 10px;
}
.inbox-pagination a.np-btn {
    background: none repeat scroll 0 0 #fcfcfc;
    border: 1px solid #e7e7e7;
    border-radius: 3px !important;
    color: #afafaf;
    display: inline-block;
    padding: 5px 15px;
}
.mail-option .chk-all input[type="checkbox"] {
    margin-top: 0;
}
.mail-option .btn-group a.all {
    border: medium none;
    padding: 0;
}




}
ul {
    list-style-type: none;
    padding: 0px;
    margin: 0px;
}
 
  </style>
</head>
<body>
<?php
  include('menu.php');
  include('connect.php');
?>


  <div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 <div class="mail-box">





                 
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Inbox</h3>
                        
                      </div>


                      <div class="container" style="padding-bottom: 20px;">
                          <div class="row">
                              <div class="col-md-3">
                                <h1 style="color: blue;">  Name   </h1>
                              </div>
                              <div class="col-md-3">
                                 <h1> Message </h1>
                              </div>
                              <div class="col-md-3">
                                 <h1> Phone No </h1>
                              </div>
                          </div>
                      </div>



                        <?php
                       
                      //  $userrcv=$_SESSION['id'];
                      //  $sql="SELECT * from message where userrcvid='$userrcv' and opened=1";
                      //  $qry=mysqli_query($con,$sql);
                      //  $result=mysqli_fetch_assoc($qry);
                      //  $sender=$result['usersendid'];
                     //   $sql2="SELECT fname,pno from login where id=$sender";
                      //  $qry2=mysqli_query($con,$sql2);
                     //   $result2=mysqli_fetch_assoc($qry2);





                        $userrcv=$_SESSION['id'];
                        $sql="SELECT * from message where userrcvid='$userrcv' and opened=1";
                        $qry=mysqli_query($con,$sql);
                       
                        while ($result=mysqli_fetch_assoc($qry)) {
                           

                                 $sender=$result['usersendid'];
                        $sql2="SELECT fname,pno from login where id=$sender";
                        $qry2=mysqli_query($con,$sql2);
                        $result2=mysqli_fetch_assoc($qry2);



                        ?>

                       

                        <div class="container">
                            <div class="row">
                                <div class="col-md-3" ">
                                    <?php  echo $result2['fname'];      ?>
                                </div>
                                <div class="col-md-3">
                                    <?php  echo $result['text'];   ?>
                                </div>
                                <div class="col-md-3">
                                    <?php  echo $result2['pno'];   ?>
                                </div>
                                <div class="col-md-3">
                                    <button><a href="compose.php?rcvid=<?php  echo $sender;   ?>">Reply</a></button>
                                </div>
                            </div>
                        </div>


                          

                          <?php
                      }
                      ?>
                      </div>
                  </aside>
              </div>
</div>


</body>
</html>



