<div class="center">
    <div class="card absolute">
        <div class="col-md-6 split branding">
            <img src="gambar/logo-hmti.png" width="300">
        </div>
        <div class="col-md-6 split form">
            <div class="page-header text-center">
            <h2>Login Admin</h2>           
            <h5>Silahkan login terlebih dahulu untuk melanjutkan</h5>
        </div>
        <?php if($_POST) include 'aksi.php'; ?>
        <form class="form-signin" action="?m=login" method="post">                        
            <div class="form-group">
                <h5>Username</h5>
                <input type="text" class="form-control" placeholder="Masukkan Username"  required name="user" autofocus />
            </div>
            <div class="form-group">            
                <h5>Password</h5>
                <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan Password" required name="pass" />  
            </div>      
            <div class="form-group">                
                <button class="btn btn-primary w-100" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>
            </div>        
        </form>      
    </div>

</div>
