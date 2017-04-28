<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Service_Neihu | InfiArk</title>
	
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
					<h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">中正智慧交通服務</h1>
					<p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms" style="font-size:120%;">Zhongzheng Intelligent Traffic Prediction Service</p>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h2 class="page-header">塞車機率及壅塞度 / <a href="service_zhongzheng_time.html">其他查詢條件</a> / <a href="service_zhongzheng.php">其他中正路段</a> / <a href="../service.html">其他行政區域</a></h2>
					</div>	
						
					<div class="col-md-3 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div id="jampercent" style="width: 100%;height:225%;"></div>					
					</div>
					<div class="col-md-3 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div id="congest" style="width: 100%;height:225%;"></div>					
					</div>				
					<div class="col-md-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h2>
							<?php
								include("../mysql.inc.php");
								$weekday = $_POST["weekday"];
								$time = $_POST["time"];
								$vd = $_POST["vd"];
								$direction = $_POST["direction"];								
								$sqlposition = "select position 'position' from cj20170227 where vd='$vd'";	
								$queryposition= mysqli_query($conn, $sqlposition);								
								$queryposition = mysqli_fetch_assoc($queryposition);								
								$positionquery = $queryposition["position"];									
								echo $positionquery;	
							?>						
						</h2>
						<p>編號：
							<?php
								include("../mysql.inc.php");
								$weekday = $_POST["weekday"];
								$time = $_POST["time"];
								$vd = $_POST["vd"];
								$direction = $_POST["direction"];								
								echo $vd;	
							?>						
						</p>
						<p>時間：
							<?php
								include("../mysql.inc.php");
								$weekday = $_POST["weekday"];
								$time = $_POST["time"];
								$vd = $_POST["vd"];
								$direction = $_POST["direction"];
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
							?>						
						</p>						
						<p>方向：
							<?php
								include("../mysql.inc.php");
								$weekday = $_POST["weekday"];
								$time = $_POST["time"];
								$vd = $_POST["vd"];
								$direction = $_POST["direction"];
								if ($direction == "東"){
									echo "往東";
								}elseif($direction == "西"){
									echo "往西";									
								}elseif($direction == "南"){
									echo "往南";									
								}elseif($direction == "北"){
									echo "往北";									
								}else{
									echo "未知";									
								}
							?>						
						</p>						
					</div>

					<script type="text/javascript">
						// 基于准备好的dom，初始化echarts实例
						var myChart_jampercent = echarts.init(document.getElementById('jampercent'));

						// 指定图表的配置项和数据
						//jampercent
						option_jampercent = {
							series : [
								{
									name: '塞車機率',
									type: 'gauge',
				//					center: ['25%', '50%'],    // 默认全局居中
									radius: '90%',
									min:0,
									max:100,
									startAngle:225,
									endAngle:-45,
									splitNumber:10,
									axisLine: {            // 坐标轴线
										lineStyle: {       // 属性lineStyle控制线条样式
											color: [
												[0.25, '#91c7ae'],
												[0.5, '#63869e'],
												[0.75, '#EFC631'],
												[1, '#c23531']
											],						
											width: 8
										}
									},
									axisTick: {            // 坐标轴小标记
										length:12,        // 属性length控制线长
										lineStyle: {       // 属性lineStyle控制线条样式
											color: 'auto'
										}
									},
									splitLine: {           // 分隔线
										length:20,         // 属性length控制线长
										lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
											color: 'auto'
										}
									},
									pointer: {
										width:3
									},
									title: {
										offsetCenter: [0, '20%'],       // x, y，单位px
										textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
				//							fontWeight: 'bolder',
											fontSize: 18
										}						
									},
									detail: {
										textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
											fontWeight: 'bolder'
										}
									},
									data:[{value: <?php
					include("../mysql.inc.php");
					$weekday = $_POST["weekday"];
					$time = $_POST["time"];
					$vd = $_POST["vd"];
					$direction = $_POST["direction"];
					$sqljampercent = "select jampercent 'jampercent' from cj20170227 where weekday='$weekday' and time='$time' and vd='$vd' and direction='$direction'";
					$queryjampercent= mysqli_query($conn, $sqljampercent);	
					$queryjampercent = mysqli_fetch_assoc($queryjampercent);	
					$jampercentquery = $queryjampercent["jampercent"];	
					echo $jampercentquery*100;	
				?>, name: '塞車機率(%)'}]
								}
							]
						};

						// 使用刚指定的配置项和数据显示图表。
						myChart_jampercent.setOption(option_jampercent);
						
						//congest
						var myChart_congest = echarts.init(document.getElementById('congest'));

						// 指定图表的配置项和数据
						option_congest = {
							series : [
								{
									name: '壅塞度',
									type: 'gauge',
									z: 3,
									min: 0,
									max: 100,
									startAngle:225,
									endAngle:-45,					
									splitNumber: 10,
									center: ['50%', '50%'],    // 默认全局居中					
									radius: '100%',
									axisLine: {            // 坐标轴线
										lineStyle: {       // 属性lineStyle控制线条样式
											color: [
												[0.25, '#91c7ae'],
												[0.5, '#63869e'],
												[0.75, '#EFC631'],
												[1, '#c23531']
											],						
											width: 10
										}
									},
									axisTick: {            // 坐标轴小标记
										length: 15,        // 属性length控制线长
										lineStyle: {       // 属性lineStyle控制线条样式
											color: 'auto'
										}
									},
									splitLine: {           // 分隔线
										length: 20,         // 属性length控制线长
										lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
											color: 'auto'
										}
									},
									pointer: {
										width:4
									},
									title : {
										offsetCenter: [0, '20%'],       // x, y，单位px						
										textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
				//							fontWeight: 'bolder',
											fontSize: 18
										}
									},
									detail : {
										textStyle: {       // 其余属性默认使用全局文本样式，详见TEXTSTYLE
											fontWeight: 'bolder'
										}
									},
									data:[{value: <?php
					include("../mysql.inc.php");
					$weekday = $_POST["weekday"];
					$time = $_POST["time"];
					$vd = $_POST["vd"];
					$direction = $_POST["direction"];
					$sqlcongest = "select congest 'congest' from cj20170227 where weekday='$weekday' and time='$time' and vd='$vd' and direction='$direction'";
					$querycongest= mysqli_query($conn, $sqlcongest);	
					$querycongest = mysqli_fetch_assoc($querycongest);	
					$congestquery = $querycongest["congest"];		
					echo $congestquery*100;	
				?>, name: '壅塞度(%)'}]
								}
							]
						};

						// 使用刚指定的配置项和数据显示图表。
						myChart_congest.setOption(option_congest);		
						
					</script>

					<div class="controls col-lg-12 text-center" style="height:60px;margin-top:25px;">
						<input type="button" value="返回" style="width:22%;" onclick="location.href='service_zhongzheng_time.html'"/>
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

    <script src="../jquery/dist/jquery.min.js"></script>	
    <script src="echarts.min.js"></script>		
	
</body>

</html>
