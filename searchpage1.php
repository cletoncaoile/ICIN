<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
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

</head>
<style type="text/css">
  .form-control:focus{
  border-color: #00AF66;  box-shadow: none; -webkit-box-shadow: none;
} 
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
              <li><a id="menu" href="index?id=">Home</a></li>
              <li><a id="menu" href="about">About</a></li>
              <li><a id="menu" href="contact?id=">Contact</a></li>
      
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

  
 <?php require 'recentlyniuser.php';?>
  <section id="newsSection">
   <div class="row">
      <div class="col-sm-8">
        <div class="single_post_content">
      <h2 style="background-color: #00AF66"><span style="background-color:#003000">Result</span></h2>
       <!--Search Result-->
      <?php
        if($con){
        $id=$_GET['id'];
         $sqldisplay="SELECT * FROM tbcraft WHERE  idcraft LIKE '%".$id."%' OR username LIKE '%".$id."%' OR method LIKE '%".$id."%' OR dateshared LIKE '%".$id."%' OR timeshared LIKE '%".$id."%' OR namecraft LIKE '%".$id."%' OR category LIKE '%".$id."%' OR difficulty LIKE '%".$id."%' OR status LIKE '%".$id."%' OR price LIKE '%".$id."%' OR description LIKE '%".$id."%' OR materials LIKE '%".$id."%'";
          $resultdisplay=mysqli_query($con,$sqldisplay);
          if(mysqli_num_rows($resultdisplay)>0){
             while($row=mysqli_fetch_array($resultdisplay)){
            echo "<ul class='photograph_nav  wow fadeInDown'>";
              echo " <li>";
              echo "<div class='photo_grid'>";
              echo "<figure class='effect-layla'>";
              echo "<p id='prod'>".$row['namecraft']."<br>".$row['category']."</p>";
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview1?id=".$row['idcraft']."&idcom=' title='Photography Ttile 1'>";
             echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output1'] ).'"/>';
              echo "</a> </figure>";
              echo "</div>";
              echo "</li>";
              echo "</ul>";
          }
          }
          else{
            echo '<img src="images/noresult.png" style="height: 60%; width: 100%">';
          }
         
        }
      ?>
       

       



    </div>
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
<!--banner-->

  <section id="banner">
        <div class="inner">
          <h1><em>"YOU ONLY FAIL WHEN YOU STOP TRYING."</em></h1>
          <h2><em>"You can't live a positive life with a negative mind."</em></h2>
        </div>
        <video autoplay loop muted playsinline src="images/video/banner1.mp4"></video>
      </section>



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
<script type="text/javascript">
  $("#tbsearch").on('keyup', function (e) {
    var value = $('#tbsearch').val();
      if (e.keyCode == 13) {
         window.location.href = "searchpage1?id="+value;
      }
  });
</script>