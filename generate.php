<div class="center">
    <div class="card card-size pad-card">

        <div class="page-header text-center">
            <h2>Generate Password</h2>           
            <h5>Masukkan Nim untuk melanjutkan</h5>
        </div>
        <?php if($_POST) include 'aksi.php'; ?>
        <form class="form-signin" action="?m=generate" method="post">                        
            <div class="form-group">
                <h5>Username</h5>
                <input type="text" class="form-control" placeholder="Username" name="user" autofocus required/>
            </div>
            <div class="form-group">
                <h5>Password</h5>
                <label for=""><?php echo rand() ?></label>
            </div>
            <div class="form-group">            
                <h5>Masukkan Password</h5>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required/>  
            </div>      
            <div class="form-group">                
                <button class="btn btn-primary w-100" type="submit"><span class="glyphicon glyphicon-log-in"></span> Verify</button>
            </div>        
        </form>      
    </div>

</div>
