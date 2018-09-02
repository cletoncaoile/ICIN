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

</style><style type="text/css">
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

</style>

</head>
<body onload="allfunction()">
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

      <p><input class="form-control" id ="tbsearch" type="text" name="tbsearch" placeholder="Search" onkeyup="loadmycraft()"></input>
      </p>
          </div>
        </div>
      </div>
    </div>

  </header>


<?php require 'recentlyniuser.php';?>

<section id="sliderSection">
    <br><div class="row">
      <div class="col-sm-8">
        <div class="slick_slider">
         
         <div class="single_post_content">
            <h2 style="background-color: #00AF66"><span style="background-color:#003000">Recycled Crafts</span></h2>

           
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
    function loadindex(){
     
     var search = document.getElementById("tbsearch").value;
  
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        
                document.getElementById("loadindex").innerHTML = this.responseText;
        
               
            }
        };
            
    xmlhttp.open("POST","loadindex.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("a="+search);
 }
function allfunction(){
  loadindex();
  loadmycraft();

}
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
            
    xmlhttp.open("POST","loadmycraft1.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("a="+search+"&user="+user);
  }

 $("#tbsearch").on('keyup', function (e) {
    var value = $('#tbsearch').val();
      if (e.keyCode == 13) {
         window.location.href = "searchpage1?id="+value;
      }
  });
</script>