
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/icb.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
             


                

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                             <!-- user image section-->
                        <div class="user-section">
				
			
			
                            <div class="user-section-inner">
			
                                <img src="assets/img/user-icon.png">
                            </div>
                            <div class="user-info" style="margin-left:50px;">
                                <div style="text-align:center;">ICBMYT</div>
		<div style="font-size:15px;">ADMIN</div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
		<div style="height:20px;"></div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                   <?php include 'menu.php' ;?>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"> SHOW CONTACT</h1>
                </div>
                <!--End Page Header -->
            </div>

               <div class="row">
                <div class="col-lg-12">
                    <!--Timeline -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> CONTACT DETAILS
                        </div>

                        <div class="panel-body">
                           <?php
		include('config.php');
		$sql=mysqli_query($con,"select * from contact ORDER BY date DESC");
		
		if(mysqli_num_rows($sql)>0)
		{
		?>
	 <table class="table table-bordered table-hover table-striped" style="font-family: Verdana; font-size:14px;">

   <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>EMAIL ID </th>
                                                    <th>CONTACT NO</th>
                                                    <th>MESSAGE</th>
													 <th>DATE</th>
													 
													 
                                                </tr>
                                            </thead>

		

		<?php
		
		while($r = mysqli_fetch_array($sql))
		{
		$id=$r['id'];
		$name = $r['name'];
		$mail = $r['email'];
		$ph = $r['phone'];
		$msg = $r['msg'];
		$date=$r['date'];
		
		
		
		?>

		 <tbody>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $mail; ?></td>
				<td><?php echo $ph; ?></td>
				<td><?php echo $msg; ?></td>
				<td><?php echo $date; ?></td>
				
				
	
	</tr>
    </tbody>		
	<?php
		}

	?>
	<?php
	}
	else
	{
	?>
     <?php
}

?>
</table>
                        </div>

                    </div>
                    <!--End Timeline -->
                </div>
            </div>


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
