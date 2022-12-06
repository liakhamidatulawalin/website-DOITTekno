<?php
include 'koneksi.php';
extract($_POST);

//todo : Variabel
$path = "./image/";
$file_name = $_FILES['gambar']['name'];
$file_size = $_FILES['gambar']['size'];
$target_file = $path . $file_name;
$extension = array("jpg", "png");
$ext_convert = explode('.', $_FILES['gambar']['name']);
$in_array = in_array($ext_convert[1], $extension);
$id = 1;


//todo : Interaksi Button Simpan
if (isset($_POST['btnSimpan'])) {
    //todo : Memberikan kondisi berupa ukuran file
    if ($file_size < 400000) {
        //todo : Pengecekan format foto
        if ($in_array) {
            if (file_exists('image/' . $gambar)) {
                unlink('image/' . $gambar);
            }
            $name = md5(rand()) . '.' . $ext_convert[1];
            move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);
            $update = "update tbportfolio set gambar='$file_name', Instansi='$instansi', ket='$keterangan' where id='$id'";
            $sql_update = mysqli_query($conn, $update);
        }
?>
        <script>
            alert('Berhasil disimpan');
            location.href = 'http://localhost/PROJECT PKL/PROFILE COMPANY/admin.php'
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Ukuran Maximal 40MB dan format gambar 'jpg' atau 'png'")
            location.href = "http://localhost/PROJECT PKL/PROFILE COMPANY/admin.php"
        </script>
<?php
    }
} else {
    $upt = "update tbportfolio set Instansi='$instainsi', ket='$keterangan' where id='$id'";
    $sql_upt = mysqli_query($conn, $upt);
    header("location: admin.php");
}
