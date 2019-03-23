<div class="wthree_general graph-form agile_info_shadow ">
<h3 class="w3_inner_tittle two">Cập nhật khách hàng</h3>

<div class="grid-1 ">
<div class="form-body">
	<?php  
	$idkh=$_GET['idKH'];
	$row =mysqli_query($conn, "select * from `khachhang` where `id` = $idkh");
	while($result= mysqli_fetch_assoc($row))
	{
	?>
	<form class="form-horizontal" name="themkhachhang" method="post" action="xuly.php">
		<div class="form-group">
			<label for="MatKhau" class="col-sm-2 control-label">Mật khẩu</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="MatKhau" name="MatKhau" placeholder="Nhập mật khẩu" value="<?php echo $result['MatKhau'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="UserName" class="col-sm-2 control-label">User Name</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="UserName" name="UserName" placeholder="Nhập user name " value="<?php echo $result['UserName'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="Email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="Email" name="Email" placeholder="Nhập email khách hàng" value="<?php echo $result['Email'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="HoTen" class="col-sm-2 control-label">Tên khách hàng</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="HoTen" name="HoTen" placeholder="Nhập tên khách hàng" value="<?php echo $result['HoTen'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="DienThoai" class="col-sm-2 control-label">Số Điện Thoại</label>
			<div class="col-sm-8">
				<input type="number" class="form-control1" id="DienThoai" name="DienThoai" placeholder="Nhập số điện thoại" value="<?php echo $result['DienThoai'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="DiaChi" class="col-sm-2 control-label">Địa Chỉ</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="DiaChi" name="DiaChi" placeholder="Nhập địa chỉ khách hàng" value="<?php echo $result['DiaChi'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="TrangThai" class="col-sm-2 control-label">Trạng thái</label>
			<div class="col-sm-8">
				<input type="number" class="form-control1" id="number" name="TrangThai" placeholder="Nhập trạng thái" value="<?php echo $result['TrangThai'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>	
		<div class="form-group mb-n">
			<input type="hidden" name="idan" value=" <?php echo $result['id'];?> ">
			<button class="btn btn-success" type="submit" name="capnhatkhachhang">Cập nhật</button>
			<a class="btn btn-danger" href="index.php?k=khachhang">Huỷ</a>
		</div>
	</form>
	<?php } ?>
</div>

</div>
</div>