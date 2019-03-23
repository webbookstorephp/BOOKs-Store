<?php include('header.php');
?>
<!-- breadcrumbs -->
<div class="breadcrumb_dress">
	<div class="container">
		<ul>
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
			<li>Thông báo<i></i></li>
		</ul>
	</div>
</div>
<!-- //breadcrumbs -->  

<div class="about">
	<h2 align="center">Tình trạng đơn hàng</h2><br/>
	<div class="container">	
		
		<div class="w3ls_about_grids">
			<div class="col-md-12">
            <?php if(isset($_SESSION['success'])): ?>
				<div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
            <?php endif; ?>
			</div>
            <a href="index.php" class="btn btn-primary">Về trang chủ</a>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>