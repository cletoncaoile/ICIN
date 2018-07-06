
<?php
session_start();
if (!isset($_SESSION["logusername"])){
    header('Location: login');
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Main Menu</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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


<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>

   
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

</style>
    
 
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
			 		<li class="dropdown"> <a id="menu" name="menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category</a>
            		<ul id="menu1" class="dropdown-menu" role="menu">
              			<li><a id="m" href="mainmenu">All Category</a></li>
              			<li><a id="m" href="mainmenu">Furnitures</a></li>
              			<li><a id="m" href="mainmenu">Clothes</a></li>
              			<li><a id="m" href="mainmenu">Decorations</a></li>
             		</ul>
			 	</li>
			 		<li class="dropdown"> <a id="menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Craft Store</a>
            		<ul id="menu1" class="dropdown-menu" role="menu">
              			<li><a id="m" href="craftstore">Crafted Items</a></li>
              			
             		</ul>
			 	</li>
             
              
      			

            </ul>
          </div>

          <div class="header_top_right">

			<p><input class="form-control" id ="tbsearch" type="text" name="tbsearch" placeholder="Search"></input>
			</p>
          </div>
        </div>
      </div>
    </div>

  </header>

        <div class="row">
          <div class="col-sm-11">
             <div class="latest_newsarea" style="background-color: #00AF66"> <span style="background-color:#003000">Recently Uploaded</span>
          <ul id="ticker01" class="news_sticker">
             <?php
             require 'db.php'; 
            
            $sqlrecent="SELECT * FROM tbcraft  ORDER BY idcraft DESC";
            $resultrecent=mysqli_query($con,$sqlrecent);
            while($row = mysqli_fetch_array($resultrecent)){
              echo "<li><a href='craftview?id=".$row['idcraft']."'>";
               echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output1'] ).'"/>';
              echo "".$row['namecraft']."</a></li>";

            }

            ?>
            
          </ul>
         
        </div>
          </div>
          <div class="col-sm-1">
            <a class="btn btn-danger" href="logout">Logout</a>
          </div>
        </div>
       
   

<section id="sliderSection">
  	<br><div class="row">
      <div class="col-sm-8">
        <div class="slick_slider">
        
         <div class="single_post_content">
            <h2 style="background-color: #00AF66"><span style="background-color:#003000">Recycled Crafts</span></h2>
             <?php 

            echo "<h3 style='color:#003000;'>Hi!  <label style='color:#00AF66;'>" . ucfirst($_SESSION["logusername"]) . "</label> wishing you all the best!ahaha</h3>";
            ?>
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
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview?id=".$row['idcraft']."' title='Photography Ttile 1'>";
             echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output1'] ).'"/>';
              echo "</a> </figure>";
              echo "</div>";
              echo "</li>";
              echo "</ul>";
          }
          }
              
              
            ?>
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

    <!--banner-->
<br><br>
    <section id="banner">
    	<div class="inner">
          <h1>Never Stop Learning</h1>
          <p>We encourage people to reutelized there recyclable material.<br>We Encourage people to bring back the beauty of nature.</p>
        
        </div>
        <video autoplay loop muted playsinline src="images/video/banner.mp4"></video>
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
