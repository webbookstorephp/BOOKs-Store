<?php include("header.php");
if(isset($_POST["capnhat"])) {
	
	if(empty($_POST['hoten'])){
		$error_message = 'Tên không được bỏ trống';
	}
	else if(empty($_POST['dienthoai'])){
		$error_message = 'Số điện thoại không được bỏ trống';
	}
	else if(empty($_POST['diachi'])){
		$error_message = 'Địa chỉ không được bỏ trống';
	} else {
		// Không cập nhật mật khẩu
		if(empty($_POST['password']) && empty($_POST['re-password'])){
			if(!isset($error_message)) {
				$query = mysqli_query($conn, "UPDATE `khachhang` SET `HoTen` = '{$_POST['hoten']}', `DienThoai` = '{$_POST['dienthoai']}', `DiaChi` = '{$_POST['diachi']}' WHERE `khachhang`.`id` = {$_SESSION['IdUser']};");

				
			}
		}
		else { // có cập nhật mật khẩu
			/* Xác nhân mật khẩu nhập lại có khớp hay không */
			if(!isset($error_message)) {
				if($_POST['password'] != $_POST['re-password']){ 
					$error_message = 'Mật khẩu không khớp'; 
				}
			}

			if(!isset($error_message)) {
				$query = mysqli_query($conn, "UPDATE `khachhang` SET `MatKhau` = '".md5($_POST['password'])."',`HoTen` = '{$_POST['hoten']}', `DienThoai` = '{$_POST['dienthoai']}', `DiaChi` = '{$_POST['diachi']}' WHERE `khachhang`.`id` = {$_SESSION['IdUser']};");
			}
		}
		if(!empty($query)) {
			$error_message = "";
			$success_message = "Bạn đã cập nhật thông tin thành công";	
			unset($_POST);
			header("location:profile.php");
		} else {
			$error_message = "Xảy ra lỗi trong quá trình cập nhật. Vui lòng thử lại!";	
		}
	}

}
?>

<div class="about">
	<h2 align="center">Cập nhật thông tin thành viên</h2><br/>
	<div class="container">	
		
		<div class="w3ls_about_grids">
			<div class="col-md-3"></div>
			<div class="col-md-6 w3ls_about_grid_left">
				<?php
					$query = mysqli_query($conn, "SELECT * FROM `khachhang` WHERE `id`={$_SESSION['IdUser']}");
					$result = mysqli_fetch_assoc($query);
				?>
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
					<input type="text" class="form-control" name="hoten" placeholder="Họ tên" value="<?php echo $result['HoTen']; ?>" required="">
				</div>
				<div class="form-group">
					<label for="">Số điện thoại</label>
					<input type="number" class="form-control" name="dienthoai" placeholder="Điện thoại" value="<?php echo $result['DienThoai'] ?>" required="">
				</div>
				<div class="form-group">
					<label for="">Địa chỉ</label>
					<input type="text" class="form-control" name="diachi" placeholder="Địa chỉ" value="<?php echo $result['DiaChi']; ?>" required="">
				</div>
				<div class="form-group">
					<p style="color: #000" class="alert alert-info"><span style="color: red;">* </span>Nếu không đổi mật khẩu hãy để trống trường mật khẩu bên dưới</p>
				</div>
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="password" class="form-control" name="password" placeholder="Mật khẩu">
				</div>
				<div class="form-group">
					<label for="">Nhập lại mật khẩu</label>
					<input type="password" class="form-control" name="re-password" placeholder="Nhập lại mật khẩu">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="capnhat" value="Cập nhật">
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