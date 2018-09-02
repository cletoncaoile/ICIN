  <?php 
            require 'db.php';
          if($con){
              $search = $_POST['a'];
             $sqldisplay="SELECT * FROM tbcraft WHERE  idcraft LIKE '%".$search."%' OR username LIKE '%".$search."%' OR method LIKE '%".$search."%' OR dateshared LIKE '%".$search."%' OR timeshared LIKE '%".$search."%' OR namecraft LIKE '%".$search."%' OR category LIKE '%".$search."%' OR difficulty LIKE '%".$search."%' OR status LIKE '%".$search."%' OR price LIKE '%".$search."%' OR description LIKE '%".$search."%' OR materials LIKE '%".$search."%'";
          $resultdisplay=mysqli_query($con,$sqldisplay);
          while($row=mysqli_fetch_array($resultdisplay)){
            echo "<ul class='photograph_nav  wow fadeInDown'>";
              echo " <li>";
              echo "<div class='photo_grid'>";
              echo "<figure class='effect-layla'>";
              echo "<p id='prod'>".$row['namecraft']."<br>".$row['category']."</p>";
              echo " <a class='fancybox-buttons' data-fancybox-group='button' href='craftview1?id=".$row['idcraft']."' title='Photography Ttile 1'>";
             echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['output1'] ).'"/>';
              echo "</a> </figure>";
              echo "</div>";
              echo "</li>";
              echo "</ul>";
          }
          }
              
              
            ?>