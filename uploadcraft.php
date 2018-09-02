<?php 
session_start();
  require 'db.php';
  if (!isset($_SESSION["logusername"])){
    header('Location: login');
}
  
  if($con){
    if(isset($_POST["btnupload"])){
     $craftname=addslashes($_POST['craftname']);
   $category=addslashes($_POST['category']);
   $difficulty=addslashes($_POST['difficulty']);
   $stat=addslashes($_POST['stat']);
   $price=addslashes($_POST['price']);
    $outputpic0 = addslashes(file_get_contents($_FILES["outputpic0"]["tmp_name"]));
    $outputpic1 = addslashes(file_get_contents($_FILES["outputpic1"]["tmp_name"])); 
    $outputpic2 = addslashes(file_get_contents($_FILES["outputpic2"]["tmp_name"])); 
    $outputpic3 = addslashes(file_get_contents($_FILES["outputpic3"]["tmp_name"])); 
   date_default_timezone_set('Asia/Manila') ;
    $date = date('Y-m-d H:i:s');
$newDateTime = date('h:i A', strtotime($date));
   $video=addslashes($_POST['video']);
   $newvideo=substr($video, 32);
   $craftdesc=addslashes($_POST['craftdesc']);
   $craftmaterial=addslashes($_POST['craftmaterial']);
    $craftmethod=addslashes($_POST['craftmethod']);
    $sql="INSERT INTO tbcraft(username,method,dateshared,timeshared,namecraft,category,difficulty,status,price,output1,output2,output3,output4,video,description,materials,approveordisaprove)VALUES('".$_SESSION['logusername']."','$craftmethod','".$date."','$newDateTime','$craftname','$category','$difficulty','$stat','$price','$outputpic0','$outputpic1','$outputpic2','$outputpic3','$newvideo','$craftdesc','$craftmaterial','0')";
    if(mysqli_query($con,$sql)){
         echo '<script>alert("Successfully Uploaded")</script>'; 
         header('Location:steps?id='); 
     }
    else{
        echo '<script>alert("Upload Failed")</script>';  
    }
    }
    mysqli_close($con); 
  }

