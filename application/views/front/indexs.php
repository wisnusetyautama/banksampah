<!DOCTYPE HTML>
<!--
	Justice by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <?php
      $page = "Home";
      $title = "Bank Sampah Makmur";
      include_once("headers_import.php");
    ?>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

<style type="text/css">
.xx {
  border-radius: 4px;
  background-color: #51AF2A;
  opacity: 0.8;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.xx:hover {
  font-size: 40px; 
  width: 150px;
  border-radius: 50px;
  transition: 0.5s;
}

.xx span {
  cursor: pointer;
  display: inline-block;
  transition: 0.5s;
}

.xx:after {
  position: absolute;
  transition: 0.5s;
}

.xx:hover span {
  padding: 25px;
}

#profil{
  background-color:rgb(81,175,42);
  font-size:medium;
  color:white;
  margin-top:30px;
}

#profil:hover{
  background-color:white;
  color:rgb(81,175,42);
  border-radius: 20px;
}
</style>

	<body data-spy="scroll" data-target="#mainNav" id="page-top">

<div class="gtco-loader"></div>
	<nav class="gtco-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-xs-9">
					<div id="gtco-logo"><a href="<?php echo site_url('Home/index');?>" ><i class="fa fa-recycle" id="hea"></i> Bank Sampah<em> Salatiga</em></a></div>
				</div>
				<div class="col-xs-13 text-right menu-1 main-nav">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
                        <li ><a href="#mengapa" data-nav-section="about">Tentang </a></li>
                        <li ><a href="#carakerja" data-nav-section="carakerja">Cara Kerja</a></li>
                        <li ><a href="#jenis" data-nav-section="jenis">Jenis Sampah</a></li>
                        <li ><a href="#lokasinya" data-nav-section="lokasinya">Contact </a></li>
                        <li ><a href="<?php echo site_url('Home/bloging');?>"  data-nav-section="blog"> Blog </a></li>
                        <li ><a class="nav-link" href="<?php echo site_url("Gallery"); ?>"> Gallery </a></li>
						<li class="btn-cta"><a href="https://banksampah.id/register" data-nav-section="contact"><span>DAFTAR</span></a></li>
						<!-- For external page link -->
						<!-- <li><a href="http://freehtml5.co/" class="external">External</a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

  <!-- Navigation-->
	<div id="page">

	<section id="gtco-hero" class="gtco-cover" style="background-image: url('<?php echo base_url(); ?>asset/front/img/background.jpg'); background-size: cover; background-attachment:fixed;"  data-section="home"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 style="" class="animate-box" data-animate-effect="fadeIn"><strong>Ubah Sampah <br>Jadi Berkah</strong></h1>
							<p class="gtco-video-link animate-box" data-animate-effect="fadeIn">
								<button class="xx">
									<span>
										<i class="fa fa-chevron-circle-down"></i>
									</span>
								</button>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="gtco-about" data-section="about">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<h1>TENTANG</h1>
					<p class="sub">Apa itu Bank Sampah ?</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
					<div >
						<object style="padding-left: 40px; pointer-events:none; " width="550" height="550" data="<?php echo base_url(); ?>asset/front-index/truck.swf"></object>
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="heading-colored">Bank Sampah Salatiga</h2>
					<p>Bank Sampah merupakan konsep pengumpulan sampah kering dan dipilah serta memiliki manajemen layaknya perbankan. <strong>Tetapi yang ditabung bukan uang, melainkan sampah.</strong> Warga yang menabung yang juga disebut nasabah memiliki buku
                tabungan dan dapat meminjam uang yang nantinya dikembalikan dengan sampah seharga uang yang dipinjam.Sampah yang ditabung ditimbang dan dihargai dengan sejumlah uang nantinya akan dijual di pabrik yang sudah bekerja sama. Sedangkan plastik
                kemasan dibeli ibu-ibu PKK setempat untuk didaur ulang menjadi barang-barang kerajinan. Bank Sampah bertujuan membantu menangani pengolahan sampah di Indonesia serta menyadarkan masyarakat akan lingkungan yang sehat, rapi, dan bersih.</p>
				<a class="btn btn-default btn-lg" role="button" href="<?php echo site_url('Welcome/profil');?>" id="profil">PROFIL BANK SAMPAH SALATIGA</a>					
				</div>
			</div>
		</div>
