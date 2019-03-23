<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
	<div class="w3l_agileits_breadcrumbs_inner">
		<ul>
			<li><a href="index.php">Home</a><span>«</span></li>
			
			<li>Sản phẩm</li>
		</ul>
	</div>
</div>
<!-- //breadcrumbs -->

<div class="inner_content_w3_agile_info two_in">
				<!-- tables -->
	
<div class="agile-tables">
	<div class="w3l-table-info agile_info_shadow">
		<div style="display: inline-block; width: 100%">
			<div class="col-sm-3">
				<h3 class="w3_inner_tittle two" style="float: left;">Sản phẩm</h3>	
			</div>
			<div class="col-sm-6">
				<form method="get" name="form1" >
					<select  name="idDM" id="idDM" onchange="form1.submit()">
						<option value="">-- Chọn danh mục --</option>
						<?php
							$query = mysqli_query($conn, "SELECT * FROM `danhmucsanpham`  ORDER BY ThuTu");
							$i = 1;
							while($row = mysqli_fetch_array($query)){
								if($i==1){
									$idDM = $row['id'];
									$i=0;
								}
						?>
						<option value="<?php echo $row['id']; ?>" <?php if(isset($_GET['idDM'])&&$_GET['idDM']==$row['id']){
								echo "selected='selected'";
								$idDM = $_GET['idDM'];
							} ?>><?php echo $row['TenDM']; ?></option>
						<?php } ?>
					</select>
					<select name="idLoai" id="idLoai" onchange="form1.submit()">
						<option value="">-- Chọn loại sản phẩm --</option>
						<?php
							$idLoai = 0;
							$query_lsp = mysqli_query($conn, "SELECT * FROM `loaisanpham` WHERE `idDM`=$idDM ORDER BY ThuTu");
							while($row_lsp = mysqli_fetch_array($query_lsp)){
								if($idLoai==0){ $idLoai = $row_lsp['id']; }
						?>
							<option value="<?php echo $row_lsp['id']; ?>"
								<?php if(isset($_GET['idLoai']) && $_GET['idLoai']==$row_lsp['id'])
								{ echo "selected='selected'"; $idLoai = $_GET['idLoai']; } ?>>
							<?php echo $row_lsp['TenLoai']; ?>
							</option>
						<?php } ?>
					</select>
					<input type="hidden" name="k" id="k" value="sanpham" />
				</form>
			</div>
			<div class="col-sm-3">
				<a class="btn btn-success" href="index.php?k=sanphamadd" style="float: right;">Thêm</a>	
			</div>
		</div>
	 
		<table id="table">
			<thead>
			  <tr>
				<th>Mã</th>
				<th width="30%">Tên sản phẩm</th>
				<th>Tồn kho</th>
				<th>Giá</th>
				<th>Ngày tạo</th>
				<th>Thứ tự</th>
				<th>Trạng thái</th>
				<th>Tuỳ chọn</th>
			  </tr>
			</thead>
			<tbody>
				<?php 
					$sql=mysqli_query($conn,"SELECT * FROM `sanpham` WHERE `idLoai`={$idLoai} ORDER BY ThuTu DESC ");
					while($tsp=mysqli_fetch_assoc($sql))
					{
				?>
					
				  <tr>
					<td><?php echo $tsp['id'];?></td>
					<td>
						<div style="float: left; margin-right: 5px;">
							<img src="../<?php echo $tsp['UrlHinh']; ?>" width="75">	
						</div>
						<div style="margin-top: 5px;" >
							<p><b><?php echo $tsp['TenSP'];?></b></p>
							Lần mua: <?php echo $tsp['SoLanMua'];?> <br />
							Xem: <?php echo $tsp['SoLanXem'];?>	
						</div>
						
					</td>
					<td><?php echo $tsp['TonKho'] ?></td>
					
					<td><?php echo number_format($tsp['Gia']);?>đ</td>
					<td><?php echo date("d-m-Y", strtotime($tsp['NgayDang']));?></td>
					<td><?php echo $tsp['ThuTu'];?></td>
					<td>
						<?php echo($tsp['AnHien'] == 1)?'Hiện':'Ẩn';?>
					</td>
					<td>
						<a href="index.php?k=sanphamedit&idDM=<?php echo $idDM; ?>&idLoai=<?php echo $idLoai;?>&idSP=<?php echo $tsp['id']; ?>"><i class="fa fa-edit"></i></a>
						<a href="xuly.php?idSP=<?php echo $tsp['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này chứ')">xoá</a>
					</td>
				  </tr>
				<?php } ?>

			</tbody>
	  </table>
	</div>

</div>
		<!-- //tables -->
</div>
<!-- //inner_content_w3_agile_info-->