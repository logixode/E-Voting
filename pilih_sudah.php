<?php
$var = $db->get_var("SELECT tanda_terima FROM tb_pilih WHERE id_pemilih='$_SESSION[id_pemilih]'");
?>
<div class="center">
    <div class="card card-size pad-card">
        <div class="page-header">
            <h3>Tanda Terima Pemilih</h3>
        </div>
        <p>Hasil suara yang telah Anda masukkan telah tercatat pada sistem E-Voting</p>
        <p>Tanda terima anda adalah <strong><?= $var ?></strong></p>
        <p></p>
        <p>Catatan: mohon catat atau hafalkan tanda terima tersebut untuk melakukan pengecekan hasil perhitungan suara.</p>
    </div>
</div>