<?php
session_start();
if (!isset($_SESSION["logusername"])){
    header('Location: login');
}

 require 'headeradmin.php';?>
<title>Admins</title>

<!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />
<!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
 <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />

 <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-home"></i> Users</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="users">Home</a></li>
              <li><i class="fa fa-table"></i>User List</li>
              
            </ol>
          </div>
        </div>
        <!-- page start-->
         <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="icon_group"></i><strong>Registered Admin</strong></h2>
               
              </div>
              <div class="panel-body">
                <?php
                require 'db.php';
                $sql="SELECT * FROM tbuser WHERE username='".$_SESSION['logusername']."'";
                $result=mysqli_query($con,$sql);
                if($row=mysqli_fetch_array($result)){
                  echo "<header class='panel-heading'>
                Hi! ".ucfirst($row['fn'])." ".ucfirst($row['ln'])."
              </header>"; 
            }
                 ?>

                <table class="table table-striped table-advance table-hover">
                <tbody> 
                  <tr>
                    <th>Picture</th>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_profile"></i> Username</th>
                    <th><i class=""></i> Password</th>
                    <th><i class="icon_pin_alt"></i> Sex</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>

                     <?php 
               
                    $sql="SELECT * FROM tbuser WHERE usertype='Admin' ORDER BY username ASC";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                      echo "<tr>";
                        echo '<td><img width="30px" height="30px" src="data:image/jpeg;base64,'.base64_encode( $row['profilepic'] ).'"/></td>';
                        echo "<td>".ucfirst($row['fn'])." ".ucfirst($row['ln'])."</td>
                    <td>".$row['username']."</td>
                    <td>".$row['password']."</td>
                    <td>".$row['sex']."</td>
                    <td>".$row['phone']."</td>
                    <td>
                      <div class='btn-group'>
                        <a class='btn btn-success' href='#'><div class='icon-reorder tooltips' data-original-title='Unblock Admin' data-placement='bottom'><i class='icon_plus_alt2'></div></i></a>
                       <a class='btn btn-danger' href='#'><div class='icon-reorder tooltips' data-original-title='Blocked Admin' data-placement='bottom'><i class='icon_blocked'></div></i></a>
                       </div>
                    </td>
                  </tr>

                    ";
                    

                    }

                 ?>
                 
                 </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- page end-->

         <!-- page start-->
         <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <?php 
                require 'db.php';
                $sql="SELECT * FROM tbuser WHERE usertype='User'";
                $result=mysqli_query($con,$sql);
                $total=mysqli_num_rows($result);
                echo " <h2><i class='icon_group'></i><strong> (".$total.") Registered Users</strong></h2>";
                   ?>
               
               
              </div>
              <div class="panel-body">
              
              
                 <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                   <th>Picture</th>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_profile"></i> Username</th>
                    <th><i class=""></i> Password</th>
                    <th><i class="icon_pin_alt"></i> Sex</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <?php 
               
                    $sql="SELECT * FROM tbuser WHERE usertype='User' ORDER BY username ASC";
                    $result=mysqli_query($con,$sql);
                    $total=mysqli_num_rows($result);
                    while($row=mysqli_fetch_array($result)){
                      echo "<tr>";
                        echo '<td><img width="30px" height="30px" src="data:image/jpeg;base64,'.base64_encode( $row['profilepic'] ).'"/></td>';
                        echo "<td>".ucfirst($row['fn'])." ".ucfirst($row['ln'])."</td>
                    <td>".$row['username']."</td>
                    <td>".$row['password']."</td>
                    <td>".$row['sex']."</td>
                    <td>".$row['phone']."</td>
                    <td>
                      <div class='btn-group'>
                        
                        <a class='btn btn-success' href='#'><div class='icon-reorder tooltips' data-original-title='Unblock User' data-placement='bottom'><i class='icon_plus_alt2'></div></i></a>
                         
                         <a class='btn btn-danger' href='#'><div class='icon-reorder tooltips' data-original-title='Blocked User' data-placement='bottom'><i class='icon_blocked'></div></i></a>
                        
                        
                      </div>
                    </td>
                  </tr>
          
                    ";
                    

                    }

                 ?>

               </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    
  </section>
  
<?php require 'footeradmin.php';?>