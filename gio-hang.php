<?php include('header.php');
	if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0)
	{
		echo '<script>alert("Không có sản phẩm trong giỏ hàng "); location.href = "index.php"; </script>';
	} else if(!isset($_SESSION['IdUser']) || $_SESSION['IdUser'] == '') {
		echo '<script>alert("Đăng nhập thành viên mới có thể vào xem giỏ hàng"); location.href = "index.php"; </script>';
	}
?>
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Giỏ hàng<i></i></li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->  
    
	<div class="single">
	<h2 align="center" style="font-weight: bold">Giỏ Hàng Của Bạn</h2><br/><br/>
		<div class="container">
		<?php if(isset($_SESSION['rm_success'])) : ?>
			<div class="alert alert-success"><?php echo $_SESSION['rm_success']; unset($_SESSION['rm_success'])?></div>
		<?php endif; ?>
			<div class="col-sm-8 pull-left">
				<table class="table">
					<thead>
						<tr>
							<th>STT</th>
							<th width="25%">Tên SP</th>
							<th>Ảnh</th>
							<th>Giá</th>
							<th>Giảm Giá</th>
							<th>SL</th>
							<th>Thao Tác</th>
						</tr>
					</thead>
					<tbody >
					<?php  $stt = 1; $num=0; $total_sp=0; foreach($_SESSION['cart'] as $key => $value): ?>
						<tr class="tbody">
							<td><?php echo $stt;?></td>
							<td><?php echo $value['name']; ?></td>
							<td><img src="<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>" width="50"></td>
							<td><?php echo number_format($value['price']); ?>đ</td>
							<td><?php echo number_format($value['discount']); ?>đ</td>
							<td><input min="1" type="number" id="qty" class="qty" name="qty" value="<?php echo $value['qty']; ?>"></td>
							<td>
								<a ref="#" class="btn btn-info updateCart" data-key=<?php echo $key; ?>><i class="fa fa-edit"></i></a>
								<a href="remove.php?id=<?php echo $key; ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
							</td>
						</tr>
					<?php
						$stt ++;
						$total_sp += $value['qty'];
						$num += $value['price'] * $value['qty'];
						$_SESSION['tongtien'] = $num;
						endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-4 pull-right">
				<ul class="list-group">
					<li class="list-group-item"><h3>Thông tin đơn hàng</h3></li>
					<li class="list-group-item">
						<span class="badge badge-primary"><?php echo $total_sp; ?></span>
						Tổng SLSP: 
					</li>
					<li class="list-group-item">
						<span class="badge badge-primary"><?php echo number_format($_SESSION['tongtien']); ?> đ</span>
						Tổng tiền: 
					</li>
					<li class="list-group-item">
						<span class="badge badge-primary"><?php echo number_format($_SESSION['tongtien']); ?> đ</span>
						Tiền thanh toán: 
					</li>
					<li class="list-group-item">
						<a href="index.php" class="btn btn-primary">Tiếp tục mua hàng</a>
						<a href="thanh-toan.php" class="btn btn-warning">Thanh toán</a>
					</li>
				</ul>
			</div>
		</div>
	</div> 

<?php include("footer.php"); ?>