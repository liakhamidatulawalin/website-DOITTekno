<?php
include "koneksi.php";
extract($_POST);

$select = "select * from tbportfolio";
$sql_select = mysqli_query($conn, $select);
$gambar = "";
while ($data = mysqli_fetch_array($sql_select)) {
    $gambar = $data['gambar'];
}

if (file_exists('image/' . $gambar)) {
    unlink('image/' . $gambar);
    $delete = "delete from tbportfolio where id='$id'";
    $sql_dlt = mysqli_query($conn, $delete);

    if ($sql_dlt) {
?>
<script>
    alert("Data berhasil dihapus");
    location.href = 'http://localhost/PROJECT PKL/PROFILE COMPANY/admin.php'
</script>
<?php
    $sql = "delete from tbportfolio where id='$id'";
    $qry = mysqli_query($conn,$sql);
    header('Location: http://localhost/PROJECT%PKL/PROFILE%COMPANY/admin.php');
    } else {
    ?>
<script>
    alert("Data gagal dihapus");
    location.href = 'http://localhost/PROJECT PKL/PROFILE COMPANY/admin.php'
</script>
<?php
    }
}
?>