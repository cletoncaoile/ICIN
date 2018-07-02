 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<section id="newsSection">
    <style type="text/css">
      #headerM{
        background-color: #00AF66;
      }
      #signlog:hover{
        color: lightgray;
       }
       #signlog{
        color: #00AF66;
       }
    </style>
   
    <div class="row"><br>
      <div class="col-sm-11">
        <div class="latest_newsarea" style="background-color: #00AF66"> <span style="background-color:#003000">Recently Uploaded</span>
          <ul id="ticker01" class="news_sticker">
             <?php
             require 'db.php'; 
            
            $sqlrecent="SELECT * FROM tbcraft ORDER BY idcraft DESC";
            $resultrecent=mysqli_query($con,$sqlrecent);
            while($row = mysqli_fetch_array($resultrecent)){
              echo "<li><a href='craftview'>";
               echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output1'] ).'"/>';
              echo "".$row['namecraft']."</a></li>";

            }

            ?>
          </ul>
         
        </div>
      </div>
      
      <div class="col-sm-1">
      	<a class="btn btn-success" href="login">Login</a>
      </div>
 


    </div>

      
      


   
  </section>


