<?php
$rows = $db->get_results("SELECT * FROM tb_pencalon ORDER BY kode_pencalon"); 
?>
<style type="text/css">
    .thumbnail img{
        width: 400px;
        height: 300px;
    }
</style>
<div class="page-header">
<h2 class="text-center">Calon Ketua Himpunan Teknik Informatika 2020</h2>
</div>
<div class="row">
    <?php foreach($rows as $row):?>
    <div class="col-md-4">        
        <div class="thumbnail">
            <img src="gambar/<?=$row->gambar?>" />
        </div>
        <h3 class="text-center"><?= $row->kode_pencalon . ". " . $row->nama_pencalon ?></h3>
        <a class="btn btn-block btn-primary" href="aksi.php?act=pilih&ID=<?=$row->id_pencalon?>" onclick="return confirm('<?="Yakin memilih $row->nama_pencalon"?>')"><span class="glyphicon glyphicon-check"></span> Pilih</a>
    </div>
    <?php endforeach?>
 
</div>