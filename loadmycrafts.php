  <?php 
                require 'db.php';
                $search=$_POST['a'];
                $user=$_POST['user'];
                $sqluser="SELECT * FROM tbcraft WHERE (username='".$user."') AND (idcraft LIKE '%".$search."%' OR username LIKE '%".$search."%' OR method LIKE '%".$search."%' OR dateshared LIKE '%".$search."%' OR timeshared LIKE '%".$search."%' OR namecraft LIKE '%".$search."%' OR category LIKE '%".$search."%' OR difficulty LIKE '%".$search."%' OR status LIKE '%".$search."%' OR price LIKE '%".$search."%' OR description LIKE '%".$search."%' OR materials LIKE '%".$search."%')";
                $resultuser=mysqli_query($con,$sqluser);
                while($row=mysqli_fetch_array($resultuser)){
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
              ?>