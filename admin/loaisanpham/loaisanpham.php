<!-- breadcrumbs -->
		<div class="w3l_agileits_breadcrumbs">
			<div class="w3l_agileits_breadcrumbs_inner">
				<ul>
					<li><a href="index.php">Home</a><span>«</span></li>
					<li>Loại sản phẩm</li>
				</ul>
			</div>
		</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
					<!-- tables -->
		
		<div class="agile-tables">
			<div class="w3l-table-info agile_info_shadow">
				<div style="display: inline-block; width: 100%">
					<div class="col-sm-4">
						<h3 class="w3_inner_tittle two" style="float: left;">Loại sản phẩm</h3>	
					</div>
					<div class="col-sm-4">
						<form method="get" name="form1" >
							<select class="form-control1" name="idDM" id="idDM" onchange="form1.submit()">
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
							<input type="hidden" name="k" id="k" value="loaisanpham" />
						</form>
					</div>
					<div class="col-sm-4">
						<a class="btn btn-success" href="index.php?k=loaisanphamadd" style="float: right;">Thêm</a>	
					</div>
				</div>
			 
				<table id="table">
					<thead>
					  <tr>
						<th>Mã loại</th>
						<th>Tên loại</th>
						<th>Danh mục</th>
						<th>Thứ tự hiển thị</th>
						<th>Trạng thái</th>
						<th>Tuỳ chọn</th>
					  </tr>
					</thead>
					<tbody>
						<?php 
							$sql=mysqli_query($conn,"SELECT l.id,TenLoai,TenDM,l.ThuTu as ThuTu, l.AnHien as AnHien
														FROM `loaisanpham` as l 
														INNER JOIN `danhmucsanpham` as d ON l.idDM = d.id
														WHERE l.idDM = {$idDM} ORDER BY l.ThuTu DESC");
							while($tl=mysqli_fetch_assoc($sql))
							{
						?>
							
						  <tr>
						  	<td><?php echo $tl['id'];?></td>
						  	<td><?php echo $tl['TenLoai'];?></td>
							<td><?php echo $tl['TenDM'];?></td>
							<td><?php echo $tl['ThuTu'];?></td>
							<td>
								<?php echo($tl['AnHien'] == 1)?'Hiện':'Ẩn';?>
							</td>
							<td>
								<a href="index.php?k=loaisanphamedit&idLoai=<?php echo $tl['id'];?>&idDM=<?php echo $idDM; ?>"><i class="fa fa-edit"></i></a>
								<a href="xuly.php?idLoai=<?php echo $tl['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa Loại sản phẩm này chứ')">xoá</a>
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