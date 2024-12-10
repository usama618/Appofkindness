<!DOCTYPE html>
<html>
<head>
	<title>adddonation</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/form-mini.css">
 
  <style type="text/css">
  body{
    background:url('img/mainback.jpg');
    padding:50px;
}
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
         // $expiry=$_POST['expiry'];
          $houseno=$_POST['houseno'];
          $street=$_POST['street'];
          $secarea=$_POST['secarea'];
          $city=$_POST['city'];
          $category=$_POST['category'];
          $id=$_SESSION['id'];
          $lat=$_POST['lat'];
          $lng=$_POST['lng'];
          $details=$_POST['details'];

          if (!empty($item)&!empty($number)&!empty($houseno)&!empty($street)&!empty($secarea)&!empty($city)&!empty($category)&!empty($details))
          {
            
            $itemnumber=preg_match("/[0-9]/", $number);
            if ($itemnumber) {
              
                  $hno=preg_match("/[0-9]/", $houseno);
                  if ($hno) 
          {

            $stno=preg_match("/[0-9]/", $street);
            if ($stno) {
              
           



          
          $sql="INSERT into donations(userid,item,numberofitems,details,houseno,streetno,secarea,city,category) values('$id','$item','$number','$details','$houseno','$street','$secarea','$city','$category')";
          $qry=mysqli_query($con,$sql);



          $sql2="SELECT * from donations where userid=$id AND item='$item' AND details='$details' ";
          
          $qry2=mysqli_query($con,$sql2);
          $result2=mysqli_fetch_assoc($qry2);

          $donidd=$result2['donid'];
         



          $sql1="INSERT into donorlocation(userid,lat,lng,donid) values('$id','$lat','$lng','$donidd')";
          $qry1=mysqli_query($con,$sql1);
        }
        else{
          echo "Enter Valid Street Address";
        }
        }
        else{
          echo "Enter Valid House Number";
        }
        }
        else{
          echo "enter valid item number";
          exit();
        }

        }
        else{
          ?>
          <h3 style="color: red;">ENTER ALL FIELDS!</h3>
          <?php
          
          exit();
        }





          //---------------------------------------------------------------------------//

          $month=date('M');
          $sql12="SELECT month from monthly where month='$month' AND userid=$id";
          $qry12=mysqli_query($con,$sql12);
          if (mysqli_fetch_assoc($qry12)>0) {
              
              $sql13="UPDATE monthly SET donations=donations+1 where month='$month' AND userid=$id";
              $qry13=mysqli_query($con,$sql13);
          }
          else{

            $sql99="INSERT into monthly(userid,month,donations) values ('$id','Jan','0')";
            $qry99=mysqli_query($con,$sql99);
            $sql98="INSERT into monthly(userid,month,donations) values ('$id','Feb','0')";
            $qry98=mysqli_query($con,$sql98);
            $sql97="INSERT into monthly(userid,month,donations) values ('$id','Mar','0')";
            $qry97=mysqli_query($con,$sql97);
            $sql96="INSERT into monthly(userid,month,donations) values ('$id','Apr','0')";
            $qry96=mysqli_query($con,$sql96);
            $sql95="INSERT into monthly(userid,month,donations) values ('$id','May','0')";
            $qry95=mysqli_query($con,$sql95);
            $sql94="INSERT into monthly(userid,month,donations) values ('$id','Jun','0')";
            $qry94=mysqli_query($con,$sql94);
            $sql93="INSERT into monthly(userid,month,donations) values ('$id','Jul','0')";
            $qry93=mysqli_query($con,$sql93);
            $sql92="INSERT into monthly(userid,month,donations) values ('$id','Aug','0')";
            $qry92=mysqli_query($con,$sql92);
            $sql91="INSERT into monthly(userid,month,donations) values ('$id','Sep','0')";
            $qry91=mysqli_query($con,$sql91);
            $sql90="INSERT into monthly(userid,month,donations) values ('$id','Oct','0')";
            $qry90=mysqli_query($con,$sql90);
            $sql80="INSERT into monthly(userid,month,donations) values ('$id','Nov','0')";
            $qry80=mysqli_query($con,$sql80);
            $sql79="INSERT into monthly(userid,month,donations) values ('$id','Dec','0')";
            $qry79=mysqli_query($con,$sql79);



            $sql14="UPDATE monthly SET donations=donations+1 where month='$month' AND userid=$id";
            $qry14=mysqli_query($con,$sql14);
            
          }
          


         $sql100="SELECT * from doughnutdata";
         $query100=mysqli_query($con,$sql100);
         if (mysqli_fetch_assoc($query100)>0) {
            $sql101="UPDATE doughnutdata SET value=value+1 where category='$category'";
            mysqli_query($con,$sql101); 
         }
         else{

            $sql102="INSERT into doughnutdata(category,value) values('food','0')";
            mysqli_query($con,$sql102);
            $sql103="INSERT into doughnutdata(category,value) values('clothes','0')";
            mysqli_query($con,$sql103);
            $sql104="INSERT into doughnutdata(category,value) values('electronics','0')";
            mysqli_query($con,$sql104);
            $sql105="INSERT into doughnutdata(category,value) values('furniture','0')";
            mysqli_query($con,$sql105);
            $sql106="INSERT into doughnutdata(category,value) values('money','0')";
            mysqli_query($con,$sql106);
            $sql107="INSERT into doughnutdata(category,value) values('blood','0')";
            mysqli_query($con,$sql107);
            $sql108="INSERT into doughnutdata(category,value) values('others','0')";
            mysqli_query($con,$sql108);

            $sql109="UPDATE doughnutdata SET value=value+1 where category='$category'";
            mysqli_query($con,$sql109);


         }




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


          
              <h1>Enter details of Donation</h1>
            <form class="form-mini" method="post">

                <div class="form-row">

                    <input type="text" name="item" placeholder="Item name">
                </div>

                <div class="form-row">
                    <input type="text" name="number" placeholder="Number of items available">
                </div>
                <div class="form-row">
                  <input type="text" name="details" placeholder="Enter details of the item">
                </div>
                <div class="form-row">
                  <input type="text" name="houseno" placeholder="House number">
                </div>
                <div class="form-row">
                  <input type="text" name="street" placeholder="Street Number">
                </div>

                <div class="form-row">
                  <input type="text" name="secarea" placeholder="Enter Sector/Area">
                </div>


                <div class="form-row">

                  <input type="text" name="city" placeholder="City">
                </div>
                <div class="form-row">
                <h3>Choose Category</h3>
                  <select name="category">
                    <option value="food">Food</option>
                    <option value="clothes">Clothes</option>
                    <option value="electronics">Electronics</option>
                    <option value="furniture">Furtinure</option>
                    <option value="money">Money</option>
                    <option value="blood">Blood</option>
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