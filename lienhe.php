<?php include("header.php"); ?>

<?php 
	// if(isset($_POST['guilienhe'])) {
	// 	$data = array(
	// 		'name' => $_POST['name'],
	// 		'email' =>$_POST['email'],
	// 		'phone' => $_POST['phone'],
			
	// 	);
	// }
?>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>Mail Us</h2>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Liên hệ</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3 style="font-weight: bold;">Thông Tin Liên Hệ</h3>
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<li>Địa chỉ: 59, Phường 5, quận Gò Vấp, TP. HCM, Việt Nam</li>
					<li>Số điện thoại: 0948468569</li>
					<li>Hotline: 01628868174</li>
					<li>Fax: 1123456789</li>
					<li>Email: <a href="mailto:hoangtam.0910@gmail.com">hoangtam.0910@gmail.com</a></li>
					
				</div>
				<div class="col-md-7 contact-left">
					<h4>Nhập thông tin liên hệ</h4>
					<form action="" method="post">
						<input type="text" name="name" placeholder="Họ tên" required="">
						<input type="email" name="email" placeholder="Địa chỉ email" required="">
						<input type="text" name="phone" placeholder="Số điện thoại" required="">
						<textarea name="message" placeholder="Ghi chú..." required=""></textarea>
						<input type="submit" name="guilienhe" value="Gửi" >
					</form>
				</div>
				<br>
				<p>	<h2 style="color: #3c43a4">Bản đồ đến shop: </h2></p>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.778124317364!2d106.68895871431073!3d10.828284492286365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528f6d65e755b%3A0xde91877fc68d7944!2zVW5uYW1lZCBSb2FkLCBwaMaw4budbmcgNSwgR8OyIFbhuqVwLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1523974861390" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- //mail -->
	<!-- newsletter -->
	<?php include("footer.php"); ?>