<br><br>
		<div class="sit" style="background-color: #E0DDDD; padding: 100px;">
			<div class="row" align="center">
				<div class="col-6 col-md-4">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img class="img-circle" src="<?php echo base_url(); ?>asset/front/img/buang.jpg" width="90">
						</div>
						<div class="gtco-copy">
							<br><h3>LINGKUNGAN TERJAGA</h3>
							<p>Ikut menjaga kebersihan lingkungan karena semua sampah yang masih layak akan didaur ulang untuk bumi yang lebih lestari.</p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/GreenGiveIcon2.png" width="90">
						</div>
						<div class="gtco-copy">
							<br><h3>PRODUK KREATIF</h3>
							<p>Sampah yang telah disetor oleh nasabah akan diolah oleh pegawai bank sampah dengan didaur ulang untuk dijadikan kerajinan untuk sampah anorganik, ataupun pupuk untuk sampah organik. </p>
						</div>
					</div>

				</div>

				<div class="col-6 col-md-4">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/1mudah.png" width="90">
						</div>
						<div class="gtco-copy">
							<br><h3>MEMUDAHKAN</h3>
							<p>cukup mendaftar menjadi nasabah, kamu bisa menjual sampahmu dan membuat bumi menjadi lebih baik</p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/6instantpayment.png" width="90">
						</div>
						<div class="gtco-copy">
							<br><h3>PENDAPATAN</h3>
							<p>Bertambahnya pendapatan masyarakat yang mengelola sampah menjadi bahan pupuk organik dan mengolah sampah plastik serta dari penjualan barang bekas yang masih bermanfaat,&nbsp; </p>
						</div>
					</div>


				</div>

				<div class="col-6 col-md-4">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/5bestprice.png" width="90">
						</div>
						<div class="gtco-copy">
							<br><h3>CADANGAN UANG</h3>
							<p>Masyarakat dapat sewaktu-waktu mengambil uang pada tabungannya saat tabungannya sudah terkumpul banyak.&nbsp; </p>
						</div>
					</div>

					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/food.png" width="90">
						</div>
						<div class="gtco-copy">
							<br><h3>DITUKAR BAHAN POKOK</h3>
							<p>Imbalan yang diberikan kepada nasabah tidak hanya berupa uang, tetapi ada pula yang berupa bahan makanan pokok seperti gula, sabun, minyak dan beras.&nbsp; </p>
						</div>
					</div>

				</div>

			</div>
		</div>		
	</section>

	<section id="gtco-carakerja" data-section="carakerja">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<br><br>
					<h2 class="text-center" id="mengapaa"><strong>Cara</strong> Kerja</h2>
					<p class="sub">Mengapa Bank Sampah Salatiga ?</p>
				</div>
			</div>
			<div class="row" align="center">
				<div class="col-6 col-sm-3">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
               				<img src="<?php echo base_url(); ?>asset/front/img/buang.jpg" width="90">
						</div>
						<div class="gtco-copy">
							<br><h3>1. PILAH</h3>
							<p>Memilah sampah bisa dilakukan dengan membedakan tempat sampahmu menjadi 3, <strong> [Organik - Anorganik - B3]</strong>. Pastikan sampah anorganikmu kering.</p>
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-3">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/begggaar.png" width="90" id="beg">
						</div>
						<div class="gtco-copy">
							<br><h3>2. DATANG </h3>
							<p>Nasabah datang ke bank sampah, dengan membawa sampah yang telah dipilah ke lokasi bank sampah</p> <br>
						</div>
					</div>
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/book.png" width="90" id="buk">
						</div>
						<div class="gtco-copy">
							<br><h3>5. BUKU TABUNGAN</h3>
							<p>Setelah melakukan transaksi sampai dengan penimbangan, akan diberikan buku tabungan sebagai nasabah bank sampah, yang nantinya akan digunakan untuk dituliskan berapa rupiah sampah yang dihasilkan pada penjualan saat itu</p>
						</div>
					</div>					
				</div>

				<div class="col-6 col-sm-3">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/signup.png" width="90">
						</div>
						<div class="gtco-copy">
							<br><h3>3. DAFTAR</h3>
							<p>Lakukan pendaftaran ditempat, atau dapat juga melakukan pendaftaran secara online <a href="https://banksampah.id/register">disini.</a> berikan informasi lengkap tentang identitas dan alamat</p>
						</div>
					</div>
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/4bayar.png" width="90" id="ree">
						</div>
						<div class="gtco-copy">
							<br><h3>6. SELESAI</h3>
							<p>Proses di bank sampah selesai, nasabah pulang. Ia pun sudah mengetahui berapa rupiah dan jenis maupun berat sampah yang ditabung.&nbsp; </p>
						</div>
					</div>					
				</div>

				<div class="col-6 col-sm-3">
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-icon">
							<img src="<?php echo base_url(); ?>asset/front/img/2akurat.png" width="90">
						</div>
						<div class="gtco-copy">
							<br><h3>4. TIMBANG</h3>
							<p>petugas bank sampah akan melakukan penimbangan dan penghitungan sampah berdasarkan jenis sampah tersebut. </p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="gtco-jenis" data-section="jenis">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<br><br>
					<h1>Jenis Sampah</h1>
					<p class="sub">Jenis Sampah Apa saja yang dapat ditukarkan di Bank Sampah Salatiga ?</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">
		              <a class="btn btn-lg animated infinite pulse" id="animasi" href="<?php echo site_url('Home/animation');?>" data-toggle="modal">&nbsp;&nbsp;<span class="fa fa-bitbucket animated infinite wobble"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Click Here &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-bitbucket animated infinite wobble"></span> &nbsp;&nbsp; </a>				
					</p>
				</div>
			</div>
			<br><br><br>
