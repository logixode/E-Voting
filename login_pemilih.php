<div class="page-header text-center">
    <h1>Log-in</h1>
    <h5>Silahkan login terlebih dahulu untuk melanjutkan</h5>
</div>
<div class="row mx-auto">
    <div class="col-md-4">        
        <?php if($_POST) include 'aksi.php'; ?>
        <form class="form-signin" action="?m=login_pemilih" method="post">                        
            <div class="form-group">
                <label>Username </label>
                <input type="text" class="form-control" placeholder="Username" name="user" autofocus />
            </div>
            <div class="form-group">            
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" />  
            </div>      
            <div class="form-group">                
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>                
            </div>    
        </form>      
    </div>
</div>