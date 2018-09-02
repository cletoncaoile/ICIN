<?php 
session_start();
if (!isset($_SESSION["logusername"])){
    header('Location: login');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Craft Store</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 <!--Banner-->
   <link rel="stylesheet" href="css/styleko1.css" />

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
 





<style type="text/css">
	#prod{
  color:white;
  background-color:#00AF66;
}
.form-control:focus{
  border-color: #00AF66;  box-shadow: none; -webkit-box-shadow: none;
} 
	#menu:hover{
		background-color: black;
		
	}
	#m:hover{
		background-color: #003000;
		width: 158px;
	}
	#menu1,#m{
		background-color: #00AF66;
	}
	#prev-button,#next-button{
		color: #003000;
	}
	
.scrollToTop{
	background-color:#003000;
}
.scrollToTop:hover{
	background-color:#00AF66;
	
}
.effect-layla:hover{
	background-color: #00AF66;
}
#profpic{
	
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100px;
    height: 100px;
    border-radius: 50%;
}

#notif{
  background-color: #00AF66;
  color: #ffff;
}
#notif:hover{
  background-color: #003000;
  color: #ffff;
}
#notif1{
  background-color: #000000 ;
  color: #00AF66;
}
</style>

</head>
<body>
<div id="preloader">
  
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
	

<header class="navbar navbar-inverse" role="navigation" style="background-color: #00AF66">
    		<div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>

    		<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12" >
			 <div id="navbar1" class="navbar-collapse collapse">
        <div class="header_top_right">
            
            <ul class="top_nav">
            	<li><img src="images/logo.png" style="height: 80px; width: 150px"></li>
            	<li class="dropdown"> <a id="menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Upload Item</a>
            		<ul id="menu1" class="dropdown-menu" role="menu">
              			<li><a id="m" href="uploadcraft?id=">Crafted Item</a></li>
              			
             		</ul>
			 	</li>
			 	<li class="dropdown"> <a id="menu" name="menu" href="mainmenu?Category=All" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category</a>
                <ul id="menu1" class="dropdown-menu" role="menu">
                    <li><a id="m" href="mainmenu?Category=All&id=&idcom=">All Category</a></li>
                    <li><a id="m" href="mainmenu?Category=Furnitures&id=&idcom=">Furnitures</a></li>
                    <li><a id="m" href="mainmenu?Category=Clothes&id=&idcom=">Clothes</a></li>
                    <li><a id="m" href="mainmenu?Category=Decoration&id=&idcom=">Decorations</a></li>
                    <li><a id="m" href="mainmenu?Category=Others&id=&idcom=">Others</a></li>
                </ul>
        </li>
          <li class="dropdown"> <a id="menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Craft Store</a>
                <ul id="menu1" class="dropdown-menu" role="menu">
                    <li><a id="m" href="craftstore?id=&idcom=">Crafted Items</a></li>
                    
                </ul>
        </li>
              <li class="dropdown"> <a id="menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Notification
        <?php
            require 'db.php';
            $idcraft=$_GET['id'];
            if($con){
              $sql="SELECT COUNT(tbcomment.idcraft),tbcraft.username from `tbcomment` INNER JOIN `tbcraft` ON tbcraft.idcraft=tbcomment.idcraft where tbcomment.status = 'unread' AND tbcraft.username='".$_SESSION['logusername']."' order by `datecomment` DESC";
              $result=mysqli_query($con,$sql);
              if(mysqli_num_rows($result)>0){
                  if($row=mysqli_fetch_array($result)){
                if($row[0]!='0'){
                  echo "<span style='background-color: red' class='badge'>".$row[0]."</a>";
                }
                
              }
              }

            
            

            }


         ?>
         
           <ul id="menu1" class="dropdown-menu" role="menu">
            <?php 
              require 'db.php';
              $idcraft=$_GET['id'];
              if($con){
                $sql="SELECT tbuser.profilepic,tbuser.fn,tbuser.ln,tbcomment.idcomment,tbcomment.idcraft,tbcomment.comment,tbcomment.datecomment,tbcomment.timecomment,tbcraft.username FROM tbuser INNER JOIN tbcomment ON tbuser.username=tbcomment.username INNER JOIN tbcraft ON tbcraft.idcraft=tbcomment.idcraft WHERE tbcomment.status='unread' AND tbcraft.username='".$_SESSION['logusername']."' ORDER BY idcomment DESC";
              $result=mysqli_query($con,$sql);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                echo " <li>
                <a href='craftview?id=".$row['idcraft']."&idcom=".$row['idcomment']."' id='notif'>";
                  echo '<img width="30px" height="30px" src="data:image/jpeg;base64,'.base64_encode( $row['profilepic'] ).'"/>';
                  echo "".$row['fn'].", ".$row['ln']." commented on your post.<br>".$row['datecomment']." at ".$row['timecomment']."</a>
              </li>";
              }
              }
              else{
               echo '<h4 style="color:white;">No Record Yet..</h4>';
              }
              
              $idcomment=$_GET['idcom'];
              $sqlup="UPDATE tbcomment SET status='read' WHERE idcraft='".$idcraft."' AND idcomment='".$idcomment."'";
              mysqli_query($con,$sqlup);
              }
            ?>
            
              </ul>

        </li>
              


             
              
      			

            </ul>
          </div>

          <div class="header_top_right">

			<p>
				<input class="form-control" id ="tbsearch" type="text" name="" placeholder="Search"></input>
			</p>
			
          </div>
        </div>
      </div>
    </div>

  </header>

    <?php require 'recentlyniloguser.php'; ?>


    
