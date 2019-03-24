<div class="navigation">
	<div class="container">
		<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header nav_2">
				<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div> 
			<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				<ul class="nav navbar-nav">
					<li><a href="index.php" class="act">Home</a></li>	
					<!-- Mega Menu -->
					<li class="dropdown">
						<a href="product.php" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <b class="caret"></b></a>
						<ul class="dropdown-menu multi-column columns-3">
			
						<?php 
							$sql=mysqli_query($conn,"SELECT * FROM `danhmucsanpham`");
							while ($tdm= mysqli_fetch_assoc($sql)) 
							{
						?>
						<div class="col-sm-3">
							<ul class="multi-column-dropdown">
								<h6><?php echo $tdm['TenDM'];?></h6>
							<?php 
								$kqdm = mysqli_query($conn, "SELECT * FROM `loaisanpham` where idDM={$tdm['id']} and AnHien=1 order by ThuTu");
								while($ttl= mysqli_fetch_assoc($kqdm))
								{
							?>	
								<li><a href="product.php?idDM=<?php echo $tdm['id'];?>&idLoai=<?php echo $ttl['id'];?>"><?php echo $ttl['TenLoai'];?></a></li>	
							<?php } ?>
							</ul>
						</div>
					<?php } ?>	
						<div class="clearfix"></div>	
							
							
						</ul>
					</li>
					<li><a href="thongtin.php">Thông tin</a></li> 
					<li><a href="lienhe.php">Liên hệ</a></li>
				</ul>
			</div>
		</nav>
	</div>
</div>
