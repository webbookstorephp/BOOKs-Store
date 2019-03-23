<?php include("header.php"); ?>

<div class="about">
	<h2 align="center">Thông tin thành viên</h2><br/>
	<div class="container">	
		
		<div class="w3ls_about_grids">
			<div class="col-md-12">
				<table class="table table-hover">
					<thead>
						<th>Mã khách hàng</th>
						<th>Họ Tên</th>
						<th>Email</th>
						<th>Tài khoản</th>
						<th>Địa chỉ</th>
						<th>Điện thoại</th>
					</thead>
					<tbody>
						<?php
							$query = mysqli_query($conn, "SELECT * FROM `khachhang` WHERE `id`={$_SESSION['IdUser']}");
							$result = mysqli_fetch_assoc($query);
						?>
						<td><?php echo $result['id']; ?></td>
						<td><?php echo $result['HoTen']; ?></td>
						<td><?php echo $result['Email']; ?></td>
						<td><?php echo $result['UserName']; ?></td>
						<td><?php echo $result['DiaChi']; ?></td>
						<td><?php echo $result['DienThoai']; ?></td>
					</tbody>
					<a href="profileedit.php" class="btn btn-info">Cập nhật thông tin</a>
				</table>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>