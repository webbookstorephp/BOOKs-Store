<div class="wthree_general graph-form agile_info_shadow ">
<h3 class="w3_inner_tittle two">Cập nhật Admin</h3>

<div class="grid-1 ">
<div class="form-body">
	<?php  
	$idad=$_GET['idAdmin'];
	$row =mysqli_query($conn, "select * from `admin` where `id` = $idad");
	while($result= mysqli_fetch_assoc($row))
	{
	?>
	<form class="form-horizontal" name="themadmin" method="post" action="xuly.php">
		<div class="form-group">
			<label for="UserName" class="col-sm-2 control-label">User Name</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="UserName" name="UserName" placeholder="Nhập user name" value="<?php echo $result['UserName'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="PassWord" class="col-sm-2 control-label">Pass Word</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="PassWord" name="PassWord" placeholder="Nhập pass Word " value="<?php echo $result['PassWord'];?>">
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
			<label for="HoTen" class="col-sm-2 control-label">Tên admin</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="HoTen" name="HoTen" placeholder="Nhập tên admin" value="<?php echo $result['HoTen'];?>">
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
			<input type="hidden" name="idan" value=" <?php echo $result['id'];?> ">
			<button class="btn btn-success" type="submit" name="capnhatadmin">Cập nhật</button>
			<a class="btn btn-danger" href="index.php?k=admin">Huỷ</a>
		</div>
	</form>
	<?php } ?>
</div>

</div>
</div>