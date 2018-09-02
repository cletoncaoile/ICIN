 <?php 
          $search = $_POST['a'];
          $Category=$_POST['c'];
            require 'db.php';
          if($con){
            if($Category=='All'){
          $sqldisplay="SELECT * FROM tbcraft WHERE  idcraft LIKE '%".$search."%' OR username LIKE '%".$search."%' OR method LIKE '%".$search."%' OR dateshared LIKE '%".$search."%' OR timeshared LIKE '%".$search."%' OR namecraft LIKE '%".$search."%' OR category LIKE '%".$search."%' OR difficulty LIKE '%".$search."%' OR status LIKE '%".$search."%' OR price LIKE '%".$search."%' OR description LIKE '%".$search."%' OR materials LIKE '%".$search."%'";
          $resultdisplay=mysqli_query($con,$sqldisplay);
          if(mysqli_num_rows($resultdisplay)>0){
            while($row=mysqli_fetch_array($resultdisplay)){
              echo "<ul class='photograph_nav  wow fadeInDown'>";
              echo " <li>";
              echo "<div class='photo_grid'>";
              echo "<figure class='effect-layla'>";
              echo "<p id='prod'>".$row['namecraft']."<br>".$row['category']."</p>";
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview?id=".$row['idcraft']."&idcom=' title='Photography Ttile 1'>";
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
            else if($Category=='Furnitures'){
              $sqldisplayF="SELECT * FROM tbcraft WHERE (category='Furnitures') AND (username LIKE '%".$search."%' OR method LIKE '%".$search."%' OR dateshared LIKE '%".$search."%' OR timeshared LIKE '%".$search."%' OR namecraft LIKE '%".$search."%' OR difficulty LIKE '%".$search."%' OR status LIKE '%".$search."%' OR price LIKE '%".$search."%' OR description LIKE '%".$search."%' OR materials LIKE '%".$search."%')";
          $resultdisplayF=mysqli_query($con,$sqldisplayF);
          if(mysqli_num_rows($resultdisplayF)>0){
            while($row=mysqli_fetch_array($resultdisplayF)){
            echo "<ul class='photograph_nav  wow fadeInDown'>";
              echo " <li>";
              echo "<div class='photo_grid'>";
              echo "<figure class='effect-layla'>";
              echo "<p id='prod'>".$row['namecraft']."<br>".$row['category']."</p>";
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview?id=".$row['idcraft']."&idcom=' title='Photography Ttile 1'>";
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
            else if($Category=='Clothes'){
              $sqldisplayF="SELECT * FROM tbcraft WHERE (category='Clothes') AND (username LIKE '%".$search."%' OR method LIKE '%".$search."%' OR dateshared LIKE '%".$search."%' OR timeshared LIKE '%".$search."%' OR namecraft LIKE '%".$search."%' OR difficulty LIKE '%".$search."%' OR status LIKE '%".$search."%' OR price LIKE '%".$search."%' OR description LIKE '%".$search."%' OR materials LIKE '%".$search."%')";
          $resultdisplayF=mysqli_query($con,$sqldisplayF);
          if(mysqli_num_rows($resultdisplayF)>0){
          while($row=mysqli_fetch_array($resultdisplayF)){
            echo "<ul class='photograph_nav  wow fadeInDown'>";
              echo " <li>";
              echo "<div class='photo_grid'>";
              echo "<figure class='effect-layla'>";
              echo "<p id='prod'>".$row['namecraft']."<br>".$row['category']."</p>";
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview?id=".$row['idcraft']."&idcom=' title='Photography Ttile 1'>";
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
             else if($Category=='Decoration'){
              $sqldisplayF="SELECT * FROM tbcraft WHERE (category='Decoration') AND  (username LIKE '%".$search."%' OR method LIKE '%".$search."%' OR dateshared LIKE '%".$search."%' OR timeshared LIKE '%".$search."%' OR namecraft LIKE '%".$search."%' OR difficulty LIKE '%".$search."%' OR status LIKE '%".$search."%' OR price LIKE '%".$search."%' OR description LIKE '%".$search."%' OR materials LIKE '%".$search."%')";
          $resultdisplayF=mysqli_query($con,$sqldisplayF);
          if(mysqli_num_rows($resultdisplayF)){
            while($row=mysqli_fetch_array($resultdisplayF)>0){
            echo "<ul class='photograph_nav  wow fadeInDown'>";
              echo " <li>";
              echo "<div class='photo_grid'>";
              echo "<figure class='effect-layla'>";
              echo "<p id='prod'>".$row['namecraft']."<br>".$row['category']."</p>";
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview?id=".$row['idcraft']."&idcom=' title='Photography Ttile 1'>";
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
             else if($Category=='Others'){
              $sqldisplayF="SELECT * FROM tbcraft WHERE (category='Others') AND  (username LIKE '%".$search."%' OR method LIKE '%".$search."%' OR dateshared LIKE '%".$search."%' OR timeshared LIKE '%".$search."%' OR namecraft LIKE '%".$search."%' OR difficulty LIKE '%".$search."%' OR status LIKE '%".$search."%' OR price LIKE '%".$search."%' OR description LIKE '%".$search."%' OR materials LIKE '%".$search."%')";
          $resultdisplayF=mysqli_query($con,$sqldisplayF);
          if(mysqli_num_rows($resultdisplayF)>0){
             while($row=mysqli_fetch_array($resultdisplayF)){
            echo "<ul class='photograph_nav  wow fadeInDown'>";
              echo " <li>";
              echo "<div class='photo_grid'>";
              echo "<figure class='effect-layla'>";
              echo "<p id='prod'>".$row['namecraft']."<br>".$row['category']."</p>";
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview?id=".$row['idcraft']."&idcom=' title='Photography Ttile 1'>";
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


           
          }
              
              
            ?>