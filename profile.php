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


  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

<!--star-->
 

<link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="assets/jquery.min.js"></script>
    
    <script src="js/star-rating.min.js" type="text/javascript"></script>




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
<body onload="loadmycraft()">
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

      <p><input class="form-control" id ="tbsearch" type="text" name="tbsearch" placeholder="Search" onkeyup="loadmycraft()"></input>
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
              echo "<li><a href='craftview?id=".$row['idcraft']."&idcom='>";
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
            
           
            <div class="single_page_content">
               <div class="slick_slider">
            <div id="loadmycraft"></div>

        </div>
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
                      $user=$_GET['user'];

                      if($con){
                        $sqluser="SELECT * FROM tbuser WHERE username='".$user."'";
                        $resultuser=mysqli_query($con,$sqluser);
                        if($row=mysqli_fetch_array($resultuser)){
                           echo '<img id="profpic" src="data:image/jpeg;base64,'.base64_encode( $row['profilepic'] ).'"/>';
                           echo "<div style='color:#00AF66' class='author-contet' align='center'>
                      <h3 >".ucfirst($row['fn'])." ".ucfirst($row['ln'])."</h3> </div>
                  </div>";
                          echo "<div class='info project-name'>
                    <span style='color:#003000'>Sex: <em style='color:#00AF66'>".ucfirst($row['sex'])."</em></span>
                  </div>
                  <div class='info data-share'>
                    <span  style='color:#003000'>Phone: <em style='color:#00AF66'>".$row['phone']."</em></span>
                  </div>";
                        }
                      }

                    ?>
                     
                    
                     
                
                 
              
                        

                </div>
           

          </div>
         
        
        </aside>
      </div>

     
    
    </div>

   
  </section>


<footer class="text-center" style="color:#ffff; background-color: #00AF66">
   © I Craft It Now
  2018 All Rights Reserved.      

        
      </footer>
  <script type="text/javascript">

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
  function loadmycraft(){

     var search = document.getElementById("tbsearch").value;
       var user=<?=json_encode($_GET['user'])?>;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        
                document.getElementById("loadmycraft").innerHTML = this.responseText;
        
               
            }
        };
            
    xmlhttp.open("POST","loadmycrafts.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("a="+search+"&user="+user);
  }
</script>