<!-- display google map -->
<section >
    <br><div class="row">
      <div class="col-sm-12">
      <div class="single_post_content">
            <h2 style="background-color: #00AF66"><span style="background-color:#003000">Store Locations</span></h2>
          
           </div>
           <div class="container-fluid">
          
           </div>
             

      
</div>
<div class="col-sm-2">
  
</div>
    <div class="col-sm-8">
      <input class="form-control" type="text" id="mapsearch" placeholder="Search Location"><br>
    </div>
   <div class="col-sm-2">
     
   </div>
  </section>
  
  <div id="map"></div><br>
  <section id="sliderSection">
    <br><div class="row">
      <div class="col-sm-8">
        <div class="slick_slider">
         
         <div class="single_post_content">
            <h2 style="background-color: #00AF66"><span style="background-color:#003000">Recycled Crafts</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
           <div class="container-fluid">
                 <?php 
                require 'db.php'; 
            
            $sqlrecent="SELECT * FROM tbuser WHERE username='".$_SESSION['logusername']."'";
            $resultrecent=mysqli_query($con,$sqlrecent);
            if($row = mysqli_fetch_array($resultrecent)){
                echo "<h3 style='color:#003000;'>Hi!  <label style='color:#00AF66;'>" . ucfirst($row['fn']) . " ".ucfirst($row['ln'])."</label> wishing you all the best!ahaha</h3>";
            }
            
            ?>
           </div>
           
            <?php 
            require 'db.php';
          if($con){
             $sqldisplay="SELECT * FROM tbcraft WHERE status='For Sale'";
          $resultdisplay=mysqli_query($con,$sqldisplay);
          while($row=mysqli_fetch_array($resultdisplay)){
            echo "<ul class='photograph_nav  wow fadeInDown'>";
              echo " <li>";
              echo "<div class='photo_grid'>";
              echo "<figure class='effect-layla'>";
              echo "<p id='prod'>".$row['namecraft']."<br>".$row['category']."</p>";
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview?id=".$row['idcraft']."&idcom=' title='Photography Ttile 1'>";
             echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output1'] ).'"/>';
              echo "</a> </figure>";
              echo "</div>";
              echo "</li>";
              echo "</ul>";
          }
          }
              
              
            ?>
             
            </ul>
          </div>
         
          
        </div>
      </div>
      <div class="col-sm-4">
        <div class="latest_post">
          <h2 style="background-color: #00AF66"><span style="background-color:#003000">Top Users/Contributors</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
           
              <?php 
              require 'db.php';
              if($con){

                $sqldisplayuser="SELECT SUM(tbcraft.idcraft),count(tbcraft.idcraft) as count,tbuser.username,tbuser.fn,tbuser.ln,tbuser.profilepic FROM tbcraft INNER JOIN tbuser ON tbcraft.username=tbuser.username GROUP BY username ORDER BY SUM(idcraft) DESC LIMIT 5";
                $resultuser=mysqli_query($con,$sqldisplayuser);
                while($row=mysqli_fetch_array($resultuser)){
                  echo "<li>";
                  echo "<div class='media'>";
                  echo "<a href='profile?user=".$row['username']."&id=&idcom=' class='media-left'>";
                  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['profilepic'] ).'"/>';
                  echo "</a>";
                  echo "<div class='media-body'><br><a href='profile?user=".$row['username']."&id=&idcom=' class='catg_title' style='color:#003000;'><strong>".ucfirst($row['fn']).", ".ucfirst($row['ln'])." </strong> </a><br><label style='color:#00AF66'><strong>".$row['count']." Craft Shared</strong></label></div>";
                  echo " </div>";
                  echo "</li>";
                }
              }

            ?>
            
            </ul>
            <div id="next-button"><i class="fa fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
       <!--banner-->
