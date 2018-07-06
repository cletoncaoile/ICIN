 <?php 
session_start();
            require 'db.php';
          if($con){
           $combox=$_POST['a'];
           $idcraft=$_POST['id'];
            date_default_timezone_set('Asia/Manila') ;
            $date = date('Y-m-d H:i:s');
            $newDateTime = date('h:i A', strtotime($date));

           $sql = "INSERT INTO tbcomment (username, comment, datecomment,idcraft,timecomment) VALUES ('" .$_SESSION['logusername']. "', '" .$combox. "', '" .$date. "', '" .$idcraft. "', '" .$newDateTime. "')";

if ($con->query($sql) === TRUE) {
    $con->close();
    
} else {
    $con->close();
    
}

          }
              
              
            ?>
            