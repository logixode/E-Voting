<?php
$row = $db->get_row("SELECT * FROM tb_pemilih WHERE id_pemilih='$_SESSION[id_pemilih]'");
?>
<div class="center">
    <div class="card absolute">
        <div class="page-header">
            <h3>Data Identitas Pemilih Pilkada</h3>
        </div>
        <table class="table table-bordered aw">
            <tr>
                <td>Nama Pemilih</td>
                <td class="w-100"><?=$row->nama_pemilih?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><?=$row->ktp?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?=$row->alamat?></td>
            </tr>
        </table>
<?php 
// $sekarang = time();
// $batas = mktime(12, 0, 0);

if($sekarang > $batas):?>
<!-- <p>Maaf pemilihan berakhir pukul <?=date('H-i-s', $batas)?> WIB</p> -->
<?php else:?>
<a class="btn btn-primary w-100" href="?m=tanda_terima&act=pilih">Lanjutkan <span class="glyphicon glyphicon-chevron-right"></span></a>
<?php endif;?>

    </div>
</div>