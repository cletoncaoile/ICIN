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