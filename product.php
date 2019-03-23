<?php include("header.php"); ?>
	<!-- //navigation -->
	
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-4 w3ls_mobiles_grid_left">
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Danh mục</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="panel-group" role="tablist" aria-multiselectable="true">
							<?php 
								$sql=mysqli_query($conn,"SELECT * FROM `danhmucsanpham`");
								$i=1;
								while ($tdm= mysqli_fetch_assoc($sql)) 
								{
									$i++;
							?>
								
							<div class="panel panel-default">
								<div class="panel-heading" role="tab">
									<h4 class="panel-title asd">
										<a class="pa_italic collapsed" role="button" data-toggle="collapse" href="#collapse<?php echo $i;?>" aria-expanded="false">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i><?php echo $tdm['TenDM']; ?>
										</a>
									</h4>
								</div>
								<div id="collapse<?php echo $i;?>" class="panel-collapse collapse" role="tabpanel">
									<div class="panel-body panel_text">
										<ul>
											<?php
												$query = mysqli_query($conn, "SELECT * FROM `loaisanpham` WHERE `idDM`={$tdm['id']} ");
												while($row = mysqli_fetch_assoc($query)){
											?>
											<li><a href="product.php?idDM=<?php echo $tdm['id']; ?>&idLoai=<?php echo $row['id']; ?>"><?php echo $row['TenLoai']; ?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
							<?php } ?>
							</div>
						</div>
					</div>
				
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					<!-- breadcrumbs -->
					<div class="breadcrumb_dress">
						<ul>
							<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
						<?php if(isset($_GET['idDM'])){
						$tendm = mysqli_query($conn, "SELECT `TenDM` FROM `danhmucsanpham` WHERE `id`={$_GET['idDM']} ");
							$rTen = mysqli_fetch_assoc($tendm);
							?>
						<li><?php echo $rTen['TenDM']; ?> <i>/</i></li>
						<?php } ?>
							
						<?php if(isset($_GET['idLoai'])){
						$tenloai = mysqli_query($conn, "SELECT `TenLoai` FROM `loaisanpham` WHERE id={$_GET['idLoai']}");
							$result = mysqli_fetch_assoc($tenloai); ?>
						<li><?php echo $result['TenLoai']; ?></li>
						<?php } ?>
						</ul>
					</div>
					<!-- //breadcrumbs --> 
					
					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Showing Results: 0-1</h3>
						</div>
						<div class="w3ls_mobiles_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="w3ls_mobiles_grid_right_grid3">
					<?php if(isset($_GET['idLoai'])){
						$selectSP = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `idLoai`={$_GET['idLoai']} ORDER BY id DESC LIMIT 0,10");
						while($rs = mysqli_fetch_assoc($selectSP)) {
					?>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="<?php echo $rs['UrlHinh']; ?>" alt=" " class="img-responsive" /> 
								</div>
								<h5><a href="chitietsanpham.php?idSP=<?php echo $rs['id']; ?>"><?php echo $rs['TenSP']; ?></a></h5>
								<div class="simpleCart_shelfItem">
									<p><!--<span>$950</span>--> <i class="item_price"><?php echo number_format($rs['Gia']); ?>đ</i></p>
									<a href="addcart.php?id=<?php echo $rs['id']; ?>" class="btn btn-default add-cart-button">Thêm vào giỏ</a> 
								</div> 
							</div>
						</div>
					<?php }} ?>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 

	<!-- newsletter -->
	<?php include("footer.php"); ?>