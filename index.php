<?php
/*if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}*/
    include'functions.php';
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Demo source code dengan E-Voting pemilihan berbasis web dengan PHP dan MySQL."/>
    <meta name="keywords" content="E-Voting"/>
    <link rel="icon" href="assets/images/favicon.ico"/>
    
    <title>E-Voting</title>
    <link href="assets/css/journal-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>       
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style type="text/css">
      header img{
        margin-top: 1%;
        height: 150px;
        width: 150px;
      }
      header{
        text-align: center;
      }
    </style>               
  </head>  
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand flex" href="?">
                    <img src="gambar/logo-hmti.png" width="50">
                    E-Voting System Teknik Informatika
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                <?php if($_SESSION['level']!=='admin'): ?>
                <li><a href="?m=pilkada"><span class="glyphicon glyphicon-calendar"></span> E-Voting </a></li>
                <!-- <li><a href="?m=tanda_terima"><span class="glyphicon glyphicon-glyphicon glyphicon-cloud"></span> Login</a></li> -->
                <li><a href="?m=daftar_peserta"><span class="glyphicon glyphicon-glyphicon glyphicon-user"></span> Daftar Calon Kahima</a></li>
                <!-- <li><a href="?m=hasil_voting"><span class="glyphicon glyphicon-glyphicon glyphicon-signal"></span> Hasil Voting</a></li> -->
                <?php endif?>
                
                <!-- <?php if($_SESSION['level']!='admin' || !$_SESSION['login']):?>
                <li><a href="?m=login"><span class="glyphicon glyphicon-calendar"></span> Admin</a></li> -->
                <?php endif?>                
                <?php if($_SESSION['level']=='admin'):?>
                <li><a href="?m=pencalon"><span class="glyphicon glyphicon-user"></span> Pencalon</a></li>
                <li><a href="?m=pemilih"><span class="glyphicon glyphicon-th-large"></span> Pemilih</a></li>                
                <?php endif ?>                      
                                    
                </ul>          
                <ul class="nav navbar-nav navbar-right">
                <?php if($_SESSION['login']):?>
                <li><a href="?m=password"><span class="glyphicon glyphicon-lock"></span> Password</a></li>
                <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php endif ?> 
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>          
    <div class="container-fluid">
        <?php
            if(file_exists($mod.'.php')){
                if($mod=='tanda_terima' && $_SESSION['level']!='pemilih'){
                    redirect_js('?m=login_pemilih');
                } else {
                    include $mod.'.php';
                }                               
            }else
                if($_SESSION['level']!='pemilih'){
                    // redirect_js('?m=login_pemilih');
                    include 'login_pemilih.php';
                } else 
                include 'pilkada.php';
        ?>
    </div>                   
    <!-- <footer class="footer">
      <div class="container">
        <p>Copyright &copy; <?=date('Y')?> SarjanaKomedi.com <em class="pull-right">Diupdate tanggal 13 Oktober 2017</em></p>
      </div>
    </footer> -->
</body>
</html>