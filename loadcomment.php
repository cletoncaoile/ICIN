
 <?php
session_start();
if (!isset($_SESSION["logusername"])){
    header('Location: login');
}
	
                              require 'db.php';
                              if($con){
                                $idcraft=$_POST['id'];
                                $sql="SELECT tbuser.profilepic,tbuser.fn,tbuser.ln,tbcomment.username,tbcomment.comment,tbcomment.timecomment,tbcomment.datecomment FROM tbuser INNER JOIN tbcomment WHERE tbcomment.idcraft='$idcraft' AND tbuser.username=tbcomment.username";
                                $result=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($result)){
                                  echo " <div class='text'>
                                   <a href='#' class='activity-img'>" ;
                                  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['profilepic'] ).'"/></a>';
                                  echo " <p class='attribution'><a href='#'  style='color:#00AF66'>".ucfirst($row['fn']).", ".ucfirst($row['ln'])." </a> at ".$row['timecomment'].", ".$row['datecomment']."</p>
                            <p>".$row['comment']."</p>
                          </div>";
                                }
                              }
         


 ?>


 
  