
<?php 
session_start();
require('rating.php');
?>
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

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

<!--star-->
 

<link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> --> 
   <script type="text/javascript" src="assets/jquery.min.js"></script>
    
    
    <script src="js/star-rating.min.js" type="text/javascript"></script>




<style type="text/css">
.form-control:focus{
  border-color: #00AF66;  box-shadow: none; -webkit-box-shadow: none;
} 
#com:hover,#coms:hover{
  color:#00AF66;
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
<body onload="loadcomment()">
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
              			<li><a id="m" href="uploadcraft?id=&idcom=">Crafted Item</a></li>
              			
             		</ul>
			 	</li>
			 		<li class="dropdown"> <a id="menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category</a>
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
       

<section id="sliderSection">
  	<br><div class="row">
      <div class="col-sm-8">
        <div class="slick_slider">
         
         <div class="single_post_content">
            <h2 style="background-color: #00AF66"><span style="background-color:#003000">How to Make</span></h2>

            <?php 
                require 'db.php'; 
            
            $sqlrecent="SELECT * FROM tbuser WHERE username='".$_SESSION['logusername']."'";
            $resultrecent=mysqli_query($con,$sqlrecent);
            if($row = mysqli_fetch_array($resultrecent)){
                echo "<h3 style='color:#003000;'>Hi!  <label style='color:#00AF66;'>" . ucfirst($row['fn']) . " ".ucfirst($row['ln'])."</label> wishing you all the best!ahaha</h3>";
            }
            
            ?>
            <div class="slick_slider">
         <div class="left_content">
          <div class="single_page">
            <?php 
              require 'db.php';
                $idcraft = $_GET['id'];
              if($con){

                $sqldiscarousel="SELECT * FROM tbcraft  WHERE idcraft='$idcraft'";
                $resultcarousel=mysqli_query($con,$sqldiscarousel);
                   while($row = mysqli_fetch_array($resultcarousel)){
                    echo"<h1 style='color:#00AF66'>".$row['namecraft']."</h1>";
                    echo " <div class='post_commentbox' id='com'> <a href='#' id='com'><i class='fa fa-report'></i>Report</a> <span id='com'><i class='fa fa-calendar'></i>".$row['category']."</span> <a id='coms'><i class='fa fa-tags'></i>Comment</a> </div>";
                    echo " <div class='single_page_content'>
               <div class='slick_slider'>
           <div class='slick_slider'>";
           echo "<div class='single_iteam'> <a href='#'>";
               echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output1'] ).'"/>';
              echo "</a></div>";
              echo "<div class='single_iteam'> <a href='#'>";
               echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output2'] ).'"/>';
              echo "</a></div>";
               echo "<div class='single_iteam'> <a href='#'>";
               echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output3'] ).'"/>';
              echo "</a></div>";
              echo "<div class='single_iteam'> <a href='#'>";
               echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output4'] ).'"/>';
              echo "</a></div>";

            }

                
              }
            ?>
          </div>

        </div>
              <?php 
                require 'db.php';
                $idcraft = $_GET['id'];
                $sqlmethod="SELECT * FROM tbcraft WHERE idcraft='$idcraft'";
                $resultmethod=mysqli_query($con,$sqlmethod);
                if($row=mysqli_fetch_array($resultmethod)){
                     echo " <div class='input-group'>
                      <span class='input-group-addon btn btn-success'disabled>Method</span><h3 style='color:#00AF66'>&nbsp;".$row['method']."</h3>
                    </div>";
                    echo " <br><div class='input-group'>
                      <span class='input-group-addon btn btn-success'disabled>Materials</span><p style='color:#00AF66'>&nbsp;".$row['materials']."</p>
                    </div>";
                   
                     
                 }
              ?>
              
            <?php 
               require 'db.php';
               $idcraft=$_GET['id'];
               $sqlstep="SELECT * FROM tbsteps WHERE idcraft='$idcraft'";
               $resultstep=mysqli_query($con,$sqlstep);
               while($row=mysqli_fetch_array($resultstep)){
              echo '<div class=col-sm-12>
              <br><img width="100%" height="500" src="data:image/jpeg;base64,'.base64_encode( $row['stepphoto'] ).'"/><br>
              </div>';
                echo "<div class='input-group'>
              <span class='input-group-addon btn btn-green'disabled>Step<br>".$row['noofstep']."</span><p style='color:#00AF66'>&nbsp;
                ".$row['steps']."</p>
                </div>";
               
             
               }

            ?>
        
          <?php 
            require 'db.php';
            if($con){
              $idcraft=$_GET['id'];
              $sql="SELECT * FROM tbcraft WHERE idcraft='$idcraft'";
              $result=mysqli_query($con,$sql);
                if($row=mysqli_fetch_array($result)){
                  echo "<div class='col-sm-12'>";
                  echo "<h3 style='color:#00AF66'>Video</h3>
        <div role='tabpanel' class='tab-pane' id='video'>";
                echo "  <div class='vide_area'>
                  <iframe width='100%' height='315' src='https://www.youtube.com/embed/".$row['video']."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
                </div>";
                }

              
            }

          ?>  
			 
			 </div>

			</div>

            
             
</div>
</div>
			<h3 style="color:#00AF66">Comment</h3>
			   <div class="col-sm-12">
			   	 	<div class="act-time">

           
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                         <div id="loadhere"></div>
                       
                           
                            

                        </div>
                        <br>



                        
                    <div class="form-group">
                      <textarea rows="3" class="form-control" placeholder="Write a Comment.." id="combox" name="combox"></textarea>
                 
                    </div>
                    <button type="submit" class="btn btn-info" name="btncomment" id="btncomment" onclick="insertcomment()">Send</button>
              

                      </div>

                       
			   </div>


		


