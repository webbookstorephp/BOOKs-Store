	<!-- breadcrumbs -->
		<div class="w3l_agileits_breadcrumbs">
			<div class="w3l_agileits_breadcrumbs_inner">
				<ul>
					<li><a href="index.php">Home</a><span>«</span></li>
					
					<li>Nhà cung cấp</li>
				</ul>
			</div>
		</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
					<!-- tables -->
		
		<div class="agile-tables">
			<div class="w3l-table-info agile_info_shadow">
				<div style="display: inline-block; width: 100%">
					<h3 class="w3_inner_tittle two" style="float: left;">Nhà cung cấp</h3>
					 <a class="btn btn-success" href="index.php?k=nhacungcapadd" style="float: right;">Thêm</a>
				</div>
			 
				<table id="table">
					<thead>
					  <tr>
						<th>Mã nhà cung cấp</th>
						<th>Tên nhà cung cấp</th>
						<th>Thứ tự hiển thị</th>
						<th>Trạng thái</th>
						<th>Tuỳ chọn</th>
					  </tr>
					</thead>
					<tbody>
						<?php 
							$sql=mysqli_query($conn,"SELECT * FROM `nhacungcap` order by id ");
							while($tncc=mysqli_fetch_assoc($sql))
							{
						?>
							
						  <tr>
							<td><?php echo $tncc['id'];?></td>
							<td><?php echo $tncc['TenNcc'];?></td>
							<td><?php echo $tncc['ThuTu'];?></td>
							<td>
								<?php echo($tncc['AnHien'] == 1)?'Hiện':'Ẩn';?>
							</td>
							<td>
								<a href="index.php?k=nhacungcapedit&idNcc=<?php echo $tncc['id']; ?>"><i class="fa fa-edit"></i></a>
								<a href="xuly.php?idNcc=<?php echo $tncc['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa nhà cung cấp này chứ')">xoá</a>
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