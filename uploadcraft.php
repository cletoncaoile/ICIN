<!DOCTYPE html>
<html>
<head>
<title>Upload Craft</title>
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
              			<li><a id="m" href="uploadcraft">Crafted Item</a></li>
              			
             		</ul>
			 	</li>
			 		<li class="dropdown"> <a id="menu" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Category</a>
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

			<p><input class="form-control" id ="searchicon" type="text" name="" placeholder="Search"></input>
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
            <li><a href="craftview"><img src="images/team/cleton.jpg" alt="">Kaka Upload na Craft</a></li>
            <li><a href="craftview"><img src="images/team/cleton.jpg" alt="">Kaka Upload na Craft</a></li>
            <li><a href="craftview"><img src="images/team/cleton.jpg" alt="">Kaka Upload na Craft</a></li>
            <li><a href="craftview"><img src="images/team/cleton.jpg" alt="">Kaka Upload na Craft</a></li>
            <li><a href="craftview"><img src="images/team/cleton.jpg" alt="">Kaka Upload na Craft</a></li>
            <li><a href="craftview"><img src="images/team/cleton.jpg" alt="">Kaka Upload na Craft</a></li>
            <li><a href="craftview"><img src="images/team/cleton.jpg" alt="">Kaka Upload na Craft</a></li>
            <li><a href="craftview"><img src="images/team/cleton.jpg" alt="">Kaka Upload na Craft</a></li>
            <li><a href="craftview"><img src="images/team/cleton.jpg" alt="">Kaka Upload na Craft</a></li>
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
            <h2 style="background-color: #00AF66"><span style="background-color:#003000">Upload Recycled Craft</span></h2>
           	<div class="col-sm-12">
           		 <input class="form-control" type="text" name="" placeholder="Name of your recycled project">
           	</div>
             
              <div class="col-sm-3">
              	<br><label>Choose Category</label>
             <select class="form-control" id="Category">
    			<option>All Category</option>
   			 <option>Clothes</option>
   			 <option>Decoration</option>
   			 <option>Furnitures</option>
 			 </select>
              </div>
              <div class="col-sm-3">
              	<br><label>Choose Difficulty</label>
             <select class="form-control" id="Category">
    			<option>Easy</option>
   			 <option>Intermediate</option>
   			 <option>Advance</option>
   			 </select>
              </div>
              <div class="col-sm-3">
                
              	<br><label>Choose Status</label>
              	 <select class="form-control" id="Category">
    			<option value="For Sale">For Sale</option>
   			 <option value="Not For Sale">Not For Sale</option>
   			</select>
              </div>
             <div id="prices" class="col-sm-3">
             	<br><label>Price</label>
             	<input class="form-control" type="text" name="" placeholder="Price">
             </div>


             <div class="col-sm-12">
             	<br><label>Choose image of your output Recycled Craft (max 4 pictures)</label>
             <input class="form-control" type="file" name="">
             <br><input class="form-control" type="file" name="">
             <br><input class="form-control" type="file" name="">
             <br><input class="form-control" type="file" name="">
             <br><label>Imbed</label>
             <br><input class="form-control" type="text" name="" placeholder="Embed Script">
             <br><textarea rows="3" class="form-control" placeholder="Description"></textarea>
             <br><textarea rows="3" class="form-control" placeholder="Material used"></textarea>
         	    
              <br><div id="tbstep"></div>
          </div>
             <div align="right" class="col-sm-12">
              


             	<br><button class="btn btn-primary" onclick="generateRow()">Add Step</button><button class="btn btn-success">Save&Continue</button>
             </div>
              
            
            
          </div>
         
          
        </div>
      </div>


      <div class="col-sm-4">
        <div class="latest_post">
          <h2 style="background-color: #00AF66"><span style="background-color:#003000">Most Popular</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/team/cleton.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">Most Rated Craft</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/team/cleton.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">Most Rated Craft</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/team/cleton.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">Most Rated Craft</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/team/cleton.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">Most Rated Craft</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/team/cleton.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">Most Rated Craft</a> </div>
                </div>
              </li>
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
  function generateRow() {
var tbstep=document.getElementById("tbstep");

tbstep.innerHTML+="<p><label>Choose Picture for Step 1</label><br><input class='form-control' type='file' name='1' value=''></p><p><textarea rows='3' class='form-control' placeholder='Step1'></textarea></p>";
}
</script>