<div class="wthree_general graph-form agile_info_shadow ">
<h3 class="w3_inner_tittle two">Cập nhật loại sản phẩm</h3>

<div class="grid-1 ">
<div class="form-body">
	<?php  
	$idloai=$_GET['idLoai'];
	$row =mysqli_query($conn, "select * from `loaisanpham` where `id` = $idloai ");
	while($result= mysqli_fetch_assoc($row))
	{
	?>
	<form class="form-horizontal" name="themloaisanpham" method="post" action="xuly.php">
		<div class="form-group">
			<?php  
				$sql=mysqli_query($conn,"SELECT id, TenDM FROM `danhmucsanpham` order by id DESC");
			?>
			<label for="idDM" class="col-sm-2 control-label">Danh mục</label>
			<div class="col-sm-8">
				<select name="idDM" id="idDM" class="form-control1">
					<?php  while ($tsp=mysqli_fetch_assoc($sql)) {?>
						<option value="<?php echo $tsp['id'];?>" 
							<?php if(isset($_GET['idDM']) && $_GET['idDM']==$tsp['id'])
								{ 
									echo "selected='selected'";
									$idDM=$_GET['idDM'];
							}?>>
							<?php echo $tsp['TenDM'];?>
						</option>
					<?php } ?>
				</select>
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="form-group">
			<label for="Alias" class="col-sm-2 control-label">Alias</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="Alias" name="Alias" placeholder="Nhập alias" value="<?php echo $result['Alias'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>
		
		<div class="form-group">
			<label for="TenLoai" class="col-sm-2 control-label">Tên loại sản phẩm</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" id="TenLoai" name="TenLoai" placeholder="Nhập tên loại sản phẩm" value="<?php echo $result['TenLoai'];?>">
			</div>
			<div class="col-sm-2">
				<p class="help-block"></p>
			</div>
		</div>

		<div class="form-group">
			<label for="ThuTu" class="col-sm-2 control-label">Thứ tự hiển thị</label>
			<div class="col-sm-8">
				<input type="number" class="form-control1" id="ThuTu" name="ThuTu" placeholder="Nhập Thứ tự hiển thị" value="<?php echo $result['ThuTu'];?>" >
			</div>
		</div>

		<div class="form-group">
			<label for="AnHien" class="col-sm-2 control-label">Ẩn Hiện</label>
			<div class="col-sm-8">
				<?php
                    if($result["AnHien"] == true) {
                        $Hien=1;
                    } else {
                        $An=0;
                    }
                ?>
				<div class="radio-inline"><label><input type="radio" name="AnHien" value="0"> Ẩn </label></div>
				<div class="radio-inline"><label><input type="radio" name="AnHien"  value="1" <?php if($result['AnHien']) echo "checked" ?>> Hiện</label>

				</div>
			</div>
		</div>
		
		<div class="form-group mb-n">
			<input type="hidden" name="idLoai" value=" <?php echo $result['id'];?> ">
			<button class="btn btn-success" type="submit" name="capnhatloaisanpham">Cập nhật</button>
			<a class="btn btn-danger" href="index.php?k=loaisanpham">Huỷ</a>
		</div>
	</form>
	<?php } ?>
</div>

</div>
</div>