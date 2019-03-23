<?php include("header.php"); 
	$row = $db->fetchID("khachhang",intval($_SESSION['IdUser']));

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		// them bang chi don hang truoc
		$data = 
		[
			'TongTien' => $_SESSION['tongtien'],
			'idUser' => $_SESSION['IdUser'],
			'GhiChu' => $_POST['ghichu']
		];
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		$tranId = $db->insert("chitietdonhang", $data);

		// them don hang vao bang sau
		if($tranId > 0)
		{
			foreach($_SESSION['cart'] as $key => $value)
			{
				$data2 = 
				[
					'idCTDH'	=> $tranId,
					'idSP'		=> $key,
					'SoLuong'	=> $value['qty'],
					'GiaBan'	=> $value['price']
				];
				$id_insert = $db->insert("donhang", $data2);
			}

			unset($_SESSION['cart']);
			unset($_SESSION['tongtien']);

			$_SESSION['success'] = "Đặt hàng thành công! chúng tôi sẽ liên hệ bạn sớm nhất.";
			header("location: thong-bao.php");
		}
	}
?>

<!-- breadcrumbs -->
<div class="breadcrumb_dress">
	<div class="container">
		<ul>
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
			<li>Thanh toán<i></i></li>
		</ul>
	</div>
</div>
<!-- //breadcrumbs -->  

<div class="about">
	<h2 align="center">Thanh toán đơn hàng</h2><br/>
	<div class="container">	
		
		<div class="w3ls_about_grids">
			<div class="col-md-12">
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" readonly="" class="form-control" name="hoten" placeholder="Họ Tên" value="<?php echo $row['HoTen']; ?>" required="">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" readonly="" class="form-control" name="email" placeholder="Email" value="<?php echo $row['Email']; ?>" required="">
					</div>
					<div class="form-group">
						<label for="">SDT</label>
						<input type="text" readonly="" class="form-control" name="dienthoai" placeholder="Số điện thoại" value="<?php echo $row['DienThoai']; ?>" required="">
					</div>
					<div class="form-group">
						<label for="">Địa chỉ</label>
						<input type="text" readonly="" class="form-control" name="diachi" placeholder="Địa chỉ" value="<?php echo $row['DiaChi']; ?>" required="">
					</div>
					<div class="form-group">
						<label for="">Tổng tiền thanh toán</label>
						<input type="text" readonly="" class="form-control" name="tongtien" placeholder="Tổng tiền" value="<?php echo $_SESSION['tongtien']; ?>" required="">
					</div>
					<div class="form-group">
						<label for="">Ghi chú</label>
						<input type="text" class="form-control" name="ghichu" placeholder="Ghi chú" >
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Đặt hàng">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>