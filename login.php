


<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
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

      <p><input class="form-control" id ="searchicon" type="text" name="" placeholder="Search"></input>
      </p>
          </div>
        </div>
      </div>
    </div>

  </header>
<?php require 'recentlyniuser.php'; ?>
 <section id="sliderSection">

      <div class="row" >
        <div class="col-sm-12">
         
        </div>
      <div class="col-sm-4">

      </div>
      <div id="log" class="col-sm-4">
                <div class="panel panel-info" >
                <div class="panel-heading" style="background-color: #00AF66;"><h3 style="color: #003000">Login</h3></div>
                <div class="panel-body">
                    <table align="center">
            <tr>
              <td>
                <em><strong>To be a part of the solution not part of the pollution.</strong></em>
              </td>
            </tr>
            <tr>
              
              <td>
                <br><input class="form-control" type="text" name="logusername" id="logusername" placeholder="Enter Username">
              </td>
            </tr>
            
            <tr>
              
              <td>
                <br><input class="form-control" type="password" name="logpassword" id="logpassword" placeholder="Enter Password">
              </td>
            </tr>
            <tr>
              <td><br><button class="btn btn-success btn-block" onclick="processlogin()">Login</button></td>
            </tr>
            </table>
            <table  align="center">
              <tr>
                <td>
                  <a href="signup"><span id="signlog">Create an Account?</span></a>
                </td>
              </tr>
            </table>
            <div id="message"></div>
          </div>


                </div>
                </div>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-12">
          <br><br><br><br><br>
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
    function processlogin() {

 
    var logusername = document.getElementById('logusername').value;
    var logpassword = document.getElementById('logpassword').value;
    if(logusername=="" && logpassword==""){
       document.getElementById("message").innerHTML = "<div class='alert alert-danger'>Please fill up the fields</div>";
        document.getElementById("logusername").focus();
                 $("#message").fadeIn();
                $("#message").fadeOut(5000);
    }
    
    else if(logusername==""){
       document.getElementById("message").innerHTML = "<div class='alert alert-danger'>Please fill up Username</div>";
        document.getElementById("logusername").focus();
                 $("#message").fadeIn();
                $("#message").fadeOut(5000);
    }
   else if(logpassword==""){
       document.getElementById("message").innerHTML = "<div class='alert alert-danger'>Please fill up Password</div>";
        document.getElementById("logpassword").focus();
                 $("#message").fadeIn();
                $("#message").fadeOut(5000);
    }
    else{
       if (window.XMLHttpRequest)
      xmlhttp = new XMLHttpRequest();
    else
      xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');

    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState === 4){
          var response = xmlhttp.responseText;
          if (xmlhttp.status === 200 && response === "Success") {
             document.getElementById('message').innerHTML = "<div class=\"alert alert-success\" role=\"alert\"> <strong>Successfully</strong>Login  </div>";
            
          location.href = "mainmenu";
          
          }
          else if(xmlhttp.status === 200 && response === "Success1"){
             location.href = "admin";
          }
          else{
             document.getElementById('message').innerHTML = "<div class=\"alert alert-danger\" role=\"alert\"> <strong>Oops!</strong> Incorrect Username or Password. </div>";
          $("#message").fadeIn();
                $("#message").fadeOut(5000);
          }   
        
        }
    }

    xmlhttp.open("POST","processlogin.php", true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("&lu="+logusername+"&lp="+logpassword);
  }
    }


   
 
  
</script>

