<?php include("header.php"); ?>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<h3>B O O K S T O R E , <span>Special Offers</span></h3>
		</div>
	</div>
	<!-- //banner --> 

	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>Sách mới</h3>
			<div class="agileinfo_new_products_grids">
				<?php
					$sp=mysqli_query($conn,"SELECT * FROM `sanpham` order by id DESC LIMIT 0,4");
					while ($tsp=mysqli_fetch_assoc($sp)) 
					{
				?>
					<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="<?php echo $tsp['UrlHinh'];?>" alt=" " class="img-responsive" /> 
						
						</div>
						<h5><a href="chitietsanpham.php?idSP=<?php echo $tsp['id'];?>"><?php echo $tsp['TenSP'];?></a></h5>
						<div class="simpleCart_shelfItem">
							<p><i class="item_price"><?php echo number_format($tsp['Gia']);?>đ</i></p>
							<a href="addcart.php?id=<?php echo $tsp['id']; ?>" class="btn btn-default add-cart-button">Thêm vào giỏ</a>
						</div>
					</div>
					</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //new-products -->
	<!-- banner-bottom -->
	<?php 
		$dmsp=mysqli_query($conn,"SELECT * FROM `danhmucsanpham` where AnHien=1 order by `id` ");
		while ($ldm=mysqli_fetch_assoc($dmsp)) 
		{
	?>		
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div> 
				<!-- pop-up-box -->     
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<!--//pop-up-box -->
				<div id="small-dialog" class="mfp-hide">
					<iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>
				</div>
				<script>
					$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});
																					
					});
				</script>
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul class="nav nav-tabs" role="tablist">
					<?php 
						$lsp=mysqli_query($conn,"SELECT * FROM `loaisanpham` where idDM={$ldm['id']} and AnHien=1 order by id");
						$num=mysqli_num_rows($lsp);
						$i=1;
						while ($sp=mysqli_fetch_assoc($lsp)) 
						{
					?>		
						<li role="presentation" <?php if($i==$num) echo 'class="active"';$i++; ?>>
							<a href="#<?php echo $sp['Alias'];?>" id="#<?php echo $sp['Alias'];?>-tab" role="tab" data-toggle="tab" ><?php echo $sp['TenLoai'];	?></a>
						</li>
					<?php } ?>
					</ul>
					<div class="tab-content">
						<?php 
						$lsp2=mysqli_query($conn, "SELECT * FROM `loaisanpham` where idDM={$ldm['id']} and AnHien=1 order by id");
						$num2=mysqli_num_rows($lsp2);
						$j=1;
						while ($sp2=mysqli_fetch_assoc($lsp2)) { ?>
						<div role="tabpanel" <?php if($j==$num2) echo 'class="tab-pane fade active in"'; else {echo 'class="tab-pane fade"'; $j++; } ?> id="<?php echo $sp2['Alias'] ?>" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								<?php 
									$ssp = mysqli_query($conn, "SELECT * FROM `sanpham` as p
											INNER JOIN `loaisanpham` as l on l.id = p.idLoai
										    INNER JOIN `danhmucsanpham` as d on d.id = l.idDM
										WHERE l.id = {$sp2['id']} AND d.id = {$ldm['id']} AND p.AnHien=1 Order By p.id LIMIT 0,3 ");
									while($row = mysqli_fetch_assoc($ssp))
									{
								?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="<?=$row['UrlHinh']?>" alt=" " class="img-responsive">
									</div> 
									<h5><a href="chitietsanpham.php?idSP=<?php echo $row['id']; ?>"><?php echo $row['TenSP']; ?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>$380</span> <i class="item_price"><?php echo number_format($row['Gia']); ?></i></p>
										<a href="addcart.php?id=<?php echo $row['id']; ?>" class="btn btn-default add-cart-button">Thêm vào giỏ</a> 
									</div>
								</div>
								<?php } ?>
								<div class="clearfix"> </div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner-bottom --> 
<?php } ?>
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Nhà Xuất Bản</h3>
			<div class="sliderfig">
				<div class="nbs-flexisel-container">
					<div class="nbs-flexisel-inner">
						<ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -285px; display: block;">

							<li class="nbs-flexisel-item" style="width: 285px;">
								<img src="images/tb5.jpg" alt=" " class="img-responsive">
							</li><li class="nbs-flexisel-item" style="width: 285px;">
								<a href="https://www.nxbkimdong.com.vn/"><img src="images/tb11.png" alt=" " class="img-responsive"></a>
							</li><li class="nbs-flexisel-item" style="width: 285px;">
								<a href="https://www.nxbtre.com.vn/"><img src="images/tb12.png" alt=" " class="img-responsive"></a>
							</li><li class="nbs-flexisel-item" style="width: 285px;">
								<a href="http://nxbthongtintruyenthong.vn/"><img src="images/tb13.jpg" alt=" " class="img-responsive"></a>
							</li><li class="nbs-flexisel-item" style="width: 285px;">
								<a href="http://www.nxblaodong.com.vn/"><img src="images/tb144.jpg" alt=" " class="img-responsive"></a>
							</li>

							<li class="nbs-flexisel-item" style="width: 285px;">
								<img src="images/tb15.jpg" alt=" " class="img-responsive">
							</li><li class="nbs-flexisel-item" style="width: 285px;">
								<img src="images/tb16.jpg" alt=" " class="img-responsive">
							
							</li>
						</ul>
						<div class="nbs-flexisel-nav-left" style="top: 23px;"></div>
						<div class="nbs-flexisel-nav-right" style="top: 23px;"></div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
<!-- //top-brands --> 
<?php include("footer.php"); ?>