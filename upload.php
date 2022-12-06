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
            $name = md5(rand()) . '.' . $ext_convert[1];
            move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);
            $insert = "insert into tbportfolio (id,gambar,Instansi,ket) values ('','$file_name','" . $_POST['instansi'] . "','" . $_POST['keterangan'] . "')";
            $sql_insert = mysqli_query($conn, $insert);
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
    header("location: admin.php");
}
