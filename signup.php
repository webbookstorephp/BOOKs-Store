<?php include("header.php");

if(!empty($_POST["dangky"])) {

	/* Yêu cầu Xác thực Trường Bắt buộc */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
			$error_message = "Tất cả các trường không được bỏ trống";	break;
		}
	}
	/* Kiểm tra user có tồn tại không */
	if(!isset($error_message)) {
		if(mysqli_num_rows(mysqli_query($conn, "SELECT `UserName` FROM `khachhang` WHERE `UserName`= '" .$_POST["username"]. "' ")) > 0){ 
			$error_message = 'Tên tài khoản đã tồn tại'; 
		}
	}
	/* Xác nhân mật khẩu nhập lại có khớp hay không */
	if(!isset($error_message)) {
		if($_POST['password'] != $_POST['re-password']){ 
			$error_message = 'Mật khẩu không khớp'; 
		}
	}
	/* Kiểm tra email có hợp lệ không */
	if(!isset($error_message)) {
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$error_message = "Email không hợp lệ";
		}
	}
	/* Kiểm tra email có tồn tại hay không */
	if(!isset($error_message)) {
		if (mysqli_num_rows(mysqli_query($conn, "SELECT `Email` FROM `khachhang` WHERE `Email`= '{$_POST["email"]}' ")) >0 ) {
			$error_message = "Email đã tồn tại";
		}
	}

	if(!isset($error_message)) {
		$ngaydk = date("Y-m-d h:i:s",time());
		$query = mysqli_query($conn, "INSERT INTO `khachhang` VALUES(NULL, '".md5($_POST['password'])."', '{$_POST['username']}', '{$_POST['email']}', '{$_POST['hoten']}', '{$_POST['dienthoai']}', '{$_POST['diachi']}', '{$ngaydk}', 1) ");

		if(!empty($query)) {
			$error_message = "";
			$success_message = "Bạn đã đăng ký thành công! <a href='#' data-toggle='modal' data-target='#myModal88'>Đăng nhập ngay</span></a>";	
			unset($_POST);
		} else {
			$error_message = "Xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại!";	
		}
	}
} ?>

<div class="about">
	<h2 align="center">Đăng ký tài khoản thành viên</h2><br/>
	<div class="container">	
		
		<div class="w3ls_about_grids">
			<div class="col-md-3"></div>
			<div class="col-md-6 w3ls_about_grid_left">
				<form action="" method="post">
				<div class="form-group">
					<?php if(!empty($success_message)) { ?>	
						<div class="alert alert-success"><?php if(isset($success_message)) echo $success_message; ?></div>
					<?php } ?>

					<?php if(!empty($error_message)) { ?>	
						<div class="alert alert-danger"><?php if(isset($error_message)) echo $error_message; ?></div>
					<?php } ?>
				</div>
				<div class="form-group">
					<label for="">Họ tên</label>
					<input type="text" class="form-control" name="hoten" placeholder="Họ tên" value="<?php if(isset($_POST['hoten'])) echo $_POST['hoten']; ?>" required="">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required="">
				</div>
				<div class="form-group">
					<label for="">Tài khoản</label>
					<input type="text" class="form-control" name="username" placeholder="Tài khoản" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" required="">
				</div>
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="">
				</div>
				<div class="form-group">
					<label for="">Nhập lại mật khẩu</label>
					<input type="password" class="form-control" name="re-password" placeholder="Nhập lại mật khẩu" required="">
				</div>
				<div class="form-group">
					<label for="">Số điện thoại</label>
					<input type="number" class="form-control" name="dienthoai" placeholder="Điện thoại" value="<?php if(isset($_POST['dienthoai'])) echo $_POST['dienthoai']; ?>" required="">
				</div>
				<div class="form-group">
					<label for="">Địa chỉ</label>
					<input type="text" class="form-control" name="diachi" placeholder="Địa chỉ" value="<?php if(isset($_POST['diachi'])) echo $_POST['diachi']; ?>" required="">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="dangky" value="Đăng ký">
				</div>
				</form>
			</div>
			<div class="col-md-3"></div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

	<!-- newsletter -->
<?php include("footer.php"); ?>