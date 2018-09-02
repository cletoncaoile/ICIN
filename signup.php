
<?php  
 require 'db.php';
 if($con){

  if(isset($_POST["insert"]))  
 {  
  $signusername=addslashes($_POST['signusername']);
  $signfn=addslashes($_POST['signfn']);
  $signln=addslashes($_POST['signln']);
  $signsex=addslashes($_POST['signsex']);
  $file = addslashes(file_get_contents($_FILES["signprofile"]["tmp_name"])); 
  $signphone=addslashes($_POST['signphone']);
  $signpassword1=addslashes($_POST['signpassword1']);
   
      $sql = "INSERT INTO tbuser(username,fn,ln,sex,profilepic,phone,password,usertype) VALUES ('$signusername','$signfn','$signln','$signsex','$file','$signphone','".md5($signpassword1)."','User')";  
      if(mysqli_query($con, $sql))  
      {  
           
           echo "<script>
alert('Successfully Registered!');
window.location.href='login';
</script>";


      }
      else{
        echo '<script>alert("Username is already taken.")</script>';
      }  
 }  
 

 }
 ?>  
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
	#menu:hover{
	background-color:black;
	
}
.form-control:focus{
  border-color: #00AF66;  box-shadow: none; -webkit-box-shadow: none;
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
              <li class="active"><a id="menu" href="index">Home</a></li>
              <li><a id="menu" href="about">About</a></li>
              <li><a id="menu" href="contact">Contact</a></li>
      
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


<?php require 'recentlyniuser.php';?>


   <section id="sliderSection">

      <div class="row" >
        <div class="col-sm-12">
         
        </div>
      <div class="col-sm-2">

      </div>
      <div id="log" class="col-sm-8">
                <div class="panel panel-info" >
                <div class="panel-heading" style="background-color: #00AF66;"><h3 style="color: #003000">Sign Up</h3></div>
                <div class="panel-body">
                   <div align="center" class="col-sm-12">
          <em><strong>To be a part of the solution not part of the pollution.</strong></em>
        </div>
 <form method="post" enctype="multipart/form-data">
        <div class="col-sm-6">
         <br> <input class="form-control" type="text" name="signfn" id="signfn" placeholder="Enter First Name"  value="<?php echo isset($_POST['signfn']) ? $_POST['signfn'] : '' ?>">
         <div id="errorFN"></div>
        </div>

        <div class="col-sm-6">
         <br> <input class="form-control" type="text" name="signln" id="signln" placeholder="Enter Last Name" value="<?php echo isset($_POST['signln']) ? $_POST['signfn'] : '' ?>">
         <div id="errorLN"></div>
        </div>
        
        <div class="col-sm-6">
          <br><label>Gender</label><br>
          <select class="form-control" id="signsex" name="signsex">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          
        </div>
         <div class="col-sm-6">
          <br><label>Choose your profile picture</label><br>
           <input class="form-control" type="file" name="signprofile" id="signprofile">
           <span id="uploaded_image"></span>
           <div id="errorProfile"></div>
        </div>
        <div class="col-sm-12">
          <br><input class="form-control" type="text" name="signphone" id="signphone" placeholder="Enter Phone Number" maxlength="11" value="<?php echo isset($_POST['signphone']) ? $_POST['signphone'] : '' ?>"><br>
        </div>
        
        <div class="col-sm-12">
         <input class="form-control" type="text" name="signusername" id="signusername" placeholder="Enter Username" value="<?php echo isset($_POST['signusername']) ? $_POST['signusername'] : '' ?>"><br>
         <div id="errorusername"></div>
        </div>
        <div class="col-sm-6">
          <input class="form-control" type="password" name="signpassword1" id="signpassword1" placeholder="Enter New Password">
          <div id="errorpass1"></div>
        </div>
        <div class="col-sm-6">
          <input class="form-control" type="password" name="signpassword2" id="signpassword2" placeholder="Enter Confirm Password"><br>
          <div id="errorpass2"></div>
        </div>

        <div class="col-sm-12">
          <div id="messages"></div>
          <button class="btn btn-success btn-block" name="insert" id="insert">Sign Up</button>
          <div align="center">
                  <a  href="login"><span id="signlog">Already have an account?</span></a>
                </div>
         
      </form>
        </div>
     
           
          </div>


                </div>
                </div>
      </div>
      <div class="col-sm-2">

      </div>
      <div class="col-sm-12">
          <br><br><br><br><br>
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

 <script>  
$(document).ready(function() {
    $("#signphone").keydown(function (e) {
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
 $(document).ready(function(){  
      $('#insert').click(function(){
            var signusername=$('#signusername').val();  
            var signfn = $('#signfn').val();
            var signln = $('#signln').val();
            var signsex=$("#signsex").val()
            var image_name = $('#signprofile').val();
            var signphone = $('#signphone').val();
            var signpassword1 = $('#signpassword1').val();
            var signpassword2 = $('#signpassword2').val();
             var signsex = $('#signsex').val();
           if(signfn == '')  
           {  
                
                document.getElementById("errorFN").innerHTML = "<div class='alert alert-danger'>Please fill up First Name</div>";
                document.getElementById("signfn").focus();
                 $("#errorFN").fadeIn();
                $("#errorFN").fadeOut(5000);

                return false;  
           }  
           else if(signln=='')
           {
             document.getElementById("errorLN").innerHTML = "<div class='alert alert-danger'>Please fill up Last Name</div>";
                document.getElementById("signln").focus();
                $("#errorLN").fadeIn();
                $("#errorLN").fadeOut(5000);
                return false;  

           }
           
          else if(signusername=='')
           {
             document.getElementById("errorusername").innerHTML = "<div class='alert alert-danger'>Please fill up Username</div>";
                document.getElementById("signusername").focus();
                 $("#errorusername").fadeIn();
                $("#errorusername").fadeOut(5000);
                return false;  
           }
          else if(signpassword1=='')
           {
             document.getElementById("errorpass1").innerHTML = "<div class='alert alert-danger'>Please fill up New Password</div>";
                document.getElementById("signpassword1").focus();
                 $("#errorpass1").fadeIn();
                $("#errorpass1").fadeOut(5000);
                return false;  
           }
           else if(signpassword2=='')
           {
             document.getElementById("errorpass2").innerHTML = "<div class='alert alert-danger'>Please fill up Confirm Password</div>";
                document.getElementById("signpassword2").focus();
                 $("#errorpass2").fadeIn();
                $("#errorpass2").fadeOut(5000);
                return false;  
           }
           else if(signpassword1!=signpassword2)
           {
             document.getElementById("messages").innerHTML = "<div class='alert alert-danger'>New Password and Confirm Password Does not match!</div>";
                document.getElementById("signpassword1").focus();
                 $("#messages").fadeIn();
                $("#messages").fadeOut(5000);
                return false;  
           }
           else  
           {  
                 var extension = $('#signprofile').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     document.getElementById("errorProfile").innerHTML = "<div class='alert alert-danger'>Please Choose valid Image File</div>";  
                      document.getElementById("signprofile").focus();
                    $("#errorProfile").fadeIn();
                    $("#errorProfile").fadeOut(5000);
                     return false;  
                }  
           }  
      });  
 });  

 $("#tbsearch").on('keyup', function (e) {
    var value = $('#tbsearch').val();
      if (e.keyCode == 13) {
         window.location.href = "searchpage1?id="+value;
      }
  });
 </script>  