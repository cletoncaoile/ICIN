<!DOCTYPE html>
<html>
<head>
	<title>I Craft It Now</title>
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
   <link rel="stylesheet" href="css/styleko.css" />





<style type="text/css">
#prod{
  color:white;
  background-color:#00AF66;
}
	#menu:hover{
	background-color:black;
	
}

.active{
	background-color: #003000;
}
#prev-button,#next-button{
	color:#003000;
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

</head>
<body>
<div id="wait">
  
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
              <li class="active"><a id="menu" href="index?id=">Home</a></li>
              <li><a id="menu" href="about">About</a></li>
              <li><a id="menu" href="contact?id=">Contact</a></li>
      
            </ul>
          </div>

          <div class="header_top_right">

			<p><input class="form-control" id ="searchicon" type="text" name="" placeholder="Search"></input>
			</p>
          </div>
        </div>
      </div>
    </div>

  </header>


<?php require 'recentlyniuser.php';?>

  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/carousel/2.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">diko alam ilalagay ko dito</a></h2>
              <p>pati dito sudggest naman kau</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/carousel/1.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">diko alam ilalagay ko dito</a></h2>
              <p>pati dito sudggest naman kau</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/carousel/3.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">diko alam ilalagay ko dito</a></h2>
              <p>pati dito sudggest naman kau</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/carousel/3.png" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">diko alam ilalagay ko dito</a></h2>
              <p>pati dito sudggest naman kau</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2 style="background-color: #00AF66"><span style="background-color:#003000">Most Popular</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
               <?php 
                  require 'db.php';
                  $idcraft=$_GET['id'];

                  $sqlmost="SELECT tbuser.fn,tbuser.ln,tbuser.username,tbcraft.category, tbcraft.idcraft,tbcraft.namecraft,tbcraft.output1,AVG(tbrating.noofrating) FROM tbcraft INNER JOIN tbrating ON tbcraft.idcraft=tbrating.idcraft INNER JOIN tbuser ON tbuser.username=tbcraft.username GROUP BY tbcraft.idcraft,tbcraft.output1 ORDER BY AVG(tbrating.noofrating) DESC LIMIT 5";
                  $resultmost=mysqli_query($con,$sqlmost);
                  while($row=mysqli_fetch_array($resultmost)){
                    echo" <li>
                <div class='media'> <a href='#' class='media-left'>";
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output1'] ).'"/></a>';
                echo " <div class='media-body'> <a href='craftview1?id=".$row['idcraft']."' class='catg_title' style='color:#003000'><strong>".$row['namecraft']."</strong></a><br><label style='color:#00AF66'><strong>".ucfirst($row['fn']).", ".ucfirst($row['ln'])."<br> ".$row['category']."</strong></label></div>
                </div>
              </li>";
                  }

              ?>
             
                 
              
            </ul>
            <div id="next-button"><i class="fa fa-chevron-down"></i></div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <section id="sliderSection">
  	<div class="row">
      <div class="col-sm-8">
        <div class="slick_slider">
         
         <div class="single_post_content">
            <h2 style="background-color: #00AF66"><span style="background-color:#003000">Recycled Crafts</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <?php 
            require 'db.php';
          if($con){
             $sqldisplay="SELECT * FROM tbcraft";
          $resultdisplay=mysqli_query($con,$sqldisplay);
          while($row=mysqli_fetch_array($resultdisplay)){
            echo "<ul class='photograph_nav  wow fadeInDown'>";
              echo " <li>";
              echo "<div class='photo_grid'>";
              echo "<figure class='effect-layla'>";
              echo "<p id='prod'>".$row['namecraft']."<br>".$row['category']."</p>";
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview1?id=".$row['idcraft']."' title='Photography Ttile 1'>";
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

                $sqldisplayuser="SELECT SUM(tbcraft.idcraft),count(tbcraft.idcraft) as count,tbuser.username,tbuser.fn,tbuser.ln,tbuser.profilepic FROM tbcraft INNER JOIN tbuser ON tbcraft.username=tbuser.username GROUP BY username ORDER BY SUM(idcraft) DESC LIMIT 10";
                $resultuser=mysqli_query($con,$sqldisplayuser);
                while($row=mysqli_fetch_array($resultuser)){
                  echo "<li>";
                  echo "<div class='media'>";
                  echo "<a href='#' class='media-left'>";
                  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['profilepic'] ).'"/>';
                  echo "</a>";
                  echo "<div class='media-body'><br><a href='pages/single_page.html' class='catg_title' style='color:#003000;'><strong>".ucfirst($row['fn'])."  ".ucfirst($row['ln'])." </strong> </a><br><label style='color:#00AF66'>".$row['count']." Craft Shared</label></div>";
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
    </div>

    <br><br><!--banner-->
    <section id="banner">
        
        <video autoplay loop muted playsinline src="images/video/banner2.mp4"></video>

      </section>
 	<br><br>
  </section>

  
  
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