<?php session_start();
	include('../ketnoi.php');
//them danh muc
	if(isset($_POST['themdanhmuc']))
	{
		$tendm=$_POST['TenDM'];
		$thutu=$_POST['ThuTu'];
		$anhien=$_POST['AnHien'];
		echo $tendm . ' ' .$thutu . ' ' .$anhien;

		$query= mysqli_query($conn, "insert into `danhmucsanpham`
									 values('', '".$tendm."', '".$thutu."','".$anhien."') ");

		if($query)
			header('location:index.php?k=danhmuc');
		else
			echo $query;
	}
// xoa danh muc
	if(isset($_GET['idDM']))
	{
		$iddm=$_GET['idDM'];
		$query =mysqli_query($conn,"delete from `danhmucsanpham` where `id` = $iddm ");
		if($query)
		{
			header('location:index.php?k=danhmuc');
		}
		else
			echo "sai lenh truy van";
	}
//sua danh muc
		if(isset($_POST['capnhatdanhmuc']))
		{
			$iddm=$_POST['idan'];
			$tendm=$_POST['TenDM'];
			$thutu=$_POST['ThuTu'];
			$anhien=$_POST['AnHien'];

			$query = mysqli_query($conn, "update `danhmucsanpham` set 
						`TenDM` = '".$tendm."', 
						`ThuTu` = '".$thutu."',
						`AnHien` = '".$anhien."' 
						where `id` = $iddm");
			if($query)
				header('location:index.php?k=danhmuc');
			else
				echo "sai lenh truy van";
		}
		////////////////////////////////////////
//them loại
	if(isset($_POST['themloaisanpham']))
	{
		$idloai=$_POST['idan'];
		$alias=$_POST['Alias'];
		$iddm=$_POST['idDM'];
		$tenloai=$_POST['TenLoai'];
		$thutu=$_POST['ThuTu'];
		$anhien=$_POST['AnHien'];
		echo  $alias.''.$iddm.''. $tenloai . ' ' .$thutu . ' ' .$anhien;

		$query= mysqli_query($conn, "insert into `loaisanpham`
									 values('', '".$alias."','".$iddm."','".$tenloai."', '".$thutu."','".$anhien."') ");

		if($query)
			header('location:index.php?k=loaisanpham');
		else
			echo $query;
	}
//xoá loại
	if(isset($_GET['idLoai']))
	{
		$idloai=$_GET['idLoai'];
		$query =mysqli_query($conn,"delete from `loaisanpham` where `id` = $idloai ");
		if($query)
		{
			header('location:index.php?k=loaisanpham');
		}
		else
			echo "sai lenh truy van";
	}
//sua loại
	if(isset($_POST['capnhatloaisanpham']))
		{
			$idLoai = $_POST['idLoai'];
			$alias=$_POST['Alias'];
			$iddm=$_POST['idDM'];
			$tenloai=$_POST['TenLoai'];
			$thutu=$_POST['ThuTu'];
			$anhien=$_POST['AnHien'];
			$query = mysqli_query($conn, "update `loaisanpham` set 
						`Alias` = '".$alias."',
						`idDM` = '".$iddm."',
						`TenLoai` = '".$tenloai."', 
						`ThuTu` = '".$thutu."',
						`AnHien` = '".$anhien."' 
						where `id` = $idLoai");
			if($query)
				header('location:index.php?k=loaisanpham');
			else
				echo "sai lenh truy van";
		}
		///////////////////////////////////////////
	//them nhà cung cấp
	if(isset($_POST['themnhacungcap']))
	{
		$tenncc=$_POST['TenNcc'];
		$thutu=$_POST['ThuTu'];
		$anhien=$_POST['AnHien'];
		echo $tendm . ' ' .$thutu . ' ' .$anhien;

		$query= mysqli_query($conn, "insert into `nhacungcap`
									 values('', '".$tenncc."', '".$thutu."','".$anhien."') ");

		if($query)
			header('location:index.php?k=nhacungcap');
		else
			echo $query;
	}
// xoa nhà cung cấp
	if(isset($_GET['idNcc']))
	{
		$idncc=$_GET['idNcc'];
		$query =mysqli_query($conn,"delete from `nhacungcap` where `id` = $idncc ");
		if($query)
		{
			header('location:index.php?k=nhacungcap');
		}
		else
			echo "sai lenh truy van";
	}
//sua nhà cung cấp
		if(isset($_POST['capnhatnhacungcap']))
		{
			$idncc=$_POST['idan'];
			$tenncc=$_POST['TenNcc'];
			$thutu=$_POST['ThuTu'];
			$anhien=$_POST['AnHien'];
			$query = mysqli_query($conn, "update `nhacungcap` set 
						`TenNcc` = '".$tenncc."', 
						`ThuTu` = '".$thutu."',
						`AnHien` = '".$anhien."' 
						where `id` = $idncc");
			if($query)
				header('location:index.php?k=nhacungcap');
			else
				echo "sai lenh truy van";
		}
	///////////////////////////////////////////
//them sản phẩm
	if(isset($_POST['themsanpham']))
	{
		$idloai = $_POST['idLoai'];
		$tensp= $_POST['TenSP'];
		$gia= $_POST['Gia'];
		$giagiam = $_POST['GiaKhuyenMai'];
		$mota= $_POST['MoTa'];
		$chitiet= $_POST['Content'];
		$ngaydang= date("Y-m-d h:i:s",time());
		$tonkho= $_POST['TonKho'];
		$anhien= $_POST['AnHien'];
		$thutu= $_POST['ThuTu'];

		if(isset($_FILES['uf']))
    	{
	        $target="../images/";
	        $filename=basename($_FILES['uf']['name']);
	        $target.=$filename;
	        $link="images/".$filename;

	        if(file_exists($target)) echo "Ảnh đã tồn tại !";

	        if(preg_match("/\.(jpg|png|bmp|gif)$/i",basename($_FILES['uf']['name']))) echo "Đây là tập tin ảnh!";
	        else echo "Ảnh phải có định dạng jpg, png, bmp, gif";

	        if(move_uploaded_file($_FILES['uf']['tmp_name'],$target))
	        {
				$query = mysqli_query($conn, "INSERT INTO `sanpham` VALUES(NULL, '{$idloai}','{$tensp}','{$gia}','{$mota}','{$chitiet}','{$link}','{$ngaydang}','{$tonkho}',0,0,'{$anhien}','{$thutu}', '{$giagiam}')");
	            if($query)
	            {
	                header("location:index.php?k=sanpham&idDM=".$_POST['idDM']."&idLoai=".$_POST['idLoai']);
	            }
	            else echo "Truy vấn sai rồi!";
	        }
	        else echo "Upload ảnh thất bại !";
	    }
	}
// xoa sản phẩm
	if(isset($_GET['idSP']))
	{
		$idsp=$_GET['idSP'];
		$query =mysqli_query($conn,"DELETE FROM `sanpham` WHERE `id` = $idsp ");
		if($query)
		{
			header('location:index.php?k=sanpham');
		}
		else
			echo "sai lenh truy van";
	}
//sua sản phẩm
	if(isset($_POST['capnhatsanpham']))
	{
		$idSP = trim($_POST['idSP']);
		$idloai = trim($_POST['idLoai']);
		$tensp = $_POST['TenSP'];
		$gia = trim($_POST['Gia']);
		$giagiam = trim($_POST['GiaKhuyenMai']);
		$mota = $_POST['MoTa'];
		$chitiet = $_POST['Content'];
		$tonkho = trim($_POST['TonKho']);
		$anhien = trim($_POST['AnHien']);
		$thutu = trim($_POST['ThuTu']);
		
		if(isset($_FILES['ufile']) && $_FILES['ufile']['name']!="") 
		{
	        /* Có thay đổi hình */
	        $target="../images/";
	        $filename=basename($_FILES['ufile']['name']);
	        $target.=$filename;	
	        $link="images/".$filename;

	        if(move_uploaded_file($_FILES['ufile']['tmp_name'],$target))
       		{

	            $query = mysqli_query($conn, "UPDATE `sanpham` SET 
		            	`TenSP` = '{$tensp}',
		            	`Gia` = '{$gia}',
		            	`MoTa` = '{$mota}',
		            	`ChiTiet` = '{$chitiet}',
		            	`UrlHinh` = '{$link}',
		            	`TonKho` = '{$tonkho}',
		            	`AnHien` = '{$anhien}',
		            	`ThuTu` = '{$thutu}',
		            	`GiaKhuyenMai`={$giagiam} 
		            	WHERE `sanpham`.`id` = {$idSP}");

	            if($query)
	            {
	                header("location:index.php?k=sanpham&idDM=".$_POST['idDM']."&idLoai=".$_POST['idLoai']);
	            }
	            else echo "Truy vấn sai rồi!";
	        }
	    } else {
			$image = $_POST['image_hidden'];
		        /* Không thay đổi hình */
		        $query = mysqli_query($conn, "UPDATE `sanpham` SET 
	            	`TenSP` = '{$tensp}',
	            	`Gia` = '{$gia}',
	            	`MoTa` = '{$mota}',
	            	`ChiTiet` = '{$chitiet}',
	            	`UrlHinh` = '{$image}',
	            	`TonKho` = '{$tonkho}',
	            	`AnHien` = '{$anhien}',
	            	`ThuTu` = '{$thutu}',
	            	`GiaKhuyenMai`={$giagiam} 
	            	WHERE `sanpham`.`id` = {$idSP}");

	            if($query)
	            {
	                header("location:index.php?k=sanpham&idDM=".$_POST['idDM']."&idLoai=".$_POST['idLoai']);
	            }
	            else echo "Truy vấn sai rồi!";
		}
	}
	
	////////////////////////////////////////////////////
	//them khách hàng
	if(isset($_POST['themkhachhang']))
	{
		$matkhau=$_POST['MatKhau'];
		$username=$_POST['UserName'];
		$email=$_POST['Email'];
		$hoten=$_POST['HoTen'];
		$dienthoai=$_POST['DienThoai'];
		$diachi=$_POST['DiaChi'];
		$ngaydangky=$_POST['NgayDangKy'];
		$trangthai=$_POST['TrangThai'];
		echo $matkhau. ' ' .$username . ' ' .$email. ' ' .$hoten . ' ' .$dienthoai. ' ' .$diachi . ' ' .$ngaydangky. ' ' .$trangthai;

		$query= mysqli_query($conn, "insert into `khachhang`
									 values('', '".$matkhau."', '".$username."','".$email."', '".$hoten."','".$dienthoai."', '".$diachi."','".$ngaydangky."', '".$trangthai."') ");

		if($query)
			header('location:index.php?k=khachhang');
		else
			echo $query;
	}
// xoa khách hàng
	if(isset($_GET['idKH']))
	{
		$idkh=$_GET['idKH'];
		$query =mysqli_query($conn,"delete from `khachhang` where `id` = $idkh ");
		if($query)
		{
			header('location:index.php?k=khachhang');
		}
		else
			echo "sai lenh truy van";
	}
//sua khách hàng
		if(isset($_POST['capnhatkhachhang']))
		{
			$idkh=$_POST['idan'];
			$matkhau=$_POST['MatKhau'];
			$username=$_POST['UserName'];
			$email=$_POST['Email'];
			$hoten=$_POST['HoTen'];
			$dienthoai=$_POST['DienThoai'];
			$diachi=$_POST['DiaChi'];
			$trangthai=$_POST['TrangThai'];
			$query = mysqli_query($conn, "update `khachhang` set 
						`MatKhau` = '".$matkhau."', 
						`HoTen` = '".$hoten."',
						`DienThoai` = '".$dienthoai."', 
						`DiaChi` = '".$diachi."',
						`TrangThai` = '".$trangthai."'
						where `id` = $idkh");
			if($query)
				header('location:index.php?k=khachhang');
			else
				echo "sai lenh truy van";
		}
		////////////////////////////////////////////////////
	//them admin
	if(isset($_POST['themadmin']))
	{
		$username=$_POST['UserName'];
		$password=$_POST['PassWord'];
		$email=$_POST['Email'];
		$hoten=$_POST['HoTen'];
		$dienthoai=$_POST['idQuyen'];
		$trangthai=$_POST['TrangThai'];
		echo $username. ' ' .$password . ' ' .$email. ' ' .$hoten . ' ' .$idQuyen. ' ' .$trangthai;

		$query= mysqli_query($conn, "insert into `admin`
									 values('', '".$username."', '".$password."','".$email."', '".$hoten."','".$idQuyen."', '".$trangthai."') ");

		if($query)
			header('location:index.php?k=admin');
		else
			echo $query;
	}
// xoa admin
	if(isset($_GET['idAdmin']))
	{
		$idad=$_GET['idAdmin'];
		$query =mysqli_query($conn,"delete from `admin` where `id` = $idad ");
		if($query)
		{
			header('location:index.php?k=admin');
		}
		else
			echo "sai lenh truy van";
	}
//sua admin
		if(isset($_POST['capnhatadmin']))
		{
			$idad=$_POST['idan'];
			$username=$_POST['UserName'];
			$password=$_POST['PassWord'];
			$email=$_POST['Email'];
			$hoten=$_POST['HoTen'];
			$idquyen=$_POST['idQuyen'];
			$trangthai=$_POST['TrangThai'];
			$query = mysqli_query($conn, "update `admin` set 
						`PassWord` = '".$password."',
						`HoTen` = '".$hoten."',
						`idQuyen` = '".$idquyen."',  
						`TrangThai` = '".$trangthai."'
						where `id` = $idad");
			if($query)
				header('location:index.php?k=admin');
			else
				echo "sai lenh truy van";
		}
	///////////////////////////////////////////

/* Xử lý đăng xuất */
if(isset($_POST['logout']))
{
    unset($_SESSION['hoten']);
    unset($_SESSION['id']);
    header("location:dangnhap.php");
}
?>