<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/rs.css"; ?>" />
</head>
<body class="rumahsakit">
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h2 class="display-4">Anda Ingin Konsultasi Seputar Anak ?</h2>
            <p class="lead">Tanyakan kepada kami secara mudah dan cepat</p>
            <a class="btn btn-primary btn-lg" href="<?=base_url('KonsultasiController')?>" role="button">klik disini</a>
        </div>
    </div>

    <br><br>

    <div class="container">
        <h2>LIST RUMAH SAKIT</h2>
        <br>
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav float-right">
                <img height="600px" width="300px" src="<?php echo base_url(); ?>assets/images/rs/sideimg.png">
            </ul>
        </div> <!-- /#sidebar-wrapper -->
        <?php foreach ($rumahsakit as $rs) { ?>
            <div class="row">
                <div class="media position-relative">
                    <img height="100px" aaclass="mr-3" src="assets/images/rs/icon.png" alt="Generic placeholder image">
                    <div class="media-body">
                        <i class="fa fa-hospital-o" style="font-size: 12px"></i>
                        <h4 class="mt-0"><?= $rs['nama'] ?></h4>
                        <p><?= $rs['alamat'] ?></p>
                        <p><?= $rs['notelp'] ?></p>
                        <?php if($user['role']==1) { ?>
                        <a type="button" class="btn btn-danger btn-sm" href="<?php echo base_url() . 'RumahSakitController/delete/' . $rs['id_rumahsakit'] ?>" onClick="return confirm('Apakah Anda Yakin?')">Delete</a></td>
                        <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#UpdateRS<?= $rs['id_rumahsakit'] ?>"> Update</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <br>
        <?php } ?>
        <?php if($user['role']==1) { ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH </button>
        <?php } ?>

        <div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                            <h2>TAMBAH DATA RUMAH SAKIT</h2>
                        </center>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= base_url() ?>RumahSakitController/addRs">
                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Rumah Sakit" name="nama" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nomor Telp" name="notelp">
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <?php foreach ($rumahsakit as $rs) { ?>
            <div class="modal fade" id="UpdateRS<?= $rs['id_rumahsakit'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <center>
                                <h2>EDIT DATA RUMAH SAKIT</h2>
                            </center>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= base_url() . 'RumahSakitController/update/' . $rs['id_rumahsakit'] ?>">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama Rumah Sakit</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Rumah Sakit" name="nama" value="<?= $rs['nama'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Alamat</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat" name="alamat" value="<?= $rs['alamat'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label><br>
                                    <input type="text" class="form-control" placeholder="Nomor Telp" name="notelp" value="<?= $rs['notelp'] ?>">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
