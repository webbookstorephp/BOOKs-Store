<?php session_start(); ob_start(); include("ketnoi.php");
	require_once('libraries/Database.php');
	$db = new Database;
	
	$error_login=""; // Khởi tạo biến chứa lỗi
	if (isset($_POST['login'])) {
		if (empty($_POST['email']) || empty($_POST['pass']))
		{
			$error_login = "Email hoặc Password trống";
		}
		else
		{
			// Gán username và password sang biến
			$email=$_POST['email'];
			$password=md5($_POST['pass']);

			// Bảo mật csdl khỏi injection
			$email = stripslashes($email); /* Loại bỏ các dấu /\ */
			$password = stripslashes($password);
			$email = mysqli_real_escape_string($conn, $email); /* loại bỏ các dấu '' */
			$password = mysqli_real_escape_string($conn, $password);

			$query = mysqli_query($conn, "SELECT * FROM `khachhang` WHERE `Email`='$email' AND `MatKhau`='$password' ");
			$row = mysqli_fetch_array($query);

			$rows = mysqli_num_rows($query);

			/* Nếu tồn tại username thì bất đầu đăng nhập và tạo session chuyển sang trang index.php */
			if ($rows > 0)
			{
				$_SESSION['User'] = $row['HoTen'];
				$_SESSION['IdUser'] = $row['id'];

				header("location: index.php");
			}
			else
			{
				$error_login = "Username hoặc Password không đúng";
			}
		}
	}

	if(isset($_POST['logout']))
	{
		unset($_SESSION['User']);
	    unset($_SESSION['IdUser']);
	    header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WELLCOM TO BOOKS STORE</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript">
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); }
</script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
	#qty {
		display: block;
		width: 55px;
		height: 34px;
		padding: 6px 12px;
		font-size: 14px;
		line-height: 1.42857143;
		color: #555;
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
		transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
	}
</style>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
<script>
function profile() {
    window.location.assign("profile.php");
}
</script>
</head> 
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Đăng nhập hoặc Đăng ký</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Đăng nhập</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input name="email" placeholder="Email" type="email" required="">
													<input name="pass" placeholder="Mật khẩu" type="password" required="">
													<span style="text-align: center; color: red"><?php echo $error_login; ?></span>
													<div class="sign-up">
														<input type="submit" name="login" value="Đăng nhập"/>
													</div>
												</form>
												<p>Chưa có tài khoản? <a href="signup.php">Đăng ký ngay</a></p>
											</div>
										</div> 
									</div>	 

								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Đăng nhập bằng</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="https://www.facebook.com/" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="https://plus.google.com/" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="https://twitter.com/" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Popup login and sing up
		<script>
			$('#myModal88').modal('show');
		</script>
		-->  
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login" style="float: left;">
			<?php if(!isset($_SESSION['User'])){ ?>
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			<?php } else { ?>
				<div class="dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?=$_SESSION['User'];?>
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><input type="button" class="btn btn-info" value="Thông tin cá nhân" onclick="profile();" style="width: 100%;"></li>
						<li>
							<form method="post">
								<input class="btn btn-danger" type="submit" name="logout" value="Thoát" style="width: 100%;">
							</form>
						</li>
					</ul>
				</div>
			<?php } ?>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.php">BOOKS STORE ONLINE<span> Sách gì cũng có :)!!! </span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="search.php" method="get">
						<input type="text" name="keyword" placeholder="Từ khoá cần tìm...">
						<input type="submit" value="Tìm ">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<a href="gio-hang.php" class="w3view-cart"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<?php include("menu.php"); ?>