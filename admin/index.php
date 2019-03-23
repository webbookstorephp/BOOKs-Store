<?php session_start(); ob_start(); include ('../ketnoi.php'); 
if(!isset($_SESSION['id'])) {
    header("location: dangnhap.php");
}?>

<?php include('head.php'); ?>

	<!-- /w3_agileits_top_nav-->
	<!-- /nav-->
		<?php include('menu.php'); ?>
	<!-- //w3_agileits_top_nav-->
	<!-- /inner_content-->
	
		<div class="inner_content">
			<?php 
				if(isset($_GET['k'])){
					switch ($_GET['k']) {
						case 'admin': include('admin/admin.php'); break;
						case 'adminadd': include('admin/themadmin.php'); break;
						case 'adminedit': include('admin/suaadmin.php'); break;

						case 'danhmuc': include('danhmuc/danhmuc.php'); break;
						case 'danhmucadd': include('danhmuc/themdanhmuc.php'); break;
						case 'danhmucedit': include('danhmuc/suadanhmuc.php'); break;

						case 'loaisanpham': include('loaisanpham/loaisanpham.php'); break;
						case 'loaisanphamadd': include('loaisanpham/themloaisanpham.php'); break;
						case 'loaisanphamedit': include('loaisanpham/sualoaisanpham.php'); break;

						case 'sanpham': include('sanpham/sanpham.php'); break;
						case 'sanphamadd': include('sanpham/themsanpham.php'); break;
						case 'sanphamedit': include('sanpham/suasanpham.php'); break;

						case 'admin': include('admin/admin.php'); break;
						case 'adminadd': include('admin/themadmin.php'); break;
						case 'adminedit': include('admin/suaadmin.php'); break;

						case 'nhacungcap': include('nhacungcap/nhacungcap.php'); break;
						case 'nhacungcapadd': include('nhacungcap/themnhacungcap.php'); break;
						case 'nhacungcapedit': include('nhacungcap/suanhacungcap.php'); break;

						case 'khachhang': include('khachhang/khachhang.php'); break;
						case 'khachhangadd': include('khachhang/themkhachhang.php'); break;
						case 'khachhangedit': include('khachhang/suakhachhang.php'); break;
						default: include('main.php'); break;
					}
				}
				else
					include('main.php');
			?>
		</div>
	
	<!-- //inner_content-->

<?php include('footer.php'); ?>