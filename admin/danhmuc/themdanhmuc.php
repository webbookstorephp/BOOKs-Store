<div class="wthree_general graph-form agile_info_shadow ">
<h3 class="w3_inner_tittle two">Thêm danh mục sản phẩm</h3>

<div class="grid-1 ">
<div class="form-body">
	<form class="form-horizontal" name="themdanhmuc" method="post" action="xuly.php">
		<div class="form-group">
			<label for="TenDM" class="col-sm-2 control-label">Tên danh mục</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="TenDM" name="TenDM" placeholder="Nhập tên danh mục">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>

		<div class="form-group">
			<label for="ThuTu" class="col-sm-2 control-label">Thứ tự hiển thị</label>
			<div class="col-sm-8">
				<input type="number" class="form-control1" id="ThuTu" name="ThuTu" placeholder="Nhập Thứ tự hiển thị">
			</div>
		</div>

		<div class="form-group">
			<label for="AnHien" class="col-sm-2 control-label">Ẩn Hiện</label>
			<div class="col-sm-8">
				<div class="radio-inline"><label><input type="radio" name="AnHien" value="0"> Ẩn </label></div>
				<div class="radio-inline"><label><input type="radio" name="AnHien"  value="1" checked=""> Hiện</label></div>
			</div>
		</div>
		
		<div class="form-group mb-n">
			<button class="btn btn-success" type="submit" name="themdanhmuc">Thêm</button>
			<a class="btn btn-danger" href="index.php?k=danhmuc">Huỷ</a>
		</div>
	</form>
</div>

</div>
</div>