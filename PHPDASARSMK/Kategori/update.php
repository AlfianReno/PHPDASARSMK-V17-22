<!-- Update Data -->

<?php 
    require_once "../function.php";

    // echo $id;

    $sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query ($koneksi, $sql);

    $row = mysqli_fetch_assoc($result);

    // echo $row['kategori'];

    // echo $sql;

    // $kategori = 'Jellybean';
    // $id = 13;
    // 
    // echo $sql;



?>

<form action="" method="post">
    Kategori : 
    <input type="text" name="kategori" value ="<?php echo $row['kategori']?>">
    <br>
    <input type="submit" name="simpan" value="Simpan">

</form>

<?php 

if(isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];

    $sql = "UPDATE tblkategori SET kategori ='$kategori' WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);
    if($result){
        echo "<script>alert('Data berhasil Diperbarui!');window.location.href='https://localhost/PHPSMK/restoran/kategori/select.php'</script>";
    } else {
        echo "<script>alert('Data gagal Diperbarui!')</script>";
    }
    
}

?>