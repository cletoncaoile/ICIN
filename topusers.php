<?php require 'headeradmin.php';?>
<title>Admins</title>

<!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
<!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
 <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  
 <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-home"></i> Users</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="admin">Home</a></li>
              <li><i class="fa fa-table"></i>Users</li>
              
            </ol>
          </div>
        </div>
        <!-- page start-->
         <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="icon_group"></i><strong>Registered Admins</strong></h2>
               
              </div>
              <div class="panel-body">
                <header class="panel-heading">
                Hi! Cleton
              </header>
                <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>#</th>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_calendar"></i> Date</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_pin_alt"></i> City</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Shaira Lozano</td>
                    <td>2004-07-06</td>
                    <td>ewan@gmail.com</td>
                    <td>Dagupan City</td>
                    <td>11111111</td>
                    <td>
                      <div class="btn-group">
                        
                        <a class="btn btn-warning" href="#"><div class="icon-reorder tooltips" data-original-title="Edit User" data-placement="bottom"><i class="icon_pencil-edit"></div></i></a>
                         
                         <a class="btn btn-danger" href="#"><div class="icon-reorder tooltips" data-original-title="Remove User" data-placement="bottom"><i class="icon_close_alt2"></div></i></a>
                        
                        
                      </div>
                    </td>
                  </tr>
                  
                </tbody>
              </table> 
            </div>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->

  
<?php require 'footeradmin.php';?>