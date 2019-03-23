<!-- breadcrumbs -->
		<div class="w3l_agileits_breadcrumbs">
			<div class="w3l_agileits_breadcrumbs_inner">
				<ul>
					<li><a href="index.php">Home</a><span>«</span></li>
					
					<li>Admin</li>
				</ul>
			</div>
		</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
					<!-- tables -->
		
		<div class="agile-tables">
			<div class="w3l-table-info agile_info_shadow">
				<div style="display: inline-block; width: 100%">
					<h3 class="w3_inner_tittle two" style="float: left;">Admin</h3>
					<a class="btn btn-success" href="index.php?k=adminadd" style="float: right;">Thêm</a>
				</div>
			 
				<table id="table">
					<thead>
					  <tr>
						<th>Mã Admin</th>
						<th>User Name</th>
						<th>PassWord</th>
						<th>Email</th>
						<th>Họ Tên</th>
						<th>Quyền</th>
						<th>Trạng Thái</th>
						<th>Tuỳ chọn</th>
					  </tr>
					</thead>
					<tbody>
						<?php 
							$sql=mysqli_query($conn,"SELECT * FROM `admin` ORDER BY id DESC");
							while($tad=mysqli_fetch_assoc($sql))
							{
						?>
							
						  <tr>
							<td><?php echo $tad['id'];?></td>
							<td><?php echo $tad['UserName'];?></td>
							<td><?php echo $tad['PassWord'];?></td>
							<td><?php echo $tad['Email'];?></td>
							<td><?php echo $tad['HoTen'];?></td>
							<td><?php echo $tad['idQuyen'];?></td>
							<td>
								<?php echo ($tad['TrangThai']==true) ? 'Kích hoạt' : 'Chưa kích hoạt';?>
							</td>
							<td>
								<a href="index.php?k=adminedit&idAdmin=<?php echo $tad['id']; ?>"><i class="fa fa-edit"></i></a>
								<a href="xuly.php?idAdmin=<?php echo $tad['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa admin này chứ')">xoá</a>
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