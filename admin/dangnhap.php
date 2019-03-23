<?php session_start(); ob_start(); include('../ketnoi.php');

	$error=""; // Khởi tạo biến chứa lỗi
	if (isset($_POST['login'])) {
		if (empty($_POST['email']) || empty($_POST['psw']))
		{
			$error = "Username hoặc Password trống";
		}
		else
		{
			// Gán username và password sang biến
			$email=$_POST['email'];
			$password=md5($_POST['psw']);

			// Bảo mật csdl khỏi injection
			$email = stripslashes($email); /* Loại bỏ các dấu /\ */
			$password = stripslashes($password);
			$email = mysqli_real_escape_string($conn, $email); /* loại bỏ các dấu '' */
			$password = mysqli_real_escape_string($conn, $password);

			$query = mysqli_query($conn, "SELECT * FROM `admin` WHERE Email='$email' and `PassWord`='$password'");
			$row = mysqli_fetch_array($query);

			$rows = mysqli_num_rows($query);

			/* Nếu tồn tại email thì bất đầu đăng nhập và tạo session chuyển sang trang index.php */
			if ($rows > 0)
			{
				$_SESSION['hoten'] = $row['HoTen'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['capdo'] = $row['idQuyen'];

				header("location: index.php");
			}
			else
			{
				$error = "Username hoặc Password không đúng";
			}

		}
	}

if(isset($_SESSION['id'])) header("location:index.php");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Đăng nhập trang quản trị</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- /pages_agile_info_w3l -->

<div class="pages_agile_info_w3l">
	<!-- /login -->
   <div class="over_lay_agile_pages_w3ls">
	    <div class="registration">
			<div class="signin-form profile">
				<h2>Shop Linh Kiện</h2>
				<div class="login-form">
					<form action="" method="post">
						<input type="email" name="email" placeholder="Email" required="">
						<input type="password" name="psw" placeholder="Password" required="">
						<span style="text-align: center; color: red"><?php echo $error; ?></span>
						<div class="tp">
							<input type="submit" name="login" value="Đăng nhập">
						</div>
					</form>
				</div>
			</div>
		</div>
				<!--copy rights start here-->
		<div class="copyrights_agile">
			 <p>© 2018 Shop linh kiện | Thiết kế bởi:  <a href="https://www.facebook.com/khang.vohoang.31" target="_blank">Nguyên Võ</a> </p>
		</div>	
					<!--copy rights end here-->
    </div>
</div>
	<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script src="js/modernizr.custom.js"></script>

   <script src="js/classie.js"></script>
  <script src="js/gnmenu.js"></script>
  <script>
	new gnMenu( document.getElementById( 'gn-menu' ) );
 </script>
	
<!-- //js -->

<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/snow.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>