<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Service_Wenshan | InfiArk</title>
	
	<!-- title CSS -->
	<!-- <link href="css/title.css" rel="stylesheet"> -->
	
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

	<!-- responsive CSS -->
	<link href="../css/responsive.css" rel="stylesheet">
	
	<!-- form CSS -->
	<link href="../css/multiple-select.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <!--  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="dropdown active">
						<a href="../index.html" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>					
						<ul class="dropdown-menu">
							<li>
								<a href="../service.html">Intelligent Traffic Prediction Service</a>
							</li>
						</ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
				<a class="navbar-brand" href="../index.html">
					<img src="../images/logo2.png" alt="logo" style="width: 200px;">
				</a>
				
            </div>
        </div>
        <!-- /.row -->
		<br><br>
		<section id="home-slider">
			<div class="container">				
				<div class="row">
					<h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">文山智慧交通預測服務</h1>
					<p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms" style="font-size:120%;">Wenshan Intelligent Traffic Prediction Service</p>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h2 class="page-header">文山路段選擇 / <a href="../service.html">其他行政區域</a></h2>
					</div>
					<script type="text/javascript">
						function roadtonewpage(objButton){
							location.href='service_wenshan_time.html';
							sessionStorage.setItem("road",objButton.value);																				
						}
					</script>					
					<?php
						include("../mysql.inc.php");								
						$sqlroad = "select road 'road' from cj20170227 where district ='Wenshan' group by road";	
						$queryroad= mysqli_query($conn, $sqlroad);
						
						for ($i = 0; $i < mysqli_num_rows($queryroad); $i++){	
							$data = mysqli_fetch_assoc($queryroad);
							$divbegin = "<div class=\"col-sm-3 col-xs-12 wow fadeIn\">"."<input type=\"button\" value=\"";
							$divend = "\" style=\"width: 100%; margin-right: 10px; margin-top: 10px; margin-bottom: 10px;\" onclick=\" roadtonewpage(this) \" >"."</div>";
							echo $divbegin.$data["road"].$divend;
						}	
					?>										
				</div>
			</div>
		</section>
		<!--/#recent-projects-->
	     
		<!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
					<p>&copy; InfiArk Technology 2016. All Rights Reserved.</p>
					<p>Crafted by <a href="../index.html">無限方舟科技股份有限公司</a></p>				
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
