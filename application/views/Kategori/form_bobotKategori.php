<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>
			Kelola
		</title>

<!-- 		<meta name="description" content=<?php echo $description;?>
		" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="
			<?php echo base_url();?>
		assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url();?>assets/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							SPK Pemilihan Hotel Bagi Wisatawan di Kota Batu
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
								
							</ul>
						</li> 

							</ul>
						</li>
 

					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>


				<ul class="nav nav-list">
					<li class="">
						<a href="<?php echo site_url('Alternatif/index') ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Hotel </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="<?php echo site_url('Kategori/index') ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Kategori </span>
						</a>

						<b class="arrow"></b>
					</li>



					<li class="" >
						<a href="<?php echo site_url('auth/page_profil') ?>">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Admin </span>
						</a>

						<b class="arrow"></b>
					</li>

			
					<li class="" >
						<a href="logout">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Logout </span>
						</a>

						<b class="arrow"></b>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>		


			</div>

			<div class="main-content">
				<div class="main-content-inner">
				
					<div class="page-content">
						
						<div class="row">
							<div class="col-xs-12" align="center">
								<!-- PAGE CONTENT BEGINS -->
									
									<h1>Form Pembobotan Kategori</h1>

									<br>

									<!-- combo box begin -->
									<!-- <select name="kategori" class="form-control" style="width:200px">
										<option>Pilih bobot yang sesuai</option>
									 	<?php foreach ($hasilKategori as $r) { ?>
												
												<option value="<?php echo $r['id_kategori'] ?>">
													&nbsp<?php echo $r['nama_kategori'] ?> &nbsp
												</option>										
												
											
												<?php } ?>
									 </select> -->
									 <!-- combo box end -->


									 <table border="1">
								        <tr>
								            <td align="center">Kategori</td>
								            	<?php $a=1; ?>
								            	<?php foreach ($hasilKategori as $l) { ?>
								            	
											<td align="center">												
												&nbsp<?php echo $a++. $l['nama_kategori']."X" ?> &nbsp

											</td>
												<?php } ?>
							            
								        </tr>								            	

									   <?php 
									        $no=1;

											foreach ($hasilKategori as $r) { ?>
										<tr align="center">
												
												<td>
													&nbsp<?php echo $no++. $r['nama_kategori'] ?> &nbsp
												</td>

												<!-- tabel -->
													<?php foreach ($hasilKategori as $l) { ?>
												<td align="center">	
													<?php echo $no.$a ?>
												</td>
											<?php } ?>
												<!-- content tabel end -->
										</tr>
											<?php } ?>
																

								    </table>




									 <!-- 3begin -->
<br><br><br>
									 <?php

										echo "<table border=1 width=80px height=50px>";
										for($i=1; $i <=4; $i++){
										      echo "<tr>";
										      for($j=1; $j<=4; $j++){
										            echo "<td>";
										            // echo "$i$j";
										            if($i==$j)
										            {
										            	echo "1";
										            }
										            elseif($i<$j)
										            {
										            	echo "
										            		$i$j
										            	";
										            }
										            else
										            {
										            	echo "2";
										            }
										            echo "</td>";
										      }
										}
										echo "</table>";

										?>


									 <!-- 3end -->

<br><br>


									<!-- 1 begin -->
									<table border="2">
										<?php 
										for($a=0;$a<=4;$a++)
										{
											
											for($b=0;$b<=4;$b++)
											{
												
												if($a==$b)
												{
													echo "1";													
												}
												elseif($a<$b)
												{
													echo '<select style="width:45px">
															  <option value="1">1. Kedua elemen sama pentingnya (equal) </option>
															  <option value="3">3. Elemen yang satu sedikit lebih penting dari pada elemen yang lainnya (moderate) </option>
															  <option value="5">5. Elsemen yang satu lebih penting daripada elemen yang lainnya (strong) </option>
															  <option value="7">7. Satu elemen jelas lebih mutlak penting daripada elemen lainnya(very strong) </option>
															  <option value="9">9. Satu elemen mutlak penting daripada elemen lainnya (extreme) </option>
															</select>';
												}
												else{
													// echo "[$a][$b]&nbsp";
													echo "2";
												}
											}
												echo "<br>";
										}
									 ?>

									</table>
									
									<!-- 1 end -->
						


<br><br>https://www.youtube.com/watch?v=bxA6M9LYrPk


									<br><br>

									<!-- content tabel begin-->
									<table border="1">
								        <tr>
								            <td align="center">Kategori</td>
								            	
								            	<?php foreach ($hasilKategori as $l) { ?>
											<td align="center">												
												&nbsp<?php echo $l['nama_kategori'] ?> &nbsp

											</td>
												<?php } ?>
							            
								        </tr>								            	
								         


							            </tr>

									        	<?php 
												foreach ($hasilKategori as $r) { ?>
											<tr align="center">
												
													<td>
														&nbsp<?php echo $r['nama_kategori'] ?> &nbsp
													</td>

												<!-- tabel -->
														<?php foreach ($hasilKategori as $l) { ?>
												<td align="center">	
													<?php 
														if($l==$r)
														{
															echo "1";
														}
														elseif ($l>$r) 
														{
															echo '<select style="width:45px">
															  <option value="1">1. Kedua elemen sama pentingnya (equal) </option>
															  <option value="3">3. Elemen yang satu sedikit lebih penting dari pada elemen yang lainnya (moderate) </option>
															  <option value="5">5. Elemen yang satu lebih penting daripada elemen yang lainnya (strong) </option>
															  <option value="7">7. Satu elemen jelas lebih mutlak penting daripada elemen lainnya(very strong) </option>
															  <option value="9">9. Satu elemen mutlak penting daripada elemen lainnya (extreme) </option>
															</select>';
														}
														else{
															$b=$l>$r;
															if($b == 1)
															{
																echo "1";
															}
															else
															{
																echo "2";
															}
														}
													?>
												</td>
													<?php } ?>
												<!-- content tabel end -->
											</tr>
												<?php } ?>
									
												<td>&nbsp Jumlah &nbsp</td>									

								    </table>

								<!-- PAGE CONTENT ENDS -->

						</div><!-- /.row -->
								<a href="<?php echo site_url('auth/home/') ?>">
									<br><b>Kembali</b>
								</a>

								
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
