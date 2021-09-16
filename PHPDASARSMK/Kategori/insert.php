<form action="" method="post">
    Kategori : 
    <input type="text" name="kategori">
    <input type="submit" name="simpan" value="Simpan">


</form>




<?php 

    require_once "../function.php";

    if(isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "INSERT INTO tblkategori VALUES('','$kategori')";

        $result = mysqli_query($koneksi, $sql);

        if($result){
            echo "<script>alert('Data sudah Tersimpan!');window.location.href='https://localhost/PHPSMK/restoran/kategori/select.php'</script>";
        } else {
            echo "<script>alert('Data gagal disimpan!')</script>";
        }

        // echo $result;

        // header("location:https://localhost/PHPSMK/restoran/kategori/select.php");

        // if ($result == true) {
        //     echo "<script>alert('Data sudah Tersimpan!')</script>";
        // } else {
        //     echo "<script>alert('Data gagal Tersimpan!')</script>";
        // }
    
    
    
    }

    



?>