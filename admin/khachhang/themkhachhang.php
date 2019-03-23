<div class="wthree_general graph-form agile_info_shadow ">
<h3 class="w3_inner_tittle two">Thêm khách hàng</h3>

<div class="grid-1 ">
<div class="form-body">
	<form class="form-horizontal" name="themkhachhang" method="post" action="xuly.php">

		<div class="form-group">
			<label for="MatKhau" class="col-sm-2 control-label">Mật khẩu</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="MatKhau" name="MatKhau" placeholder="Nhập mật khẩu">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="UserName" class="col-sm-2 control-label">User Name</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="UserName" name="UserName" placeholder="Nhập user name">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="Email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="Email" name="Email" placeholder="Nhập email">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>

		<div class="form-group">
			<label for="HoTen" class="col-sm-2 control-label">Tên khách hàng</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="HoTen" name="HoTen" placeholder="Nhập tên Khách hàng">
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
				<input type="text" class="form-control1" id="DiaChi" name="DiaChi" placeholder="Nhập địa chỉ khách hàng">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>

		<div class="form-group">
			<label for="NgayDangKy" class="col-sm-2 control-label">Ngày Đăng Ký</label>
			<div class="col-sm-8">
				<input type="date" class="form-control1" id="NgayDangKy" name="NgayDangKy" placeholder="Nhập ngày đăng ký" value="<?php echo $result['NgayDangKy'];?>">
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
			<button class="btn btn-success" type="submit" name="themkhachhang">Thêm</button>
			<a class="btn btn-danger" href="index.php?k=khachhang">Huỷ</a>
		</div>
	</form>
</div>

</div>
</div>