<!-- 			<div class="row team-item gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="images/img_team_1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<h2>Jeff Finley</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div>

			<div class="row carakerja-item gtco-carakerja">
				<div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="images/img_team_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2>Craig Campbell</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores, voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi? Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
					<p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio, eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic, voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur fugit ipsam, dolorum excepturi adipisci.</p>
				</div>
			</div> -->
		</div>
	</section>

	<section id="gtco-lokasinya" data-section="lokasinya">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
					<br><br>
					<h1>CONTACT</h1>
					<p class="sub">Jika Anda memiliki pertanyaan atau komentar, hubungi kami dan kami akan dengan senang hati menjawabnya.</p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn"><i class="fa fa-map-marker"></i> &nbsp;&nbsp;Ngampel RT 03 RW 04, Blotongan, Sidorejo, Kota Salatiga, Jawa Tengah</p>
				</div>
			</div>						
		</div>
	</section>
<div style="  width: 100%; margin-right: auto; margin-left: 0px">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1779.9049123949942!2d110.48458121341137!3d-7.3011235285910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7879d435f409%3A0xd10d6c48e9dd368d!2sGg.+Buaya%2C+Blotongan%2C+Sidorejo%2C+Kota+Salatiga%2C+Jawa+Tengah+50715!5e0!3m2!1sen!2sid!4v1516406830845" width="1349" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>	
<br><br>
		<div class="container">
			<div class="row row-pb-md">
			<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box">
					<form action="#">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="text" class="form-control" placeholder="Name" id="name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="text" class="form-control" placeholder="Email" id="email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea name="message" id="message" class="form-control" cols="30" rows="7" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-4 col-md-pull-6 animate-box">
					<div class="gtco-contact-info">
						<ul>
							<li class="phone"><a href="tel://1235235598">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:banksampahmakmur@gmail.com">banksampahmakmur@gmail.com</a></li>
							<li class="url"><a href="#">banksampahmakmur.com</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- 	<footer id="gtco-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer> -->
	    <footer style="text-align: center;">
        <div class="row">
            <div class="col-md-12 footer-about">
                <h3 style="color: white;"><i class="fa fa-recycle"></i> BANK SAMPAH SALATIGA</h3>
                <p>Ngampel RT 03 RW 04, Blotongan, Sidorejo, Kota&nbsp;Salatiga, Jawa Tengah</p>
                <div class="social-links social-icons"><a href="fb.me/banksampah.makmur"><i class="fa fa-facebook"></i></a><a href="instagram.com/galeri_faceart"><i class="fa fa-instagram"></i></a></div>
                <div class="clearfix visible-sm-block"></div>
                <div id="fofot">
<!--                 	<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p> -->

                        <a class="text-muted" href="#mengapa" data-nav-section="about"> &nbsp;&nbsp; Home </a></li>
                        <a class="text-muted" href="news.html" data-nav-section="news"> &nbsp;&nbsp; Blog </a></li>
                        <a class="text-muted" href="gallery.html" data-nav-section="gallery"> &nbsp; &nbsp; Gallery &nbsp;&nbsp;</a></li>
						<a class="text-muted" href="<?php echo site_url("Login"); ?>" data-nav-section="contact">Login Admin</a></div>                	
            </div>
        </div>
    </footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>asset/front-index/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url(); ?>asset/front-index/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>asset/front-index/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>asset/front-index/js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url(); ?>asset/front-index/js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url(); ?>asset/front-index/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/front-index/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url(); ?>asset/front-index/js/main.js"></script>

    <script src="<?php echo base_url(); ?>asset/front/js/scrolling-nav.js"></script>
    <script src="<?php echo base_url(); ?>asset/front/js/jquery.easing.min.js"></script>

	</body>
</html>

