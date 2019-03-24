<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h1>Đăng ký thông tin</h1>
				<p>để nhận thông báo sách mới của BOOKS Store</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Liên hệ</h3>
					<p style="color: #3c43a4; font-weight: bold;">BOOKS STORE Sách gì cũng có!!!</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Gò Vấp, TP.HCM</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:hoangtam.0910@gmail.com">hoangtam.0910@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0948468569</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Góc thắc mắc</h3>
					<ul class="info"> 
						<li><a href="thongtin.php">Thông tin</a></li>
						<li><a href="lienhe.php">Liên hệ</a></li>
						<li><a href="lienhe.php">Câu hỏi</a></li>
						<li><a href="https://stepup.edu.vn/blog/mua-sach-tieng-anh-online-gia-re-mua-sach-tieng-anh-o-ha-noi-va-tphcm/">Chia sẻ độc giả</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Danh mục</h3>
					<ul class="info"> 
						<li><a href="product.php">Văn Học Nghệ Thuật</a></li>
						<li><a href="product.php">Tiểu Thuyết</a></li>
						<li><a href="product.php">Sách thiếu nhi</a></li>
						<li><a href="product.php">Chính Trị-Pháp Luật</a></li>
						<li><a href="product.php">Khoa học-Công Nghệ</a></li>
						<li><a href="product.php">Văn hóa-Xã hội-Lịch Sử</a></li>
					</ul>
				</div>

				<div class="col-md-3 w3_footer_grid">
					
					<h4>Theo dõi</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="facebook.com" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="google.com" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2019 Web nhà sách online. Được thiết kế bởi <a href="https://www.facebook.com/close.all.587">Lê Hoàng Tâm</a></p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<script src="js/shopping-cart.js"></script>
	
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->   
</body>
</html>