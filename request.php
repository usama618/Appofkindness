<!DOCTYPE html>
<html>
<head>
	<title>request</title>
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
				if (isset($_POST['submit'])) {
          $item=$_POST['item'];
          $number=$_POST['number'];
          $expiry=$_POST['expiry'];
          $houseno=$_POST['houseno'];
          $street=$_POST['street'];
          $city=$_POST['city'];
          $category=$_POST['category'];
          $id=$_SESSION['id'];
          $lat=$_POST['lat'];
          $lng=$_POST['lng'];
          
          $sql="INSERT into requests(userid,item,numberofitems,houseno,streetno,city,category) values('$id','$item','$number','$houseno','$street','$city','$category')";
          
          $qry=mysqli_query($con,$sql);
          $sql1="INSERT into requestlocation(userid,lat,lng) values('$id','$lat','$lng')";
          $qry1=mysqli_query($con,$sql1);
          header('location:confirmation.php');



        }



?>




<div class="container">
<div class="row">
  
  

</div>
<div class="row"></div>

<div class="main-content">

        <!-- You only need this form and the form-mini.css -->

        <div class="form-mini-container">


          
              <h1>Enter item you require</h1>
            <form class="form-mini" method="post">

                <div class="form-row">

                    <input type="text" name="item" placeholder="Item name">
                </div>

                <div class="form-row">
                    <input type="text" name="number" placeholder="Number of items available">
                </div>
                
                <div class="form-row">
                  <input type="text" name="houseno" placeholder="House number">
                </div>
                <div class="form-row">
                  <input type="text" name="street" placeholder="Street Number">
                </div>
                <div class="form-row">
                  <input type="text" name="city" placeholder="City">
                </div>
                <div class="form-row">
                <h3>Choose Category</h3>
                  <select name="category">
                    <option value="food">Food</option>
                    <option value="clothes">Clothes</option>
                    <option value="electronics" "electronics">Electronics</option>
                    <option value="others">Others</option>
                  </select>
                </div>
                <input type="hidden" name="lat" id="lat">
                <input type="hidden" name="lng" id="lng">

                

                
                
                <div class="form-row form-last-row">
                    <button type="submit" name="submit">Submit Form</button>
                </div>

            </form>
        </div>


    </div>
    <div class="row" style="align-items: center;">
      <h3  style="text-align: center;">Add your location</h3>
    </div>
    <div class="row">
    <form method="post">
      
    </form>
     </div>
     <div class="row">
      <h3>Search your location</h3>
       <input type="text" id="mapsearch" size="50">
     </div>
    <div class="row">
       <div id="map"></div>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJGefhRg_H4Bdb7PXDfqSHY0U1ZxjjdvU&callback&sensor=false&libraries=places"
        ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

       <script>
     
       

        var map = new google.maps.Map(document.getElementById('map'),{
          center: new google.maps.LatLng(33.68,72.83),
          
          zoom: 7,
          
        });
        //marker

        var marker= new google.maps.Marker({
          position:{
          lat:33.68,
          lng:72.83
          },
          map: map,
          draggable: true
        });
          
       google.maps.event.addListener(marker,'dragend',function(){
        
        var lat=marker.getPosition().lat();
        var lng=marker.getPosition().lng();

        console.log(lat);
        console.log(lng);

        $('#lat').val(lat);
        $('#lng').val(lng);
        
       });
       
       
        var input = document.getElementById('mapsearch');
        var searchBox = new google.maps.places.SearchBox(input);
        
        google.maps.event.addListener(searchBox, 'places_changed',function(){
            var places= searchBox.getPlaces();
            var bounds= new google.maps.LatLngBounds();
            var i,place;
            for (i = 0; place=places[i]; i++) {
              bounds.extend(place.geometry.location);
             marker.setPosition(place.geometry.location);
            var lat1=place.geometry.location.lat();
            var lng1=place.geometry.location.lng();

            console.log(lat1);
            console.log(lng1);
            $('#lat').val(lat1);
            $('#lng').val(lng1);
            }

            map.fitBounds(bounds);
            map.setZoom(15);
        });

    </script>
    

    </div>
    </div>

</div>

</body>
</html>