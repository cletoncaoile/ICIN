<?php
/*
* Author: Rohit Kumar
* Website: iamrohit.in
* Date: 09-03-2016
* App Name: Star rating system
* Description: Star rating demo using Jquery, PHP and Mysql
*/
include_once('rating.php')
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Star rating demo using Jquery, PHP and Mysql</title>
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

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
<link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
    <script src="js/star-rating.min.js" type="text/javascript"></script>
   
</head>

<body>
<h1>Star rating demo using Jquery, PHP and Mysql</h1>
 <table>
                          <tr>
                            <td> Ratings:</td>
                            <td>                      <input value="<?= getRatingByProductId(connect(), 2); ?>" type="number" class="rating" min=0 max=5 step=0.1 data-size="md" data-stars="5" productId=2></td>
                          </tr>
                        </table>

     <script type="text/javascript">
         $(function(){
               $('.rating').on('rating.change', function(event, value, caption) {
                productId = $(this).attr('productId');
                $.ajax({
                  url: "rating.php",
                  dataType: "json",
                  data: {vote:value, productId:productId, type:'save'},
                  success: function( data ) {
                     alert("rating saved");
                  },
              error: function(e) {
                 alert("Can't saved");
                console.log(e);
              },
              timeout: 30000  
            });
              });

           


        });
    </script>
    </body>
</html>
<script src="assets/js/custom.js"></script>
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script>
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
