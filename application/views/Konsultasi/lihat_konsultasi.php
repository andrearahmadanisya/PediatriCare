<body class="lihat_konsultasi">
  <div class="card">
    <?php $konsul = $konsultasi ?>
    <div class="card-header">
      <h4><b><?= $konsul['judul'] ?></b></h4>
      <p>penanya : <?= $konsul['username'] ?></p>
    </div>
    <div class="card-body">
      <p class="card-text"><?= $konsul['question'] ?></p>
    </div>
    <div class="card-footer">
      <p>Dijawab oleh : <?= $konsul['dokter'] ?></p>
      <p class="card-jawab">Jawab : <?= $konsul['answer'] ?></p>
    </div>
<!--     <a type="button" href="<?= base_url('JawabKonsultasiController/index/') . $konsul['id_konsultasi'] ?>" class="btn">Jawab</a> -->
    <br>
    <left><a type="button" class="btn" href="<?= base_url('KonsultasiController'); ?>">back</a></left>
  </div>
  <br>
  <br>
</body>
<footer>.</footer>
