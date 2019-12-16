<div class="center">
    <div class="card absolute">
        <div class="page-header text-center">
            <h2>Login</h2>
            <h5>Silahkan login terlebih dahulu untuk melanjutkan</h5>
        </div>
        <?php if($_POST) include 'aksi.php'; ?>
        <form class="form-signin" action="?m=login_pemilih" method="post">                        
            <div class="form-group">
                <h5>NIM </h5>
                <input type="text" class="form-control" placeholder="Username" name="user" autofocus />
            </div>
            <div class="form-group">            
                <h5>Password</h5>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" />  
            </div>      
            <div class="form-group">                
                <button class="btn btn-primary w-100" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>                
            </div>    
        </form> 
        <a href="?m=daftar_peserta" class="btn btn-success w-100"><span class="glyphicon glyphicon-glyphicon glyphicon-user"></span> Calon Ketua Himpunan</a>
    </div>
</div>