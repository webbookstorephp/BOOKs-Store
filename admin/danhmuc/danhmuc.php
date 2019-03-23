<!-- breadcrumbs -->
		<div class="w3l_agileits_breadcrumbs">
			<div class="w3l_agileits_breadcrumbs_inner">
				<ul>
					<li><a href="index.php">Home</a><span>«</span></li>
					
					<li>Danh mục sản phẩm</li>
				</ul>
			</div>
		</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
					<!-- tables -->
		
		<div class="agile-tables">
			<div class="w3l-table-info agile_info_shadow">
				<div style="display: inline-block; width: 100%">
					<h3 class="w3_inner_tittle two" style="float: left;">Danh mục sản phẩm</h3>
					 <a class="btn btn-success" href="index.php?k=danhmucadd" style="float: right;">Thêm</a>
				</div>
			 
				<table id="table">
					<thead>
					  <tr>
						<th>Mã danh mục</th>
						<th>Tên danh mục</th>
						<th>Thứ tự hiển thị</th>
						<th>Ẩn/Hiện</th>
						<th>Tuỳ chọn</th>
					  </tr>
					</thead>
					<tbody>
						<?php 
							$sql=mysqli_query($conn,"SELECT * FROM `danhmucsanpham` order by id DESC");
							while($tdm=mysqli_fetch_assoc($sql))
							{
						?>
							
						  <tr>
							<td><?php echo $tdm['id'];?></td>
							<td><?php echo $tdm['TenDM'];?></td>
							<td><?php echo $tdm['ThuTu'];?></td>
							<td>
								<?php echo($tdm['AnHien'] == 1)?'Hiện':'Ẩn';?>
							</td>
							<td>
								<a href="index.php?k=danhmucedit&idDM=<?php echo $tdm['id']; ?>"><i class="fa fa-edit"></i></a>
								<a href="xuly.php?idDM=<?php echo $tdm['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa danh mục này chứ')">xoá</a>
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