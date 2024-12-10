<?php
        session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">

  <title></title>
  <style type="text/css">
    body{
        background-color: #f7f7f7;
    }
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
.mail-box .sm-side {
    background: none repeat scroll 0 0 #e5e8ef;
    border-radius: 4px 0 0 4px;
    width: 25%;
    padding-top: 52px;
}
.mail-box .lg-side {
    background: none repeat scroll 0 0 #fff;
    border-radius: 0 4px 4px 0;
    width: 75%;
    padding-top: 52px;
}
.mail-box .sm-side .user-head {
    background: none repeat scroll 0 0 #00a8b3;
    border-radius: 4px 0 0;
    color: #fff;
    min-height: 80px;
    padding: 10px;
}
.user-head .inbox-avatar {
    float: left;
    width: 65px;
}
.user-head .inbox-avatar img {
    border-radius: 4px;
}
.user-head .user-name {
    display: inline-block;
    margi-n: 0 0 0 10px;
}
.user-head .user-name h5 {
    font-size: 14px;
    font-weight: 300;
    margin-bottom: 0;
    margin-top: 15px;
}
.user-head .user-name h5 a {
    color: #fff;
}
.user-head .user-name span a {
    color: #87e2e7;
    font-size: 12px;
}
a.mail-dropdown {
    background: none repeat scroll 0 0 #80d3d9;
    border-radius: 2px;
    color: #01a7b3;
    font-size: 10px;
    margin-top: 20px;
    padding: 3px 5px;
}
.inbox-body {
    padding: 20px;
}


ul.inbox-nav {
    display: ;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
}
.inbox-divider {
    border-bottom: 1px solid #d5d8df;
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









            <?php
              
            if (isset($_POST['submit'])) {
                $userrcvid=$_GET['rcvid'];
                $usersendid=$_SESSION['id'];
                $msg=$_POST['msg'];
                

                $sql="INSERT into message(usersendid,userrcvid,text,opened) values('$usersendid','$userrcvid','$msg','1')";
                $qry=mysqli_query($con,$sql);
               // $sql2="UPDATE message set opened=0 where usersendid=$usersendid";
               // $qry2=mysqli_query($con,$sql2);

            }
                
                


                

            ?>
 <div class="mail-box">
                  
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Compose</h3>
                         
                      </div>
                     <div>

                        <div class="modal-body">
                        <div class="row">
                            <div class="col-md-2" style="
                            padding-left: 115px; padding-top: 40px;padding-bottom: 15px; font-family: Comic sans ms; color: blue; font-weight: bold;



                            ">

                                <p>To:</p>
                            </div>
                            <div class="col-md-2" style=" padding-top: 40px;padding-bottom: 15px; font-weight: bold;">
                                <?php
                                $id=$_GET['rcvid'];

                                $sql1="SELECT fname,lname from login where id=$id";
                                $qry1=mysqli_query($con,$sql1);
                                $result1=mysqli_fetch_assoc($qry1);
                                echo $result1['fname'];
                                echo "\t";
                                echo $result1['lname'];


                                ?>
                            </div>
                        </div>
                                <form method="post" class="form-horizontal">
                                
                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Message</label>
                                <div class="col-lg-10">
                                 <textarea rows="10" cols="30" class="form-control" id="msg1" name="msg">
                                            
                                          </textarea>
                                      </div>
                                  </div>

                          <div style="padding-left: 90%;">
                                                 
                            <button class="btn btn-send" type="submit" name="submit">Send</button>
                          </div>
                                              
                            </form>
                        </div>
                         
                      </div>
                  </aside>
              </div>
</div>


</body>
</html>



