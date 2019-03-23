<div class="wthree_general graph-form agile_info_shadow ">
	<h3 class="w3_inner_tittle two">Cập nhật sản phẩm</h3>

	<div class="grid-1 ">
		<div class="form-body">
			<form class="form-horizontal" method="get" name="form1">
				<div class="form-group">
					<?php  
						$query=mysqli_query($conn,"SELECT * FROM `danhmucsanpham` ORDER BY `ThuTu` DESC");
					?>
					<label class="col-sm-2 control-label">Danh mục</label>
					<div class="col-sm-8">
						<select name="idDM" id="idDM" class="form-control1" onchange="form1.submit()">
							<?php 
								$i = 1;
								while ($dm=mysqli_fetch_assoc($query)){
								if($i == 1) { $idDM = $dm['id']; $i = 0; }
							?>
								<option value="<?php echo $dm['id']; ?>" <?php
									if(isset($_GET['idDM']) && $_GET['idDM'] == $dm['id']){
										echo "selected='selected'";
										$idDM = $_GET['idDM'];
									}
								?>><?php echo $dm['TenDM']; ?></option>
							<?php } ?>
						</select>
						<input type="hidden" name="k" id="k" value="sanphamadd" />
					</div>
					<div class="col-sm-2">
						<p class="help-block"></p>
					</div>
				</div>
			</form>
			<form class="form-horizontal" name="themsanpham" method="post" action="xuly.php" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="idLoại" class="col-sm-2 control-label">Loại sản phẩm</label>
					<div class="col-sm-8">
						<select name="idLoai" id="idLoai" class="form-control1">
							<?php
								$idLoai = 0;
								$query_l = mysqli_query($conn, "SELECT * FROM `loaisanpham` WHERE idDM={$idDM} ORDER BY ThuTu");
								while($row_l = mysqli_fetch_array($query_l)){
									if($idLoai == 0){
										$idLoai = $row_l['id'];
									}
							?>
								<option value="<?php echo $row_l['id']; ?>" <?php
									if(isset($_GET['idLoai']) && $_GET['idLoai'] == $row_l['id']) {
										echo "selected='selected'";
										$idLoai = $_GET['idLoai'];
									}
								?>><?php echo $row_l['TenLoai']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-sm-2">
						<p class="help-block"></p>
					</div>
				</div>
				<?php
					if(isset($_GET['idSP'])) {$idSP = $_GET['idSP']; }
					$select = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `id` = {$idSP}");
					$row = mysqli_fetch_assoc($select);
				?>
				<div class="form-group">
					<label for="TenSP" class="col-sm-2 control-label">Tên sản phẩm</label>
					<div class="col-sm-8">
						<input type="text" class="form-control1" id="TenSP" name="TenSP" value="<?php echo $row['TenSP'] ?>" placeholder="Nhập tên sản phẩm">
					</div>
					<div class="col-sm-2">
						<p class="help-block"></p>
					</div>
				</div>

				<div class="form-group">
					<label for="MoTa" class="col-sm-2 control-label">Mô tả</label>
					<div class="col-sm-8">
						<textarea class="form-control1" name="MoTa" id="MoTa" row="5" placeholder="Nhập mô tả sản phẩm"><?php echo $row['MoTa'] ?></textarea>
					</div>
					<div class="col-sm-2">
						<p class="help-block"></p>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Chi tiết</label>
					<div class="col-sm-8">
						<textarea class="" name="Content" id="Content"><?php echo $row['ChiTiet'] ?></textarea>
						<script>CKEDITOR.replace('Content');</script>
					</div>
					<div class="col-sm-2">
						<p class="help-block"></p>
					</div>
				</div>

				<div class="form-group">
					<label for="ufile" class="col-sm-2 control-label">Hình ảnh</label>
					<div class="col-sm-8">
						<input type="file" name="ufile" id="ufile">
						<img src="../<?php echo $row['UrlHinh']; ?>" width="100">
						<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
						<input type="hidden" name="image_hidden" value="<?php echo $row['UrlHinh']; ?>">
					</div>
					<div class="col-sm-2">
						<p class="help-block"></p>
					</div>
				</div>

				<div class="form-group">
					<label for="Gia" class="col-sm-2 control-label">Giá</label>
					<div class="col-sm-8">
						<input type="number" class="form-control1" id="Gia" name="Gia" value="<?php echo $row['Gia']; ?>" placeholder="Nhập giá sản phẩm">
					</div>
					<div class="col-sm-2">
						<p class="help-block"></p>
					</div>
				</div>

				<div class="form-group">
					<label for="Gia" class="col-sm-2 control-label">Giá giảm</label>
					<div class="col-sm-8">
						<input type="number" class="form-control1" id="GiaKhuyenMai" name="GiaKhuyenMai" value="<?php echo $row['GiaKhuyenMai']; ?>" placeholder="Nhập giá giảm">
					</div>
					<div class="col-sm-2">
						<p class="help-block"></p>
					</div>
				</div>

				<div class="form-group">
					<label for="TonKho" class="col-sm-2 control-label">Số lượng</label>
					<div class="col-sm-8">
						<input type="number" class="form-control1" id="TonKho" name="TonKho" value="<?php echo $row['TonKho']; ?>" placeholder="Nhập số lượng sản phẩm tồn kho ">
					</div>
					<div class="col-sm-2">
						<p class="help-block"></p>
					</div>
				</div>

				<div class="form-group">
					<label for="ThuTu" class="col-sm-2 control-label">Thứ tự hiển thị</label>
					<div class="col-sm-8">
						<input type="number" class="form-control1" id="ThuTu" name="ThuTu" value="<?php echo $row['ThuTu']; ?>" placeholder="Nhập Thứ tự hiển thị">
					</div>
				</div>

				<div class="form-group">
					<label for="AnHien" class="col-sm-2 control-label">Trạng thái</label>
					<div class="col-sm-8">
						<?php
		                    if($row["AnHien"] == true) {
		                        $Hien=1;
		                    } else {
		                        $An=0;
		                    }
		                ?>
						<div class="radio-inline">
							<label>
								<input type="radio" name="AnHien" value="0" <?php if(isset($An)) { ?>checked<?php  } ?>> Ẩn 
							</label>
						</div>
						<div class="radio-inline">
							<label>
								<input type="radio" name="AnHien" value="1" <?php if(isset($Hien)) { ?>checked<?php  }?>> Hiện
							</label>
						</div>
					</div>
				</div>
				
				<div class="form-group mb-n">
					<input type="hidden" name="idDM" id="idDM" value="<?php echo $idDM; ?>" />
					<input type="hidden" name="idLoai" id="idLoai" value="<?php echo $idDM; ?>" />
					<input type="hidden" name="idSP" id="idSP" value="<?php echo $idSP; ?>" />
					<button class="btn btn-success" type="submit" name="capnhatsanpham">Cập nhật</button>
					<a class="btn btn-danger" href="index.php?k=sanpham">Huỷ</a>
				</div>
			</form>
		</div>
	</div>
</div>