<br><br>
    <section id="banner">
      <div class="inner">
          <h1>Want to put your Location?</h1>
          
        
        </div>
        <video autoplay loop muted playsinline src="images/video/howmap.mp4"></video>
      </section>
      <br><br>
    </div>

   
  </section>
<style>

    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
 /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
    #map {
        height: 80%;
    }
</style>
<style type="text/css">
  #menu:hover{
    background-color: black;
    
  }
  #m:hover{
    background-color: #003000;
    width: 158px;
  }
  #menu1,#m{
    background-color: #00AF66;
  }
  #prev-button,#next-button{
    color: #003000;
  }
  
.scrollToTop{
  background-color:#003000;
}
.scrollToTop:hover{
  background-color:#00AF66;
  
}
.effect-layla:hover{
  background-color: #00AF66;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<?php
include 'locations_model.php';
//get_unconfirmed_locations();exit;
?>

    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw&libraries=places">
    </script>

   
    <script>
        /**
         * Create new map
         */
        var infowindow;
        var map;
        var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
        var green_icon =  'http://maps.google.com/mapfiles/ms/icons/green-dot.png' ;
        var locations = <?php get_confirmed_locations() ?>;
        var myOptions = {
            zoom: 10,
            center: new google.maps.LatLng(15.9882, 120.5736),
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);

        /**
         * Global marker object that holds all markers.
         * @type {Object.<string, google.maps.LatLng>}
         */
        var markers = {};


          map = new google.maps.Map(document.getElementById('map'), myOptions);
             var marker = new google.maps.Marker({
                position:{
                    lat:15.9882,
                    lng:120.5736
                },
                map:map,
                draggable:true
             });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));

        google.maps.event.addListener(searchBox,'places_changed',function(){
            var places=searchBox.getPlaces();

            var bounds=new google.maps.LatLngBounds();
            var i,place;

            for(i=0;place=places[i];i++){
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry,location);
            }
            map.fitBounds(bounds);
            map.setZoom(15);
        });

        /**
         * Concatenates given lat and lng with an underscore and returns it.
         * This id will be used as a key of marker to cache the marker in markers object.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {string} Concatenated marker id.
         */
        var getMarkerUniqueId= function(lat, lng) {
            return lat + '_' + lng;
        };

        /**
         * Creates an instance of google.maps.LatLng by given lat and lng values and returns it.
         * This function can be useful for getting new coordinates quickly.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {google.maps.LatLng} An instance of google.maps.LatLng object
         */
        var getLatLng = function(lat, lng) {
            return new google.maps.LatLng(lat, lng);
        };

        /**
         * Binds click event to given map and invokes a callback that appends a new marker to clicked location.
         */
        var addMarker = google.maps.event.addListener(map, 'click', function(e) {
            var lat = e.latLng.lat(); // lat of clicked point
            var lng = e.latLng.lng(); // lng of clicked point
            var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
            var marker = new google.maps.Marker({
                position: getLatLng(lat, lng),
                map: map,
                animation: google.maps.Animation.DROP,
                id: 'marker_' + markerId,
                html: "    <div id='info_"+markerId+"'>\n" +
                "        <table class=\"map1\">\n" +
                "            <tr>\n" +
                "                <td><a>Description:</a></td>\n" +
                "                <td><textarea  id='manual_description' placeholder='Information ex(address, contact number)'></textarea></td></tr>\n" +
                "            <tr><td></td><td><input type='button' value='Save' onclick='saveData("+lat+","+lng+")'/></td></tr>\n" +
                "        </table>\n" +
                "    </div>"
            });
            markers[markerId] = marker; // cache marker in markers object
            bindMarkerEvents(marker); // bind right click event to marker
            bindMarkerinfo(marker); // bind infowindow with click event to marker
        });

        /**
         * Binds  click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */
        var bindMarkerinfo = function(marker) {
            google.maps.event.addListener(marker, "click", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                infowindow = new google.maps.InfoWindow();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
                // removeMarker(marker, markerId); // remove it
            });
        };

        /**
         * Binds right click event to given marker and invokes a callback function that will remove the marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that the handler will binded.
         */
        var bindMarkerEvents = function(marker) {
            google.maps.event.addListener(marker, "rightclick", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                removeMarker(marker, markerId); // remove it
            });
        };

        /**
         * Removes given marker from map.
         * @param {!google.maps.Marker} marker A google.maps.Marker instance that will be removed.
         * @param {!string} markerId Id of marker.
         */
        var removeMarker = function(marker, markerId) {
            marker.setMap(null); // set markers setMap to null to remove it from map
            delete markers[markerId]; // delete marker instance from markers object
        };


        /**
         * loop through (Mysql) dynamic locations to add markers to map.
         */
        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon :   locations[i][4] === '1' ?  red_icon  : green_icon,
                html: "<div>\n" +
                "<table class=\"map1\">\n" +
                "<tr>\n" +
                "<td><a>Description:</a></td>\n" +
                "<td><textarea disabled id='manual_description' placeholder='Information ex(address, contact number)'>"+locations[i][3]+"</textarea></td></tr>\n" +
                "</table>\n" +
                "</div>"
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow = new google.maps.InfoWindow();
                    confirmed =  locations[i][4] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][4]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][3]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

        /**
         * SAVE save marker from map.
         * @param lat  A latitude of marker.
         * @param lng A longitude of marker.
         */
        function saveData(lat,lng) {
            var description = document.getElementById('manual_description').value;
            var url = 'locations_model.php?add_location&description=' + description + '&lat=' + lat + '&lng=' + lng;
            downloadUrl(url, function(data, responseCode) {
                if (responseCode === 200  && data.length > 1) {
                    var markerId = getMarkerUniqueId(lat,lng); // get marker id by using clicked point's coordinate
                    var manual_marker = markers[markerId]; // find marker
                    manual_marker.setIcon(green_icon);
                    infowindow.close();
                    infowindow.setContent("<div style=' color: #00AF66; font-size: 25px;'> Waiting for admin confirm!!</div>");
                    infowindow.open(map, manual_marker);

                }else{
                    console.log(responseCode);
                    console.log(data);
                    infowindow.setContent("<div style='color: red; font-size: 25px;'>Inserting Errors</div>");
                }
            });
        }

        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;

            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    callback(request.responseText, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

         $("#tbsearch").on('keyup', function (e) {
    var value = $('#tbsearch').val();
      if (e.keyCode == 13) {
         window.location.href = "searchpage?id="+value;
      }
  });

    </script>











<footer class="text-center" style="color:#ffff; background-color: #00AF66">
   © I Craft It Now
  2018 All Rights Reserved.      

        
      </footer>
	
</body>
</html>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>


