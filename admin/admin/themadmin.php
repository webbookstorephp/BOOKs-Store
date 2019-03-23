<div class="wthree_general graph-form agile_info_shadow ">
<h3 class="w3_inner_tittle two">Thêm Admin</h3>

<div class="grid-1 ">
<div class="form-body">
	<form class="form-horizontal" name="themkhachhang" method="post" action="xuly.php">

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
			<label for="PassWord" class="col-sm-2 control-label">Pass Word</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="PassWord" name="PassWord" placeholder="Nhập Pass Word ">
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
			<label for="HoTen" class="col-sm-2 control-label">Tên Admin</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="HoTen" name="HoTen" placeholder="Nhập tên Khách hàng">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>

		<div class="form-group">
			<?php  
				$sql=mysqli_query($conn,"SELECT idQuyen, TenQuyen FROM `phanquyen` order by idQuyen DESC");
			?>
			<label for="idDM" class="col-sm-2 control-label">Quyền</label>
			<div class="col-sm-8">
				<select name="idQuyen" id="idQuyen" class="form-control1">
					<?php  while ($tq=mysqli_fetch_assoc($sql)) {?>
						<option value="<?php echo $tq['idQuyen'];?>" 
							<?php if(isset($_GET['idQuyen']) && $_GET['idQuyen']==$tq['idQuyen'])
								{ 
									echo "selected='selected'";
									$idDM=$_GET['idQuyen'];
							}?>>
							<?php echo $tq['TenQuyen'];?>
						</option>
					<?php } ?>
				</select>
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
			<button class="btn btn-success" type="submit" name="themadmin">Thêm</button>
			<a class="btn btn-danger" href="index.php?k=admin">Huỷ</a>
		</div>
	</form>
</div>

</div>
</div>