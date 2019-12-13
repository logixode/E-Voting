<?php
$rows = $db->get_results("SELECT * FROM tb_pencalon ORDER BY kode_pencalon"); 
?>

<style type="text/css">
	li{
		text-align: justify;
	}
	p{
		text-align: justify;
	}
	.thumbnail img{
		width: 400px;
		height: 300px;
	}
</style>
<div class="page-header">
    <h1 class="text-center">Daftar Calon Kahima TPHT 2019</h1>
</div>
<div class="row">
    <?php foreach($rows as $row):?>
    <div class="col-md-6">        
        <div class="thumbnail">
            <img src="gambar/<?=$row->gambar?>" />
        </div>
        <h3 class="text-center"><?=$row->nama_pencalon?></h3>      
    </div>
    <?php endforeach?> 

    <!-- visi misi -->
    <div class="col-md-6">
		<div class="card col-md-6" style="text-align: center;">
		  <div class="card-body">
		    <h3 class="card-title">Visi</h3>
		    <ol>
		    	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercit</li>
		    	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercit</li>
		    	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercit</li>
		    </ol>
		  </div>
		</div>
		<div class="card col-md-6" style="text-align: center;">
		  <div class="card-body">
		    <h3 class="card-title">Misi</h3>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  </div>
		</div>
    </div>
    <div class="col-md-6">
		<div class="card col-md-6" style="text-align: center;">
		  <div class="card-body">
		    <h3 class="card-title">Visi</h3>
		    <ol>
		    	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercit</li>
		    	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercit</li>
		    	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercit</li>
		    </ol>
		  </div>
		</div>
		<div class="card col-md-6" style="text-align: center;">
		  <div class="card-body">
		    <h3 class="card-title">Misi</h3>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  </div>
		</div>
    </div>

</div>