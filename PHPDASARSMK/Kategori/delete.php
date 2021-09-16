<?php 



require_once "../function.php";
$sql = "DELETE FROM tblkategori WHERE idkategori = $id";

$result = mysqli_query ($koneksi, $sql);

if($result){
    echo "<script>alert('Data sudah Terhapus!');window.location.href='https://localhost/PHPSMK/restoran/kategori/select.php'</script>";
} else {
    echo "<script>alert('Data gagal Terhapus!')</script>";
}

// header("location:https://localhost/PHPSMK/restoran/kategori/select.php");

echo $sql;

?>