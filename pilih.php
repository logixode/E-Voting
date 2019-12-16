<?php
    $rows = $db->get_results("SELECT * FROM tb_pencalon ORDER BY kode_pencalon"); 
?>
<style type="text/css">
    /* .thumbnail img{
        width: 400px;
        height: 300px;
    } */
</style>
<div class="container-fluid">
    <!-- <div class="page-header">
        <h2 class="text-center">Calon Ketua Himpunan Teknik Informatika 2020</h2>
    </div> -->
    <div class="center">
        <div class="col-md-8">
            <?php foreach($rows as $row):?>
            <div class="col-md-4">    
                <div class="card kandidat pad-card">

                    <div class="thumbnail">
                        <img src="gambar/<?=$row->gambar?>" />
                    </div>
                    <div class="tim-kandidat margin-top">
                        <h4 class="text-center"><?= $row->kode_pencalon . ". " . $row->nama_pencalon ?></h4>
                    </div>
                    <div class="nama-kandidat margin-top">
                        <table class="w-100" outline="none">
                            <tr>
                                <td>
                                    <h4>Ketua</h4>
                                </td>
                                <td>
                                    <h4>: <?= $row->ketua ?></h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Wakil</h4>
                                </td>
                                <td>
                                    <h4>: <?= $row->wakil ?></h4>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <a class="btn btn-block btn-primary" 
                    href="#" 
                    onclick="
                        // return confirm('<?="Yakin memilih $row->nama_pencalon ?"?>')
                        Swal.fire({
                            text: '<?="Yakin memilih $row->nama_pencalon ?"?>',
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Confirm'
                        }).then((result) => {
                            if (result.value) {
                                Swal.fire({
                                icon: 'success',
                                title: 'Berhasil, terimakasih..',
                                showConfirmButton: false,
                                })
                                setInterval(function(){
                                    window.location.href='aksi.php?act=pilih&ID=<?=$row->id_pencalon?>'
                                }, 2500)
                                
                            }
                        })
                    ">
                        <span class="glyphicon glyphicon-check"></span> Pilih
                    </a>
                </div>    
            </div>
            <?php endforeach?>
        </div>
    </div>
</div>
