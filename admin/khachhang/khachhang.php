<!-- breadcrumbs -->
		<div class="w3l_agileits_breadcrumbs">
			<div class="w3l_agileits_breadcrumbs_inner">
				<ul>
					<li><a href="main-page.html">Home</a><span>«</span></li>
					
					<li>Khách Hàng</li>
				</ul>
			</div>
		</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
					<!-- tables -->
		
		<div class="agile-tables">
			<div class="w3l-table-info agile_info_shadow">
				<div style="display: inline-block; width: 100%">
					<h3 class="w3_inner_tittle two" style="float: left;">Khách hàng</h3>
					<a class="btn btn-success" href="index.php?k=khachhangadd" style="float: right;">Thêm</a>
				</div>
			 
				<table id="table">
					<thead>
					  <tr>
						<th>Mã khách hàng</th>
						<th>Họ tên</th>
						<th>Tài khoản</th>
						<th>Email</th>
						<th>Địa chỉ</th>
						<th>Điện thoại</th>
						<th>Ngày đăng ký</th>
						<th>Trạng thái</th>
						<th>Tuỳ chọn</th>
					  </tr>
					</thead>
					<tbody>
						<?php 
							$sql=mysqli_query($conn,"SELECT * FROM `khachhang` ORDER BY id DESC");
							while($tkh=mysqli_fetch_assoc($sql))
							{
						?>
							
						  <tr>
							<td><?php echo $tkh['id'];?></td>
							<td><?php echo $tkh['HoTen'];?></td>
							<td><?php echo $tkh['UserName'];?></td>
							<td><?php echo $tkh['Email'];?></td>
							<td><?php echo $tkh['DiaChi'];?></td>
							<td><?php echo $tkh['DienThoai'];?></td>
							<td><?php echo date("d-m-Y", strtotime($tkh['NgayDangKy'])); ?></td>
							<td>
								<?php echo ($tkh['TrangThai']==true) ? 'Kích hoạt' : 'Chưa kích hoạt';?>
							</td>
							<td>
								<a href="index.php?k=khachhangedit&idKH=<?php echo $tkh['id']; ?>"><i class="fa fa-edit"></i></a>
								<a href="xuly.php?idKH=<?php echo $tkh['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa khách hàng này chứ')">xoá</a>
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