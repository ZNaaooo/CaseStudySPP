<?php
  include '../koneksi.php';
  $idPetugas =$_GET['id_petugas'];
  $query_mysqli = mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas=$idPetugas");

  if ($query_mysqli) {
    echo "<script>alert('Data petugas berhasil diHapus'); window.location.href='read.php'</script>";
    ("location:read.php");
  }else{
    echo "<script>alert('Data petugas gagal diHapus'); window.location.href='read.php'</script>";
  }
?>