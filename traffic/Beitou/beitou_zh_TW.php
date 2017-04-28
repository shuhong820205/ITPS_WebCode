<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>服務_北投 | 無限方舟</title>
	
	<!-- title CSS -->
	<!-- <link href="css/title.css" rel="stylesheet"> -->
	
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

	<!-- responsive CSS -->
	<link href="../css/responsive.css" rel="stylesheet">
	
	<!-- form CSS -->
	<!--<link href="css/multiple-select.css" rel="stylesheet">-->
	
	<!-- Jquery D3.js JS -->
<!--	<script src="http://d3js.org/d3.v3.min.js"></script>
	<script src="../js/liquidFillGauge.js" language="JavaScript"></script>

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
                        <a href="../index_zh_TW.html">首頁</a>
                    </li>
                    <li class="dropdown active">
						<a href="../index_zh_TW.html" class="dropdown-toggle" data-toggle="dropdown">服務 <b class="caret"></b></a>					
						<ul class="dropdown-menu">
							<li>
								<a href="../service_zh_TW.html">智慧交通預測服務</a>
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
				<a class="navbar-brand" href="../index_zh_TW.html">
					<img src="../images/logo2.png" alt="logo" style="width: 200px;">
				</a>
				
            </div>
        </div>
        <!-- /.row -->
		<br><br>
		<section id="home-slider">
			<div class="container">				
				<div class="row">
					<h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">北投智慧交通預測服務</h1>
					<p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms" style="font-size:120%;">Beitou Intelligent Traffic Prediction Service</p>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h2 class="page-header">塞車機率 / <a href="service_beitou_time_zh_TW.html">其他查詢條件</a> / <a href="service_beitou_zh_TW.php">其他北投路段</a> / <a href="../service_zh_TW.html">其他行政區域</a></h2>
					</div>

				<?php
				/* 連線資料庫設定 */
					include("../mysql.inc.php");	
				/* 接收上一頁Form表單資訊 */
					$weekday = $_POST["weekday"];
					$time = $_POST["time"];
					$road = $_POST["road"];
				/* 透過SQL Query找出剩下所需要的vd,position,direction資訊 */	
					$sqlinformation =  "select vd 'vd',position 'position',direction 'direction',jampercent 'jampercent',congest 'congest' from cj20170227 where district ='Beitou' and road ='$road' and weekday='$weekday' and time='$time' group by position,direction";	
					$queryinformation = mysqli_query($conn, $sqlinformation);	
				for ($i = 0; $i < mysqli_num_rows($queryinformation); $i++){	
					$data = mysqli_fetch_assoc($queryinformation);
					echo " <div class=\"col-md-3 wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\"> ";
					echo " <div id=\"";
					echo "jampercent"."$i";
					echo "\" style=\"width: 100%;height:225%;\"></div> ";					
					echo " </div> ";
/* 					echo " <div class=\"col-md-3 wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\"> ";
					echo " <div id=\"";
					echo "congest"."$i";
					echo "\" style=\"width: 100%;height:225%;\"></div> ";
					echo " </div> "; */
					echo " <div class=\"col-md-6 wow fadeIn\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\"> ";
					echo " <h2> ";					
					echo $data["position"];
					echo " </h2> ";
					echo " <p>編號： ";					
					echo $data["vd"];
					echo " </p> ";
					echo " <p>時間： ";
					if ($weekday == "0"){
						echo "星期一";
					}elseif($weekday == "1"){
						echo "星期二";									
					}elseif($weekday == "2"){
						echo "星期三";									
					}elseif($weekday == "3"){
						echo "星期四";									
					}elseif($weekday == "4"){
						echo "星期五";									
					}elseif($weekday == "5"){
						echo "星期六";									
					}else{
						echo "星期日";									
					}
					if ($time == "0"){
						echo " 0 時";
					}elseif($time == "1"){
						echo " 01 時";									
					}elseif($time == "2"){
						echo " 02 時";									
					}elseif($time == "3"){
						echo " 03 時";									
					}elseif($time == "4"){
						echo " 04 時";									
					}elseif($time == "5"){
						echo " 05 時";									
					}elseif($time == "6"){
						echo " 06 時";									
					}elseif($time == "7"){
						echo " 07 時";									
					}elseif($time == "8"){
						echo " 08 時";									
					}elseif($time == "9"){
						echo " 09 時";									
					}elseif($time == "10"){
						echo " 10 時";									
					}elseif($time == "11"){
						echo " 11 時";									
					}elseif($time == "12"){
						echo " 12 時";									
					}elseif($time == "13"){
						echo " 13 時";									
					}elseif($time == "14"){
						echo " 14 時";									
					}elseif($time == "15"){
						echo " 15 時";									
					}elseif($time == "16"){
						echo " 16 時";									
					}elseif($time == "17"){
						echo " 17 時";									
					}elseif($time == "18"){
						echo " 18 時";									
					}elseif($time == "19"){
						echo " 19 時";									
					}elseif($time == "20"){
						echo " 20 時";									
					}elseif($time == "21"){
						echo " 21 時";									
					}elseif($time == "22"){
						echo " 22 時";									
					}else{
						echo " 23 時";									
					}
					echo " </p> ";
					echo " <p>方向： ";
					if ($data["direction"] == "東"){
						echo "往東";
					}elseif($data["direction"] == "西"){
						echo "往西";									
					}elseif($data["direction"] == "南"){
						echo "往南";									
					}elseif($data["direction"] == "北"){
						echo "往北";									
					}else{
						echo "未知";									
					}
					echo " </p> ";
					echo " </div> ";
					echo " <div class=\"col-lg-12\"> ";
					echo " <h2 class=\"page-header\"> ";
					echo " </h2> ";
					echo " </div> ";
					echo " <script src=\"../jquery/dist/jquery.min.js\"></script> ";
					echo " <script src=\"echarts.min.js\"></script> ";
					echo " <script type=\"text/javascript\"> ";
					echo " var myChart_jampercent = echarts.init(document.getElementById('";
					echo "jampercent"."$i";
					echo "')); ";
					echo " option_jampercent = { ";
					echo " series : [ ";
					echo " { ";
					echo " name: '塞車機率', ";
					echo " type: 'gauge', ";
					echo " radius: '90%', ";
					echo " min:0, ";
					echo " max:100, ";
					echo " startAngle:225, ";
					echo " endAngle:-45, ";
					echo " splitNumber:10, ";
					echo " axisLine: { ";
					echo " lineStyle: { ";
					echo " color: [ ";
					echo " [0.25, '#91c7ae'], ";
					echo " [0.5, '#63869e'], ";
					echo " [0.75, '#EFC631'], ";
					echo " [1, '#c23531'] ";
					echo " ], ";
					echo " width: 8 ";
					echo " } ";
					echo " }, ";
					echo " axisTick: { ";
					echo " length:12, ";
					echo " lineStyle: { ";
					echo " color: 'auto' ";
					echo " } ";
					echo " }, ";
					echo " splitLine: { ";
					echo " length:20, ";
					echo " lineStyle: { ";
					echo " color: 'auto' ";
					echo " } ";
					echo " }, ";
					echo " pointer: { ";
					echo " width:3 ";
					echo " }, ";
					echo " title: { ";
					echo " offsetCenter: [0, '90%'], ";
					echo " textStyle: { ";
					echo " fontSize: 18 ";
					echo " } ";
					echo " }, ";
					echo " detail: { ";
					echo " textStyle: { ";
					echo " fontWeight: 'bolder' ";
					echo " } ";
					echo " }, ";
					echo " data:[{value: ";
					echo $data["jampercent"]*100;
					echo " , name: '塞車機率(%)'}] ";
					echo " } ";
					echo " ] ";
					echo " }; ";
					echo " myChart_jampercent.setOption(option_jampercent); ";					
					echo " var myChart_congest = echarts.init(document.getElementById('";
					echo "congest"."$i";
					echo "')); ";
					echo " option_congest = { ";
					echo " series : [ ";
					echo " { ";
					echo " name: '壅塞度', ";
					echo " type: 'gauge', ";
					echo " z: 3, ";
					echo " min: 0, ";
					echo " max: 100, ";
					echo " startAngle:225, ";
					echo " endAngle:-45, ";
					echo " splitNumber: 10, ";
					echo " center: ['50%', '50%'], ";
					echo " radius: '100%', ";
					echo " axisLine: { ";
					echo " lineStyle: { ";
					echo " color: [ ";
					echo " [0.25, '#91c7ae'], ";
					echo " [0.5, '#63869e'], ";
					echo " [0.75, '#EFC631'], ";
					echo " [1, '#c23531'] ";
					echo " ], ";
					echo " width: 10 ";
					echo " } ";
					echo " }, ";
					echo " axisTick: { ";
					echo " length: 15, ";
					echo " lineStyle: { ";
					echo " color: 'auto' ";
					echo " } ";
					echo " }, ";
					echo " splitLine: { ";
					echo " length: 20, ";
					echo " lineStyle: { ";
					echo " color: 'auto' ";
					echo " } ";
					echo " }, ";
					echo " pointer: { ";
					echo " width:4 ";
					echo " }, ";
					echo " title : { ";
					echo " offsetCenter: [0, '80%'], ";
					echo " textStyle: { ";
					echo " fontSize: 18 ";
					echo " } ";
					echo " }, ";
					echo " detail : { ";
					echo " textStyle: { ";
					echo " fontWeight: 'bolder' ";
					echo " } ";
					echo " }, ";
					echo " data:[{value: ";
					echo $data["congest"]*100;
					echo " , name: '壅塞度(%)'}] ";
					echo " } ";
					echo " ] ";
					echo " }; ";
					echo " myChart_congest.setOption(option_congest); ";
					echo " </script> ";		
				}
				?>																														
															
					<div class="controls col-lg-12 text-center" style="height:60px;margin-top:25px;">
						<input type="button" value="返回" style="width:22%;" onclick="location.href='service_beitou_time_zh_TW.html'"/>
					</div>
					
				</div>
			</div>
		</section>
		<!--/#recent-projects-->
	
		<!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
					<p>&copy; InfiArk Technology 2016. All Rights Reserved.</p>
					<p>Crafted by <a href="../index_zh_TW.html">無限方舟科技股份有限公司</a></p>				
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