</div>
</div>
 </div>
</div>
</div>

 <div class="col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2 style="background-color: #00AF66;"><span style="background-color: #003000">Profile</span></h2>
           

           <div class="single-project-sidebar">
                  <div class="about-author">
                    	
                    
                      <?php 
                        require 'db.php';
                        if ($con) {
                         $idcraft=$_GET['id'];
                         $sqlprofile="SELECT tbcraft.idcraft,tbcraft.timeshared, tbuser.username,tbuser.profilepic,tbuser.fn,tbuser.ln,tbcraft.namecraft,tbcraft.status,tbcraft.price,tbcraft.dateshared,tbcraft.category FROM tbuser INNER JOIN tbcraft ON tbuser.username=tbcraft.username WHERE tbcraft.idcraft='$idcraft'";
                         $resultprofile=mysqli_query($con,$sqlprofile);
                         if($row=mysqli_fetch_array($resultprofile)){
                         echo '<img id="profpic" src="data:image/jpeg;base64,'.base64_encode( $row['profilepic'] ).'"/>';
                         echo "<div style='color:#00AF66' class='author-contet' align='center'>";
                          echo "<h3 >".ucfirst($row['fn'])." ".ucfirst($row['ln'])."</h3>  </div>
                          </div>";
                          echo "<div class='info project-name'>
                    <span style='color:#003000'>Craft Name: <em style='color:#00AF66'>".$row['namecraft']."</em></span>
                  </div>
                  <div class='info data-share'>
                    <span  style='color:#003000'>Date shared: <em style='color:#00AF66'>".$row['dateshared']." at ".$row['timeshared']."</em></span>
                  </div>
                  <div class='info category'>
                    <span style='color:#003000'>Category: <em style='color:#00AF66'>".$row['category']."</em></span>
                  </div>
                  <div class='info category'>
                    <span style='color:#003000'>Status: <em style='color:#00AF66'>".$row['status']."</em></span>
                  </div>
                  <div class='info category'>
                    <span style='color:#003000'>Price: <em style='color:#00AF66'> ₱ ".$row['price']."</em></span>
                  </div>";
                   

                         }
                        }
                        mysqli_close($con);
                        
                        
                      ?>
                      
                      <table>
                          <tr>
                            <td style='color:#003000'>Ratings:</td>
                            <td><input value='<?= getRatingByProductId(connect(), 2); ?>' type='number' class='rating' min=0 max=5 step=0.1 data-size='md' data-stars='5' idcraft=<?=$_GET['id']   ?>></td>
                            
                          </tr>
                          <tr>
                            <td><span id="starmessage"></span></td>
                          </tr>
                        </table>
                  </div>
           

          </div>
         
        
        </aside>
      </div>


      <div class="col-sm-4">
        <div class="latest_post">
          <h2 style="background-color: #00AF66"><span style="background-color:#003000">Most Popular</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <?php 
                  require 'db.php';
                  $idcraft=$_GET['id'];

                  $sqlmost="SELECT tbuser.fn,tbuser.ln,tbuser.username,tbcraft.category, tbcraft.idcraft,tbcraft.namecraft,tbcraft.output1,AVG(tbrating.noofrating) FROM tbcraft INNER JOIN tbrating ON tbcraft.idcraft=tbrating.idcraft INNER JOIN tbuser ON tbuser.username=tbcraft.username GROUP BY tbcraft.idcraft,tbcraft.output1 ORDER BY AVG(tbrating.noofrating) DESC";
                  $resultmost=mysqli_query($con,$sqlmost);
                  while($row=mysqli_fetch_array($resultmost)){
                    echo" <li>
                <div class='media'> <a href='#' class='media-left'>";
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output1'] ).'"/></a>';
                echo " <div class='media-body'> <a href='craftview?id=".$row['idcraft']."&idcom=' class='catg_title' style='color:#003000'><strong>".$row['namecraft']."</strong></a><br><label style='color:#00AF66'><strong>".ucfirst($row['fn']).", ".ucfirst($row['ln'])."<br> ".$row['category']."</strong></label></div>
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


<footer class="text-center" style="color:#ffff; background-color: #00AF66">
   © I Craft It Now
  2018 All Rights Reserved.      

        
      </footer>
	<script type="text/javascript">
    $(document).ready(function(){
$('#coms').click(function(){
    $('#combox').focus();
    loadcomment();
});
});
  $(function(){
               $('.rating').on('rating.change', function(event, value, caption) {
                idcraft = $(this).attr('idcraft');
                $.ajax({
                  url: "rating.php",
                  dataType: "json",
                  data: {noofrating:value, idcraft:idcraft, type:'save'},
                  success: function( data ) {
                     document.getElementById('starmessage').innerHTML="thank you for voting!";
                  },
              error: function(e) {
                 
                console.log(e);
              },
              timeout: 30000  
            });
              });

           


        });
   function insertcomment(){
   var combox = document.getElementById("combox").value;
    var idcraft=<?=json_encode($_GET['id'])?>;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById('combox').value="";
               loadcomment();
               
            }
        };
            
    xmlhttp.open("POST","processcomment.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("a="+combox+"&id="+idcraft);
   }

   function loadcomment(){
   
    var idcraft=<?=json_encode($_GET['id'])?>;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("loadhere").innerHTML = this.responseText;
               
               
            }
        };
            
    xmlhttp.open("POST","loadcomment.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("id="+idcraft);
   }


</script>
</body>
</html>

<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
   $("#tbsearch").on('keyup', function (e) {
    var value = $('#tbsearch').val();
      if (e.keyCode == 13) {
         window.location.href = "searchpage?id="+value;
      }
  });
</script>