?>
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
  .form-control:focus{
  border-color: #00AF66;  box-shadow: none; -webkit-box-shadow: none;
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
#btnupload:hover{
  background-color: #003000;
}
#btnupload{
  background-color: #00AF66;
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

      <p><input class="form-control" id ="tbsearch" type="text" name="" placeholder="Search"></input>
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
            <h2 style="background-color: #00AF66"><span style="background-color:#003000">Upload Recycled Craft</span></h2>
            
          <?php 
                require 'db.php'; 
            
            $sqlrecent="SELECT * FROM tbuser WHERE username='".$_SESSION['logusername']."'";
            $resultrecent=mysqli_query($con,$sqlrecent);
            if($row = mysqli_fetch_array($resultrecent)){
                echo "<h3 style='color:#003000;'>Hi!  <label style='color:#00AF66;'>" . ucfirst($row['fn']) . " ".ucfirst($row['ln'])."</label> wishing you all the best!ahaha</h3>";
            }
            
            ?>

            <form method="post" enctype="multipart/form-data">
           	<div class="col-sm-12">
             
           		 <input class="form-control" type="text" name="craftname" id="craftname" placeholder="Name of your recycled project">
               <div id="errorCraftname"></div>
               
           	</div>
             
              <div class="col-sm-3">
              	<br><label>Choose Category</label>
             <select class="form-control" id="category" name="category">
    			<option value="All Category">All Category</option>
   			 <option value="Clothes">Clothes</option>
   			 <option value="Decoration">Decoration</option>
         <option value="Furnitures">Furnitures</option>
         <option value="Others">Others</option>
 			 </select>
        <div id="errorCategory"></div>
              </div>
              <div class="col-sm-3">
              	<br><label>Choose Difficulty</label>
             <select class="form-control" id="difficulty" name="difficulty">
    			<option value="Easy">Easy</option>
   			 <option value="Intermediate">Intermediate</option>
   			 <option value="Advance">Advance</option>
   			 </select>
         <div id="errorDifficulty"></div>
              </div>
              <div class="col-sm-3">
                
              	<br><label>Choose Status</label>
              	 <select class="form-control" id="stat" name="stat">
    			<option value="For Sale">For Sale</option>
   			 <option value="Not For Sale">Not For Sale</option>
   			</select>
        
              </div>
             <div id="prices" class="col-sm-3">
             	<br><label id="pricelabel">Price</label>
             	<input class="form-control" type="text" name="price" id="price" placeholder="Price">
              <div id="errorStatus"></div>
             </div>
             <div class="col-sm-12">
               <br><label>Choose image of your output Recycled Craft (4 pictures Required)</label>
             
             </div>
             <div class="col-sm-3">
                <input type="file" name="outputpic0" id="outputpic0" onchange="loadFile0(event)">
                <br><img src="img/noimage.jpg" height="80px" width="150px" id="output0"/>
                <div id="erroroutput1"></div>
              </div>
              <div class="col-sm-3">
                <input type="file" name="outputpic1" id="outputpic1" onchange="loadFile1(event)">
                <br><img src="img/noimage.jpg" height="80px" width="150px" id="output1"/>
                <div id="erroroutput2"></div>
              </div>
              <div class="col-sm-3">
                <input type="file" name="outputpic2" id="outputpic2" onchange="loadFile2(event)">
               <br> <img src="img/noimage.jpg" height="80px" width="150px" id="output2"/>
               <div id="erroroutput3"></div>
              </div>
              <div class="col-sm-3">
                <input type="file" name="outputpic3" id="outputpic3" onchange="loadFile3(event)">
                <br><img src="img/noimage.jpg" height="80px" width="150px" id="output3"/>
                <div id="erroroutput4"></div>
              </div>
             

             <div class="col-sm-12">
              <label>Video</label>
             <br><input class="form-control" type="text" id="video" name="video" placeholder="Copy the link of your youtube video">
             <div id="errorVideo"></div>
             <br><div class="input-group" id="craftmethod1">
          <span class="input-group-addon btn btn-success"disabled>Method</span><textarea rows="3" class="form-control" placeholder="Procedure" id="craftmethod" name="craftmethod"></textarea>
          <div id="errorMethod"></div>
        </div>
             <br><textarea rows="3" class="form-control"  placeholder="Description"  id="craftdesc" name="craftdesc"></textarea>
             <div id="errorDesc"></div>
             <br><textarea rows="3" class="form-control" placeholder="Material used" id="craftmaterial" name="craftmaterial"></textarea>
             <div id="errorMaterial"></div>
         	    
            
          </div>
             <div align="right" class="col-sm-12">
              


             	<br>

              <input class="btn btn-success" type="submit" name="btnupload" id="btnupload" value="Save & Continue">
              
            
             </div>


            
              </form>
            
            
          </div>
         
          
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

                  $sqlmost="SELECT tbuser.fn,tbuser.ln,tbuser.username,tbcraft.category, tbcraft.idcraft,tbcraft.namecraft,tbcraft.output1,AVG(tbrating.noofrating) FROM tbcraft INNER JOIN tbrating ON tbcraft.idcraft=tbrating.idcraft INNER JOIN tbuser ON tbuser.username=tbcraft.username GROUP BY tbcraft.idcraft,tbcraft.output1 ORDER BY AVG(tbrating.noofrating) DESC";
                  $resultmost=mysqli_query($con,$sqlmost);
                  while($row=mysqli_fetch_array($resultmost)){
                    echo" <li>
                <div class='media'> <a href='craftview?id=".$row['idcraft']."&idcom=' class='media-left'>";
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
  var loadFile0 = function(event) {
    var output = document.getElementById('output0');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadFile1 = function(event) {
    var output = document.getElementById('output1');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadFile2 = function(event) {
    var output = document.getElementById('output2');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadFile3 = function(event) {
    var output = document.getElementById('output3');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
$(document).ready(function() {
    $("#price").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

  $(document).ready(function () {
        $('#stat').change(function () {
            if ($('#stat').val() == 'For Sale') {
                $('#price').show();
                $('#pricelabel').show();
            }
            else {
                $('#price').hide();
                $('#pricelabel').hide();
            }
        });
    });

 $(document).ready(function(){  
      $('#btnupload').click(function(){
            var craftname=$('#craftname').val();  
            var category=$('#category').val();
            var difficulty=$('#difficulty').val();
            var stat=$('#stat').val();
            var price=$('#price').val();
            var outputpic0=$('#outputpic0').val();
            var outputpic1=$('#outputpic1').val();
            var outputpic2=$('#outputpic2').val();
            var outputpic3=$('#outputpic3').val();
            var video=$('#video').val();
            var craftdesc=$('#craftdesc').val();
            var craftmaterial=$('#craftmaterial').val();
            var craftmethod=$('#craftmethod').val(); 
            

           if(craftname == '')  
           {  
              
                document.getElementById("errorCraftname").innerHTML = "<div class='alert alert-danger'>Please fill up Name of your Recycled Project.</div>";
                document.getElementById("craftname").focus();
                 $("#errorCraftname").fadeIn();
                $("#errorCraftname").fadeOut(5000);

                return false;  
           }  
           else if(category == "All Category")  
           {  
              
                document.getElementById("errorCategory").innerHTML = "<div class='alert alert-danger'>Please Choose Category</div>";
                document.getElementById("category").focus();
                 $("#errorCategory").fadeIn();
                $("#errorCategory").fadeOut(5000);

                return false;  
           }
            else if($('#stat').val() == 'For Sale')
           {
            if($('#price').val()==""){
              
               document.getElementById("errorStatus").innerHTML = "<div class='alert alert-danger'>Please fill up the price</div>";
                document.getElementById("price").focus();
                 $("#errorStatus").fadeIn();
                $("#errorStatus").fadeOut(5000);

                return false;  
            }
           }
        
           else if(outputpic0 == "")  
           {  
              
                document.getElementById("erroroutput1").innerHTML = "<div class='alert alert-danger'>Please Choose valid Image File</div>";
                document.getElementById("outputpic0").focus();
                 $("#erroroutput1").fadeIn();
                $("#erroroutput1").fadeOut(5000);

                return false;  
           }
            else if(outputpic1 == "")  
           {  
              
                document.getElementById("erroroutput2").innerHTML = "<div class='alert alert-danger'>Please Choose valid Image File</div>";
                document.getElementById("outputpic1").focus();
                 $("#erroroutput2").fadeIn();
                $("#erroroutput2").fadeOut(5000);

                return false;  
           }
            else if(outputpic2 == "")  
           {  
              
                document.getElementById("erroroutput3").innerHTML = "<div class='alert alert-danger'>Please Choose valid Image File</div>";
                document.getElementById("outputpic2").focus();
                 $("#erroroutput3").fadeIn();
                $("#erroroutput3").fadeOut(5000);

                return false;  
           }
          else if(outputpic3 == "")  
           {  
              
                document.getElementById("erroroutput4").innerHTML = "<div class='alert alert-danger'>Please Choose valid Image File</div>";
                document.getElementById("outputpic3").focus();
                 $("#erroroutput4").fadeIn();
                $("#erroroutput4").fadeOut(5000);

                return false;  
           }
            else if(video == "")  
           {  
              
                document.getElementById("errorVideo").innerHTML = "<div class='alert alert-danger'>Please Copy the link of your Youtube video</div>";
                document.getElementById("video").focus();
                 $("#errorVideo").fadeIn();
                $("#errorVideo").fadeOut(5000);

                return false;  
           }
          
            else if(craftdesc == "")  
           {  
              
                document.getElementById("errorDesc").innerHTML = "<div class='alert alert-danger'>Please fill up the Description</div>";
                document.getElementById("craftdesc").focus();
                 $("#errorDesc").fadeIn();
                $("#errorDesc").fadeOut(5000);

                return false;  
           }
            else if(craftmaterial == "")  
           {  
              
                document.getElementById("errorMaterials").innerHTML = "<div class='alert alert-danger'>Please type the material used</div>";
                document.getElementById("craftmaterial").focus();
                 $("#errorMaterials").fadeIn();
                $("#errorMaterials").fadeOut(5000);

                return false;  
           }
             else  
           {  
                var extension = $('#outputpic0').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     document.getElementById("message").innerHTML = "<div class='alert alert-danger'>Please Choose valid Image File</div>";  
                     $('#outputpic0').val('');  
                     return false;  
                }  
                 var extension = $('#outputpic1').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     document.getElementById("message").innerHTML = "<div class='alert alert-danger'>Please Choose valid Image File</div>";  
                     $('#outputpic1').val('');  
                     return false;  
                }  
                var extension = $('#outputpic2').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     document.getElementById("message").innerHTML = "<div class='alert alert-danger'>Please Choose valid Image File</div>";  
                     $('#outputpic2').val('');  
                     return false;  
                }
                var extension = $('#outputpic3').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     document.getElementById("message").innerHTML = "<div class='alert alert-danger'>Please Choose valid Image File</div>";  
                     $('#outputpic3').val('');  
                     return false;  
                }  
           
                
           }
           
           
           
      });  
 });  
 $("#tbsearch").on('keyup', function (e) {
    var value = $('#tbsearch').val();
      if (e.keyCode == 13) {
         window.location.href = "searchpage?id="+value;
      }
  });
</script>