<?php
include '../../../koneksi.php';

$id_stk = $_GET['id_stk'];
$hasil = mysqli_query($koneksi, "SELECT*FROM tb_stk WHERE id_stk='$id_stk'");
while ($data = mysqli_fetch_array($hasil)) {
    $bagian = $data['bagian'];
    $jenis = $data['jenis'];
    $kategori = $data['kategori'];
    $no_dokumen = $data['no_dokumen'];
    $judul = $data['judul'];
    $revisi = $data['revisi'];
    $tmt_berlaku = $data['tmt_berlaku'];
    $keterangan = $data['keterangan'];
    $file_pdf = $data['file_pdf'];
    $file_word = $data['file_word'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Edit STK | E-Arsip - QM Pertamina RU III</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../../assets/css/ready.css">
    <link rel="stylesheet" href="../../../assets/css/demo.css">
    <link rel="stylesheet" href="../../../assets/css/costum.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="icon" href="../../../assets/img/logo-pertamina.png">
    <link rel="stylesheet" href="../../../datatables.min.css">
    <link rel="stylesheet" href="../../../assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="../index.php" class="logo">
                    &nbsp;
                    <img src="../../../assets/img/logo-pertamina-teks.png" alt="" width="160px">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg bg-biru">
                <div class="container-fluid">

                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                        <div class="input-group bg-white">
                            <input type="text" placeholder="Search ..." class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-search search-icon"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <img src="../../../assets/img/profile.jpg" alt="user-img" width="36" class="img-circle">
                                <span class="text-white">Ahmad Sabili</span>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img">
                                            <img src="../../../assets/img/profile.jpg" alt="user">
                                        </div>
                                        <div class="u-text">
                                            <h4>Hizrian</h4>
                                            <p class="text-muted">hello@themekita.com</p>
                                            <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="la la-user"></i>
                                    &nbsp; My Profile
                                </a>
                                <a class="dropdown-item" href="#"></i> My Balance</a>
                                <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="la la-cog"></i>
                                    &nbsp; Account Setting
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="la la-power-off"></i>
                                    &nbsp; Logout
                                </a>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="index.html">
                            <i class="la la-dashboard"></i>
                            <p>Dashboard</p>
                            <!-- <span class="badge badge-count">5</span> -->
                        </a>
                    </li>
                    <li class="nav-item collapse">
                        <a class="collapse-toggle" data-toggle="collapse" href="#collapseDokumen" aria-expanded="true">
                            <i class="la la-file-text"></i>
                            <p>Dokumen</p>
                            <span class="badge">
                                <span class="la la-caret-down"></span>
                            </span>
                        </a>
                        <div class="collapse in" id="collapseDokumen" aria-expanded="true">
                            <a href="data_stk.php" class="active bg-active">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>STK</span>
                                <span class="badge badge-success">23562</span>
                            </a>
                            <a href="../iso/data_iso.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>ISO</span>
                                <span class="badge badge-success">1562</span>
                            </a>
                            <a href="../surat-perintah/data_sp.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Surat Perintah</span>
                                <span class="badge badge-success">362</span>
                            </a>
                            <a href="../surat-keputusan/data_sk.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Surat Keputusan</span>
                                <span class="badge badge-success">17</span>
                            </a>
                            <a href="../kebijakan/kebijakan.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Kebijakan</span>
                                <span class="badge badge-success">17</span>
                            </a>
                            <a href="../rtm/data_rtm.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>RTM</span>
                                <span class="badge badge-success">17</span>
                            </a>
                            <a href="../cip/data_cip.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>CIP</span>
                                <span class="badge badge-success">17</span>
                            </a>
                            <a href="../komet/data_komet.php">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>KOMET</span>
                                <span class="badge badge-success">17</span>
                            </a>
                        </div>
                    </li>

                    <li class="nav-item collapse">
                        <a class="collapse-toggle" data-toggle="collapse" href="#collapseSetup" aria-expanded="true">
                            <i class="la la-cogs"></i>
                            <p>Setup</p>
                            <span class="badge">
                                <span class="la la-caret-down"></span>
                            </span>
                        </a>
                        <div class="collapse in" id="collapseSetup" aria-expanded="true">
                            <a href="#">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Bagian</span>
                            </a>
                            <a href="#">
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <span class="la la-caret-right"></span>
                                &nbsp;
                                <span>Jenis Dokumen</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title">
                        <div class="col-md-6 col-8 align-self-center">
                            <h4 class="page-title font-weight-bold">Edit STK</h4>
                        </div>
                        <!-- <div class="col-md-6 col-4 align-self-center">
                            <a href="tambah.php" class="btn btn-sm pull-right btn-primary"><i class="la la-plus font-weight-bold"></i> &nbsp;Tambah Dokumen</a>
                        </div> -->
                    </div>
                    &nbsp;
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" value="<?php echo $data['id_stk']; ?>" name="id_stk">
                                        <div class="form-group form-inline">
                                            <label for="bagian" class="col-md-2 col-form-label">Bagian</label>
                                            <div class="col-md-10 p-0">
                                                <select class="form-control" id="bagian" name="bagian" required>
                                                    <option value="<?= $bagian; ?>"><?= $bagian; ?></option>
                                                    <?php
                                                    $sql = mysqli_query($koneksi, "SELECT*FROM tb_bagian");
                                                    while ($data = mysqli_fetch_array($sql)) {
                                                    ?>
                                                        <option value=" <?= $data['nama_bagian']; ?>"><?= $data['nama_bagian']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="jenis" class="col-md-2 col-form-label">Jenis</label>
                                            <div class="col-md-9 p-0">
                                                <select class="form-control" id="jenis" name="jenis" required>
                                                    <option value="<?= $jenis; ?>"><?= $jenis; ?></option>
                                                    <option value="Pedoman">Pedoman</option>
                                                    <option value="TKO">TKO</option>
                                                    <option value="TKI">TKI</option>
                                                    <option value="TKPA">TKPA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="kategori" class="col-md-2 col-form-label">Kategori</label>
                                            <div class="col-md-10 p-0">
                                                <select class="form-control" id="kategori" name="kategori" required>
                                                    <option value="<?= $kategori; ?>"><?= $kategori; ?></option>
                                                    <option value="Normal">Normal</option>
                                                    <option value="Critical">Critical</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="no_dokumen" class="col-md-2 col-form-label">No Dokumen</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" class="form-control input-full" id="no_dokumen" name="no_dokumen" required value="<?= $no_dokumen; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="judul" class="col-md-2 col-form-label">Judul</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" class="form-control input-full" id="judul" name="judul" required value="<?= $judul; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="revisi" class="col-md-2 col-form-label">Revisi</label>
                                            <div class="col-md-10 p-0">
                                                <input type="number" class="form-control input-full" id="revisi" name="revisi" required value="<?= $revisi; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="tmt_berlaku" class="col-md-2 col-form-label">TMT berlaku</label>
                                            <div class="col-md-10 p-0">
                                                <input type="text" class="form-control input-full datepicker" id="tmt_berlaku" name="tmt_berlaku" required value="<?= $tmt_berlaku; ?>">
                                                <small id="" class="form-text text-muted">Tanggal kadaluarsa akan diinput otomatis dari TMT berlaku</small>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="keterangan" class="col-md-2 col-form-label">Keterangan</label>
                                            <div class="col-md-10 p-0">
                                                <textarea type="text" class="form-control input-full" id="keterangan" name="keterangan" rows="3" required><?= $keterangan; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="file_pdf" class="col-md-2 col-form-label">Upload file PDF (max. 2MB)</label>
                                            <div class="col-md-5 p-0">
                                                <input type="file" class="form-control-file" id="" name="file_pdf" accept="application/pdf, .pdf">
                                                <small id="" class="form-text text-muted">File sebelumnya: <b><?= $file_pdf; ?></b></small>
                                            </div>
                                        </div>
                                        <div class="form-group form-inline">
                                            <label for="file_word" class="col-md-2 col-form-label">Upload file WORD (max. 2MB)</label>
                                            <div class="col-md-5 p-0">
                                                <input type="file" class="form-control-file" id="" name="file_word" accept=".doc, .docx, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                                <small id="" class="form-text text-muted">File sebelumnya: <b><?= $file_word; ?></b></small>
                                            </div>
                                        </div>
                                        <div class="form-group row float-right">
                                            <div class="col-sm-5 mb-2 mr-2">
                                                <a href="data_stk.php" class="btn btn-danger p-2 float-right">Batal</a>
                                            </div>
                                            <div class="col-sm-5 ml-2 mr-1">
                                                <button type="submit" name="submit" class="btn btn-primary p-2 float-right" value="simpan">Simpan data</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright ml-auto">
                    Copyright © 2021. All rights reserved.
                </div>
            </div>
        </footer>
    </div>
    </div>
</body>
<script src="../../../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../../../assets/js/core/popper.min.js"></script>
<script src="../../../assets/js/core/bootstrap.min.js"></script>
<script src="../../../assets/js/plugin/chartist/chartist.min.js"></script>
<script src="../../../assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="../../../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src=".././../assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../../assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="../../../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../../assets/js/ready.min.js"></script>
<script src="../../../assets/js/demo.js"></script>
<script src="../../../DataTables-1.11.2/js/jquery.dataTables.min.js"></script>
<script src="../../../assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayBtn: "linked",
            language: "id",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>

</html>