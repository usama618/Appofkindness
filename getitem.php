<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
 
  <style type="text/css">
    #map{
      height: 500px;
      margin: 0;
    }
  </style>
</head>
<body>
<?php
	include('connect.php');
  include('menu.php');
?>
<?php
  session_start();
		$id= $_GET['userid'];
    $donid=$_GET['donid'];
    $userrcvid=$_SESSION['id'];

    $sql="SELECT * from donorlocation where userid=$id AND donid=$donid";
    $qry=mysqli_query($con,$sql);
    $result=mysqli_fetch_assoc($qry);
    $lat=$result['lat'];
    $lng=$result['lng'];

    $sql4="SELECT * from donations where donid=$donid";
    $qry4=mysqli_query($con,$sql4);
    $result4=mysqli_fetch_assoc($qry4);

    $itemname=$result4['item'];


    if (isset($_POST['getitem'])) {
        
        $sql1="INSERT into donationprogress(itemname,usersendid,userrcvid,donid,lat,lng) values ('$itemname','$id','$userrcvid','$donid','$lat','$lng') ";
        $qry1=mysqli_query($con,$sql1);
        

        $sql3="DELETE from donorlocation where donid=$donid";
        $qry3=mysqli_query($con,$sql3);


        $sql2="DELETE from donations where donid=$donid";
        $qry2=mysqli_query($con,$sql2);


       
        header('location:donationsprogress.php');

    }
    
?>




<div class="container">

<div class="row">
  

  <div class="col-md-6">
    <button>Get Item</button>
  </div>

</div>
<div class="row"></div>




    </div>
    <div class="row" style="padding-top: 80px; padding-left: 20px;">
      <form method="post">
          <button name="getitem">Get Item</button>
      </form>
    </div>
    <div class="row">
    <form method="post">
      
    </form>
     </div>
     <div class="row">
      <h3 style="padding-left: 20px;">Search your location</h3>
       <input type="text" id="mapsearch" size="50">
     </div>
    <div class="row">
      <button id="get" style="padding-left: 20px;">Get Directions</button>
       <div id="map"></div>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJGefhRg_H4Bdb7PXDfqSHY0U1ZxjjdvU&callback&sensor=false&libraries=places"
        ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

       <script>
       
          if (navigator.geolocation) { //Checks if browser supports geolocation
   navigator.geolocation.getCurrentPosition(function (position) {                                                              //This gets the
     var latitude = position.coords.latitude;                    //users current
     var longitude = position.coords.longitude; 
     console.log(latitude);

     var directionsService = new google.maps.DirectionsService();
     var directionsDisplay = new google.maps.DirectionsRenderer();

     var map;

     var mylocation=new google.maps.LatLng(latitude,longitude);
     var donorlocation=new google.maps.LatLng( <?php  echo $result['lat'];   ?>  , <?php  echo $result['lng'];   ?>   ) ;

     var mapOptions={
      zoom:14,
      center: mylocation
     };

     map= new google.maps.Map(document.getElementById('map'),mapOptions);
     directionsDisplay.setMap(map);

     function calculateRoute(){
      var request={
        origin: mylocation,
        destination: donorlocation,
        travelMode: 'DRIVING'
      };
      directionsService.route(request, function(result,status){
          if (status=="OK") {
            directionsDisplay.setDirections(result);
          }
      });
     }

     document.getElementById('get').onclick=function(){
        calculateRoute();
     };


   });
 }
          
      
         

    </script>
    

    </div>
    </div>

</div>

</body>
</html>