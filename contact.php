<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
  <style type="text/css">
 body{
    background: url("http://www.photos-public-domain.com/wp-content/uploads/2012/05/ivory-off-white-paper-texture.jpg");
    background-color: white;
 }   
    #contact{
    background-color:#f1f1f1;
    font-family: 'Roboto', sans-serif;
}

#contact .well{
    margin-top:30px;
    border-radius:0;
}

#contact .form-control{
    border-radius: 0;
    border:2px solid #1e1e1e;
}

#contact button{
    border-radius:0;
    border:2px solid #1e1e1e;
}

#contact .row{
    margin-bottom:30px;
}

@media (max-width: 768px) { 
    #contact iframe {
        margin-bottom: 15px;
    }
    
}


  </style>
</head>
<body>

<?php
  include('menu.php');
?>
  <section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>About Us</strong></h3>
    </div>
  
  <div class="row">
    <div id="about" class="section-padding">
    <div class="container">
      <div class="row" style="padding-bottom: 50px; padding-top: 50px;">
        <div class="page-title text-center">
          <h1 style="color: #003366 ">Meet Our Team</h1>
          
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div class="autoplay" style="padding-left: 200px;">
          <div class="col-md-6">
                  <div class="team-info">
                    <div class="img-sec">
                    <img src="img/usama.jpg" class="img-circle img-responsive" style="height: 300px;">
                    </div>
                    <div class="fig-caption" >
                      <h2 style="padding-left: 35px;">Mutayyab Usama</h2>
                    <h3 style="padding-left: 65px;">Web Developer</h3>
                    <p class="marb-20" style="padding-left: 65px;">Impressive Technical Skills</p>
                    
                    </div>
                  </div>
          </div>
          <div class="col-md-6">
                  <div class="team-info">
                    <div class="img-sec">
                    <img src="img/kaleem.jpg" class="img-circle img-responsive" style="height: 300px;">
                    </div>
                    <div class="fig-caption" >
                      <h2 style="padding-left: 20px;">Kaleem Ur Rehman</h2>
                    <h3 style="padding-left: 45px;">Android Developer</h3>
                    <p class="marb-20" style="padding-left: 60px;">Impressive Technical Skills</p>
                    
                    </div>
                  </div>
          </div>
          
        </div>
      </div>    
    </div>
  </div>

      
    </div>
  </div>
</section>


</body>
</html>