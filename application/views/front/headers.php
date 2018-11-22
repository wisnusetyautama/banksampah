<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
                        <li ><a href="<?php echo site_url('Home/bloging');?>"> Blog </a></li>
                        <li ><a class="nav-link" href="<?php echo site_url("Gallery"); ?>"> Gallery </a></li>
						<li class="btn-cta"><a href="https://banksampah.id/register" data-nav-section="contact"><span>DAFTAR</span></a></li>
						<!-- For external page link -->
						<!-- <li><a href="http://freehtml5.co/" class="external">External</a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>