<?php
  include '../koneksi.php';
  $idSpp =$_GET['id_spp'];
  $query_mysqli = mysqli_query($koneksi,"DELETE FROM spp WHERE id_spp=$idSpp");

  if ($query_mysqli) {
    echo "<script>alert('Data Spp berhasil diHapus'); window.location.href='read.php'</script>";
  }else{
    echo "<script>alert('Data Spp gagal diHapus'); window.location.href='read.php'</script>";
  }
?>