<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bank Sampah Makmur Salatiga">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/user.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/untitled.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/Pretty-Footer.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/untitled-1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/untitled-2.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/Google-Style-Login.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/front/css/Google-Style-Login-1.css">    
</head>

<style type="text/css">
header{
  background: url('<?php echo base_url(); ?>asset/front/img/log.jpg') no-repeat center center fixed;
  background-size:cover;
  background-position:center;
  background-attachment:fixed;
}
</style>
<body>
     <header>
        <nav class="navbar navbar-default navbar-fixed-top" id="haha">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link nav-link js-scroll-trigger" href="<?php echo site_url('Home/index');?>" target="_parent" id="logo"><i class="fa fa-recycle" id="hea"></i><span class="text-primary text-title">Bank sampah salatiga</span></a>
                    <button class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navcol-1"></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="#mengapa" class="nav-link js-scroll-trigger">Tentang </a></li>
                        <li role="presentation"><a href="#carakerja" class="nav-link js-scroll-trigger">Cara Kerja</a></li>
                        <li role="presentation"><a href="#jenis" class="nav-link js-scroll-trigger">Jenis Sampah</a></li>
                        <li role="presentation"><a href="#lokasinya" class="nav-link js-scroll-trigger">Lokasi </a></li>
                        <li role="presentation"><a>NEWS </a></li>
                        <li role="presentation"><a href="#">Gallery </a></li>
                        <li role="presentation"><a class="text-uppercase text-primary bg-primary" href="https://banksampah.id/register" id="daftar">Daftar </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="promo">
            <div class="login-card"><img src="<?php echo base_url(); ?>asset/front/img/4green.png" class="profile-img-card">
                <h3 id="tulisan">LOGIN ADMIN</h3>
                <form class="form-signin" action="<?php echo base_url('Login/cek_login'); ?>" method="post">
                    <input class="form-control" type="text" name="username" required="" placeholder="Username">
                    <input class="form-control" type="password" name="password" required="" placeholder="Password" id="password">
                    <div class="checkbox">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password' ">Show Password</label>
                        </div>
                    </div>
                    <button class="btn btn-default btn-block btn-lg" type="submit" id="sumbit" name="submit" value="login">LOGIN </button>
                </form>
            </div>
        </div>
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
</body>

</html>