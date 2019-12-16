<div class="center">
    <div class="card absolute">
        <div class="col-md-6 split branding">
            <img src="gambar/logo-hmti.png" width="300">
        </div>
        <div class="col-md-6 split form">
            <div class="page-header text-center">
                <h3>E-Voting Kahima/Wakahima HMTI 2020</h3>
                <h5>Silahkan login terlebih dahulu untuk melanjutkan</h5>
            </div>
            <?php if($_POST) include 'aksi.php'; ?>
            <form class="form-signin" action="?m=login_pemilih" method="post">                        
                <div class="form-group">
                    <h5>Nomor Induk Mahasiswa </h5>
                    <input type="text" class="form-control" placeholder="Masukkan NIM" name="user" autofocus required />
                </div>
                <div class="form-group">            
                    <h5>Password</h5>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Masukkan Password" name="pass" required />  
                </div>      
                <div class="form-group">                
                    <button class="btn btn-primary w-100" type="submit">LOGIN</button>                
                </div>    
            </form> 
            <!-- <a href="?m=daftar_peserta" class="btn btn-success w-100">Lihat Calon Ketua Himpunan</a> -->
        </div>
        
    </div>
</div>