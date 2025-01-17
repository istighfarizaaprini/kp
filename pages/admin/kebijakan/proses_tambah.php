<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../../assets/css/ready.css">
    <link rel="stylesheet" href="../../../assets/css/demo.css">
    <link rel="stylesheet" href="../../../assets/css/costum.css">
    <link rel="stylesheet" href="../../../sweetalert2-11.1.5/dist/sweetalert2.min.css">
</head>

<body>
    <script src="../../../assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="../../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../sweetalert2-11.1.5/dist/sweetalert2.all.min.js"></script>
</body>

</html>



<?php
include '../../../koneksi.php';

$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];
$nama_pejabat = $_POST['nama_pejabat'];

$file_pdf = uploadPdf();
if (!$file_pdf) {
    return false;
}


$query = "INSERT INTO tb_kebijakan SET id_kebijakan='', judul='$judul', keterangan='$keterangan', nama_pejabat='$nama_pejabat', file_pdf='$file_pdf'";

$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "<script>
    setTimeout(() => { 
        Swal.fire(
            'Berhasil!',
            'Data berhasil ditambahkan!',
            'success'
          ) 
        },10); 
        window.setTimeout(() => { 
         window.location.replace('data_kebijakan.php');
        } ,5000); 
    </script>";
} else {
    "<script>
    setTimeout(() => { 
        Swal.fire(
            'Gagal!',
            'Data gagal ditambahkan!',
            'error'
          ) 
        },10); 
        window.setTimeout(() => { 
         window.location.replace('tambah.php');
        } ,5000);
    </script>";
}


function uploadPdf()
{
    $temp = $_FILES['file_pdf']['tmp_name'];
    $file_pdf = $_FILES['file_pdf']['name'];
    $size = $_FILES['file_pdf']['size'];
    $type = $_FILES['file_pdf']['type'];
    $folder_pdf = "../../../assets/upload/kebijakan/pdf/";
    // proses validasi
    if ($type == 'application/pdf') {
        if ($size < 2097152) {
            $file_pdf_baru = uniqid() . "_" . $file_pdf;
            move_uploaded_file($temp, $folder_pdf . $file_pdf_baru);
            return $file_pdf_baru;
        } else {
            echo "<script>
            setTimeout(() => { 
                Swal.fire(
                    'Ukuran file PDF terlalu besar!',
                    'Silahkan kompres ukuran PDF! max. 2MB',
                    'error'
                  ) 
                },10); 
                window.setTimeout(() => { 
                 window.location.replace('tambah.php');
                } ,8000);
            </script>";
            return false;
        }
    } else {
        echo "<script>
        setTimeout(() => { 
            Swal.fire(
                'Gagal upload file PDF!',
                'Jenis file harus PDF!',
                'error'
              ) 
            },10); 
            window.setTimeout(() => { 
             window.location.replace('tambah.php');
            } ,8000);
        </script>";
        return false;
    }
}
?>